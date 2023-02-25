<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class InvoicesList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 5;

    public function render()
    {
        $invoices = Invoice::with('user', 'products')
            ->where('status', 1)
            ->where(function ($q) {
                $q
                    ->where('id', $this->search)
                    ->orWhereHas('user', fn ($q) => $q->where('name', 'like', '%' . $this->search . '%'));
            })
            ->paginate($this->perPage);

        $invoices->map(function ($invoice) {
            $invoice->total = $invoice->products->each(function ($product) {
                $product->total = $product->pivot->quantity * $product->pivot->unit_price;

                return $product;
            })->sum('total');


            return $invoice;
        });

        return view('livewire.invoices-list', compact('invoices'));
    }
}
