<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 5;

    public function render()
    {
        $users = User::withCount('invoices')
            ->where('name', 'like', "%" . $this->search . "%")
            ->orWhere('email', 'like', "%" . $this->search . "%")
            ->paginate($this->perPage);

        return view('livewire.users-list', compact('users'));
    }
}
