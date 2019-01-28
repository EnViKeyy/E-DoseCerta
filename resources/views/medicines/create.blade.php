@extends('adminlte::page')

@section('title', 'Cadastrar Novo Fármaco')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar novo fármaco</h1>
@stop

@section('content')
    @include('medicines._form', [
        'form' => $form
    ])
@stop
