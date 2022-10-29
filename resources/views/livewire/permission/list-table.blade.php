<div>
    <form wire:submit.prevent="save" class="flex flex-col space-y-8">
        @foreach($response->groupPermissions as $key => $itemGroupPermission)
            <div class="flex flex-col space-x-8">
                <p>{{ $itemGroupPermission['name'] }}</p>
                <div class="flex flex-col ">
                    @foreach($itemGroupPermission['permissions'] as $itemPermission)
                        <div class="flex justify-start items-center">
                            <input
                                wire:model.defer="state.permission.{{ $itemPermission['id'] }}"
                                value="{{ $itemPermission['name'] }}"
                                id="checkbox-{{ $itemGroupPermission['name'] }}" aria-describedby="checkbox-1"
                                type="checkbox"
                                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded"
                            >
                            <label for="checkbox-{{ $itemGroupPermission['name'] }}" class="text-md ml-3 font-medium text-gray-900">{{ $itemPermission->label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn-primary">Salvar</button>
    </form>
</div>
