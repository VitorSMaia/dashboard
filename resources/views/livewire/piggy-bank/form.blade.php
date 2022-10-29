<div>
    <form class="p-5">
        <div class="grid grid-cols-12 space-y-8">
            <div class="col-span-12">
                <label for="name" class="font-light text-xl ">
                    Valor
                    <input wire:model="state.value" id="Valor" type="text" class="value w-full rounded-xl border-none">
                </label>
            </div>
            <div class="col-span-6">
{{--                <button wire:click="exit" class="px-3 py-2 rounded-full bg-green-600 font-light text-2xl w-full hover:bg-green-700 active:translate-y-1 shadow-lg"> Saída</button>--}}
                <x-devtech.button.action icon="user" type="button" wire:click="exit()">
                    Fechar
                </x-devtech.button.action>
            </div>
            <div class="col-span-6">
                <x-devtech.button.action icon="user" wire:click="entry()">
                    Fechar
                </x-devtech.button.action>
{{--                <button wire:click="entry" class="px-3 py-2 rounded-full bg-green-600 font-light text-2xl w-full hover:bg-green-700 active:translate-y-1 shadow-lg"> Entrada</button>--}}
            </div>
        </div>
    </form>
</div>
{{--@push('scripts')--}}
{{--    <script>--}}
{{--        elDataInput = document.querySelector('input');--}}
{{--        let im = new Inputmask('99/99/9999');--}}

{{--        im.mask(elDataInput);--}}

{{--    </script>--}}
{{--@endpush--}}
