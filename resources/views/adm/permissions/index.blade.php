@extends('layouts.app')
@section('header')
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Permissões') }}
        </h2>
        @haspermission('permission_create')
            @livewire('components.buttom', ['component' => 'permission.form', 'text' => 'Cadastrar'])
        @endhaspermission
    </div>
@endsection
@section('content')
    <div class="m-10">
        @livewire('permission.table')
    </div>
@endsection
