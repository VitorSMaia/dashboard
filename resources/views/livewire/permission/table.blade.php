<div>
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-start justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nome</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($response->roles as $itemRole)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                            </div>
                                            <span>{{ $itemRole->name }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <x-devtech.button.action class="btn-action-warning" icon="edit" wire:click="openModalSide('permission.list-table', { id:{{ $itemRole->id }} })">Permissao</x-devtech.button.action>
                                            @if($itemRole->name != 'Administrador')
                                                <x-devtech.button.action class="btn-action-danger" icon="delete" wire:click="delete({{ $itemRole->id }})">Deletar</x-devtech.button.action>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
