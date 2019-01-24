@extends('adminlte::page')

@section('title', 'Cadastrar nova espécie')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar nova espécie</h1>
@stop

@section('content')
    @include('species._form', [
        'form' => $form
    ])
@stop
