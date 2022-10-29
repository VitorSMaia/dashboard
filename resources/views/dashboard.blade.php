@extends('layouts.app')
@section('content')
<div>
    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    @endsection
    @livewire('notifications.invite')
    @livewire('modals.center')
    @livewire('modals.side')

</div>
@endsection
