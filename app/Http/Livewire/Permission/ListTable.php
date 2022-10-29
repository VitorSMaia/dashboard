<?php

namespace App\Http\Livewire\Permission;

use App\Models\GroupPermission;
use App\Trait\Modal;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use StdClass;

class ListTable extends Component
{
    use Modal;

    public $idRole;
    public $state;


    public function mount($id)
    {
        if ($id) {
            $this->idRole = $id;
            $this->state['permission'] = $this->getRole();
        }
    }

    public function getGroupPermissions()
    {
        return GroupPermission::query()->with('permissions')->get();
    }

    public function getRole()
    {
        $permissionRole = Role::query()->with('permissions')->findOrFail($this->idRole)->toArray()['permissions'];
        $array = [];
        foreach ($permissionRole as $itemRol) {
            $array[$itemRol['id']] = $itemRol['name'];
        }
        return $array;
    }

    public function save()
    {
        $role = Role::query()->findOrFail($this->idRole);
        $namePermissionsRevoke = [];
        $namePermissions = [];

        foreach ($this->state['permission'] as $itemPermission) {
            if ( $itemPermission == false) {
                $namePermissionsRevoke[] = $itemPermission;
            } else {
                $namePermissions[] = $itemPermission;
            }
        }

        $role->revokePermissionTo($namePermissionsRevoke);
        $role->givePermissionTo($namePermissions);

        $this->closeModalSide();
    }

    public function render()
    {
        $response = new StdClass;
        $response->groupPermissions = $this->getGroupPermissions();

        return view('livewire.permission.list-table', ['response' => $response]);
    }
}
