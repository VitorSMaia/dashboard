<div>
    <div x-data="{centerModal: @entangle('show') }">
        <div
            x-cloak
            x-show="centerModal"
            class="w-full h-full bg-gray-800/40 dark:bg-gray-200/40 top-0 fixed"
            :class="{'ease-out duration-300 opacity-100 visible': centerModal === true, 'ease-in duration-300 opacity-0 invisible': centerModal === false}"
        ></div>
        <div
            x-cloak x-show="centerModal"
{{--            @click="centerModal = false"--}}
            class="fixed top-0 z-30 flex items-center justify-center min-h-screen w-screen"
        >
            <div
                @click.outside="centerModal = false"
                class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-auto shadow-xl transition-all sm:my-8 sm:align-middle md:w-1/3 max-h-[500px] ed-scrollbar"
                :class="{'ease-out duration-300 opacity-100 translate-y-0 sm:scale-100 visible': centerModal === true, 'ease-in duration-300 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95 invisible': centerModal === false}"
            >
                @if($show)
                    @livewire($component, $params)
                @endif
                <div class="bg-gray-50 px-4 py-3 flex justify-end">
                    <x-devtech.button type="button" wire:click="close()">
                        Fechar
                    </x-devtech.button>
                </div>
            </div>
        </div>
    </div>
</div>
