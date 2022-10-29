<?php

namespace App\Http\Livewire\Permission;

use App\Trait\Modal;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use StdClass;

class Table extends Component
{
    use Modal;

    protected $listeners = [
        'refreshTablePermission' => '$refresh'
    ];

    public function getRole()
    {
        return Role::query()->get();
    }

    public function delete($id)
    {
        Role::query()->findOrFail($id)->delete();
        $this->emit('refreshTablePermission');
    }

    public function render()
    {
        $reponse = new StdClass;
        $reponse->roles = $this->getRole();

        return view('livewire.permission.table', ['response' => $reponse]);
    }
}
