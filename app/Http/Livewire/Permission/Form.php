<?php

namespace App\Http\Livewire\Permission;

use App\Trait\Modal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Form extends Component
{
    use Modal;

    public $state;

//    public function mount()
//    {
//        dd('ss');
//    }

    public function save()
    {
        Role::query()->create($this->state);
        $this->closeModalSide();
        $this->emit('refreshTablePermission');
//        $user = Auth::user();
//        dd($user->revokePermissionTo(['criar','editar']));
//        dd($user->hasAnyRole(['Administrador', 'reader']));
//        $user->givePermissionTo(['criar','editar']);
//        $user->removeRole('Administrador');
//dd(Auth::user()->hasAnyPermission(['criar', 'deletar']));


//        $user->assignRole('Administrador');
//        $role = Role::query()->find(2);
//
//        $role->givePermissionTo(['criar','editar']);
//        Permission::query()->create(
//            ['name' => 'criar']
//        );
//        Permission::query()->create(
//            ['name' => 'visualizar']
//        );
//        Permission::query()->create(
//            ['name' => 'deletar']
//        );
//        Role::query()->create();
//        Permission::query()->create($this->state);
    }

    public function render()
    {
        return view('livewire.permission.form');
    }
}
