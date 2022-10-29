<div>
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-start justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nome</th>
                            <th class="py-3 px-6 text-left">E-mail</th>
                            @haspermission(['user_edit', 'user_delete'])
                                <th class="py-3 px-6 text-center">Ações</th>
                            @endhaspermission
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach($response->users as $itemUser)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div>
                                        <span>{{ $itemUser->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div>
                                        <span>{{ $itemUser->email }}</span>
                                    </div>
                                </td>
                                @haspermission(['user_edit','user_delete'])
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        @haspermission('user_edit')
                                            <x-devtech.button.action class="btn-action-warning" icon="edit" wire:click="openModalSide('user.form', { id:{{ $itemUser->id }} })">Editar</x-devtech.button.action>
                                        @endhaspermission
                                        @haspermission('user_delete')
                                            @if((Auth::user()->id != $itemUser->id) && ($itemUser->roles[0]['name'] != 'Administrador'))
                                                <x-devtech.button.action class="btn-action-danger" icon="delete" wire:click="delete({{ $itemUser->id }})">Deletar</x-devtech.button.action>
                                            @endif
                                        @endhaspermission
                                    </div>
                                </td>
                                @endhaspermission
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
