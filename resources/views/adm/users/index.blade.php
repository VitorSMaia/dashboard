@extends('layouts.app')
@section('header')
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Usuários') }}
        </h2>
        @haspermission('user_create')
            @livewire('components.buttom', ['component' => 'user.form', 'text' => 'Cadastrar'])
        @endhaspermission
    </div>
@endsection
@section('content')
    <div class="m-10">
        @livewire('user.table')
    </div>
@endsection
