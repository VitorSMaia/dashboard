<?php

namespace Database\Seeders;

use App\Models\GroupPermission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleCount = Role::query()->count();
        if ($roleCount == 0) {
            $role = Role::query()->create([
                'name' => 'Administrador',
                'guard_name' => 'web'
            ]);


            $permissions = [
                [
                'name' => 'Permissões',
                'permissions' => [

                    [
                        'name' => 'permission_view',
                        'label' => 'Visualizar Permissões',
                    ],
                    [
                        'name' => 'permission_create',
                        'label' => 'Cadastrar Permissões',
                    ],
                    [
                        'name' => 'permission_edit',
                        'label' => 'Editar Permissões',
                    ],
                    [
                        'name' => 'permission_delete',
                        'label' => 'Deletar Permissões',
                    ],
                ]
                ],
                [
                    'name' => 'Usuários',
                    'permissions' => [
                        [
                            'name' => 'user_view',
                            'label' => 'Visualizar Usuários',
                        ],
                        [
                            'name' => 'user_create',
                            'label' => 'Cadastrar Usuários',
                        ],
                        [
                            'name' => 'user_edit',
                            'label' => 'Editar Usuários',
                        ],
                        [
                            'name' => 'user_delete',
                            'label' => 'Deletar Usuários',
                        ],
                    ]

                ]
            ];


            foreach ($permissions as $itemPermission) {
                $groupPermission = GroupPermission::query()->updateOrCreate([
                    'name' => $itemPermission['name']
                ], [
                    'name' => $itemPermission['name']
                ]);
                foreach ($itemPermission['permissions'] as $itemPerm) {
                    Permission::query()->updateOrCreate([
                        'name' => $itemPerm['name'],
                        'label' => $itemPerm['label'],
                        'group_permission_id' => $groupPermission['id']
                    ]);
                }
            }

            $role->givePermissionTo(['permission_view', 'permission_create', 'permission_edit', 'permission_delete']);
            $user = User::query()->find(1);
            $roleId = Role::query()->first();
            $user->assignRole($roleId);
        }

    }
}
