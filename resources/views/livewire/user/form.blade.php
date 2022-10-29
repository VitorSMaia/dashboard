<div>
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-12 gap-10">
            <div class="col-span-6">
                <label for="name" class="font-light text-xl ">
                    Nome
                    <input wire:model.defer="state.name" id="name" type="text" class="w-full rounded-xl border-none">
                </label>
            </div>
            <div class="col-span-6">
                <label for="email" class="font-light text-xl ">
                    E-mail
                    <input type="email" wire:model.defer="state.email" id="email" class="w-full rounded-xl border-none">
                </label>
            </div>
            <div class="col-span-6">
                <label for="password" class="font-light text-xl ">
                    Senha
                    <input type="password" wire:model.defer="state.password" id="password" class="w-full rounded-xl border-none">
                </label>
            </div>
            <div class="col-span-6">
                <label class="block text-xl font-light text-gray-700">Nível de Acesso</label>
                <select wire:model="state.roles" class="input-select">
                    <option value="" data-default disabled selected>Escolha a permissão...</option>
                    @foreach($response->roles as $itemRole)
                        <option value="{{ $itemRole }}" >{{ $itemRole }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-12">
                <button class="px-3 py-2 rounded-full bg-green-600 font-light text-2xl w-full hover:bg-green-700 active:translate-y-1 shadow-lg"> Salvar</button>
            </div>
        </div>
    </form>
</div>
