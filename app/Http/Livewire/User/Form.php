<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Trait\Modal;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use StdClass;


class Form extends Component
{
    use Modal;

    public $state = [
        'roles' => ''
    ];

    public $idUser;

    public function mount($id = null)
    {
        if ($id) {
            $this->idUser = $id;
            $this->state = $this->getUser();
        }
    }

    public function getuser()
    {
        $users[] = User::query()->with('roles')->findOrFail($this->idUser)->toArray();

        $array = [];

        foreach ($users as $key => $itemUser) {
            if ($itemUser['roles']) {
                $array['roles'] = $itemUser['roles'][$key]['name'];
            }
            $array['id'] = $itemUser['id'];
            $array['name'] = $itemUser['name'];
            $array['email'] = $itemUser['email'];
        }
        return $array;
    }

    public function getRoles()
    {
        $permissionRole = Role::query()->with('permissions')->get()->toArray();
        $array = [];
        foreach ($permissionRole as $itemRol) {
            $array[$itemRol['id']] = $itemRol['name'];
        }
        return $array;
    }

    public function update()
    {
        $request['name'] = $this->state['name'];
        $request['email'] = $this->state['email'];
        $request['password'] = $this->state['password'];

        $user = User::query()->findOrFail($this->idUser);
        $user->update($request);

        $user->syncRoles($this->state['roles']);

//        $user = User::query()->create($request);
//        $user->assignRole($this->state['role']);

        $this->closeModalSide();
        $this->emit('refreshTableUsers');
    }

    public function save()
    {
        if ($this->idUser) {
            return $this->update();
        }

        $request['name'] = $this->state['name'];
        $request['email'] = $this->state['email'];
        $request['password'] = $this->state['password'];

        $user = User::query()->create($request);
        $user->assignRole($this->state['role']);

        $this->closeModalSide();
        $this->emit('refreshTableUsers');
    }

    public function render()
    {
        $response = new StdClass;
        $response->roles = $this->getRoles();

        return view('livewire.user.form', ['response' => $response]);
    }
}
