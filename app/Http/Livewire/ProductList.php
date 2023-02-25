<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 5;
    // public $products;

    public function render()
    {
        $products = Product::where('name', 'like', "%" . $this->search . "%")->paginate($this->perPage);

        return view('livewire.product-list',compact('products'));
    }
}
