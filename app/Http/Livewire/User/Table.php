<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Trait\Modal;
use Livewire\Component;
use StdClass;

class Table extends Component
{
    use Modal;

    protected $listeners = ['refreshTableUsers' => '$refresh'];
    public function getUsers()
    {
        return User::query()->with('roles')->get();
    }

    public function delete($id)
    {
        User::query()->findOrFail($id)->delete();
        $this->emit('refreshTableUsers');
    }


    public function render()
    {
        $response = new StdClass;
        $response->users = $this->getUsers();

        return view('livewire.user.table', ['response' => $response]);
    }
}
