<div>
    <div class="flex flex-col justify-center items-start">
        <p class="text-xl font-light font-sans">Total Acumulado:</p>
        <p class="text-lg font-light font-sans">R$</p>
        <p class="text-9xl font-extralight font-sans">{{ formatMoney($this->value) }} </p>
        <div class="flex flex-col">
            @foreach($response->listValues as $itemValue)
                <div class="flex gap-10">
                    <p class="text-2xl font-extralight
                    {{ $itemValue['positive'] == 1 ?
                                     'text-green-500' : 'text-red-500' }}">{{ $itemValue['created_at'] }}</p>
                    <p  class="text-2xl font-extralight {{ $itemValue['positive'] == 1 ?
                                     'text-green-500' : 'text-red-500' }}">R$ {{ formatMoney($itemValue['value']) }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
