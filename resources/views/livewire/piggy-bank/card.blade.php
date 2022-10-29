<div>
    <div wire:loading wire:target="entry" class="fixed inset-0 bg-gray-900 opacity-90">
        <div class="min-h-screen">
            <div class="flex justify-center items-center">
                <span class="material-symbols-outlined z-50 text-white text-4xl animate-spin">
                    autorenew
                </span>
            </div>
        </div>
    </div>
    <div class="m-10">
        <div class="grid grid-cols-12 space-x-8">
            <div class="col-span-2 space-y-10">
                <div class="bg-red-600 rounded-full h-20 w-20">
                    <div class="cursor-pointer">
                        <img src="{{ asset('img/moedas/dollar.png') }}" alt="">
                    </div>
                </div>
                <div class="bg-red-600 rounded-full h-20 w-20">
                    <div class="cursor-pointer">
                        <img src="{{ asset('img/moedas/dollar.png') }}" alt="">
                    </div>
                </div>

            </div>
            <div class="col-span-10 space-y-10">
                <div class="flex justify-between">
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('USD', '-10')">-10</div>
                        </div>
                    </div>
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('USD', '-1')">-1</div>
                        </div>
                    </div>
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('USD', '1')">1</div>
                        </div>
                    </div>
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('USD', '10')">10</div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('ETH', '-10')">-10</div>
                        </div>
                    </div>
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('ETH', '-1')">-1</div>
                        </div>
                    </div>
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('ETH', '1')">1</div>
                        </div>
                    </div>
                    <div class="bg-blue-600 rounded-lg h-20 w-20 cursor-pointer">
                        <div class="flex justify-around h-full items-center rounded-lg">
                            <div wire:click="entry('ETH', '10')">10</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <input id="myInput" type="text" class="form-control" name="celular" required>

            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    $(document).ready(function(){
        $('#myInput').mask('(99) 9 9999-9999');
    });
</script>
@endpush
