<div>
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-12 space-y-8">
            <div class="col-span-12">
                <label for="name" class="font-light text-xl ">
                    Nome
                    <input wire:model="state.name" id="name" type="text" class="w-full rounded-xl border-none">
                </label>
            </div>
            <div class="col-span-12">
                <button class="px-3 py-2 rounded-full bg-green-600 font-light text-2xl w-full hover:bg-green-700 active:translate-y-1 shadow-lg"> Salvar</button>
            </div>
        </div>
    </form>
</div>
