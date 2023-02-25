<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InvoiceForm extends Component
{
    public $invoice;
    public $user_id, $address,$total;
    public $selected_products = [
        [
            "id" => null,
            "name" => null,
            "quantity" => 0,
            "price" => null,
        ]
    ];

    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'selected_products.*' => 'array',
        'selected_products.*.id' => 'exists:products,id',
        'selected_products.*.quantity' => 'required|numeric|min:1',
    ];

    public function render()
    {
        $users = User::get();

        $products = Product::get();

        $this->total = collect($this->selected_products)->map(function ($product)
        {
            $product['total'] = $product['quantity'] * $product['price'];

            return $product;
            
        })->sum('total');

        return view('livewire.invoice-form', compact('users', 'products'));
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function updatedUserId()
    {
        if ($this->user_id) {
            $this->address = User::findOrFail($this->user_id)->address;
        } else {
            $this->address = null;
        }
    }

    public function addProduct()
    {
        array_push($this->selected_products, [
            "id" => null,
            "name" => null,
            "quantity" => 0,
            "price" => null,
        ]);
    }

    public function deleteItem($key)
    {
        unset($this->selected_products[$key]);
    }

    public function selectedProductsUpdated($key)
    {
        if ($this->selected_products[$key]['id']) {
            $product = Product::findOrFail($this->selected_products[$key]['id']);

            $this->selected_products[$key]['name'] = $product->name;

            $this->selected_products[$key]['price'] = $product->price;
        } else {
            $this->selected_products[$key]['name'] = null;

            $this->selected_products[$key]['price'] = null;
        }
    }

    public function clearAll()
    {
        $this->user_id = null;
        $this->address = null;
        $this->selected_products = [
            [
                "id" => null,
                "name" => null,
                "quantity" => 0,
                "price" => null,
            ]
        ];
    }

    public function save()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            $invoice = $this->invoice;

            $products_ids = collect($this->selected_products)->mapWithKeys(function ($product,$key)
            {
                return [$product['id']=> [
                    "quantity"=> $product['quantity'],
                    "unit_price" => $product['price']
                ]];
            });

            $invoice->products()->sync($products_ids);

            $invoice->update([
                'status' => 1,
                'user_id' => $this->user_id
            ]);

            DB::commit();

            redirect()->route('homepage');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
            redirect()->route('homepage');
        }
    }
}
