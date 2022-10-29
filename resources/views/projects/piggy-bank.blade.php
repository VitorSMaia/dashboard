@if(!\Illuminate\Support\Facades\Auth::check())
    @extends('layouts.app')
    @section('header')
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-900 leading-tight">
                {{ __('Cofrinho') }}
            </h2>
        </div>
    @endsection
@else
{{--    @extends('layouts.guest')--}}
{{--    @section('header')--}}
{{--        <div class="flex justify-between items-center">--}}
{{--            <h2 class="font-semibold text-xl text-gray-900 leading-tight">--}}
{{--                {{ __('Cofrinho') }}--}}
{{--            </h2>--}}
{{--        </div>--}}
{{--    @endsection--}}
@endif
@section('content')
    <div class="flex justify-between items-center">
        @livewire('piggy-bank.card')
        @livewire('piggy-bank.value')
    </div>
@endsection
