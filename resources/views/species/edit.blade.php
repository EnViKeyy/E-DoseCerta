@extends('adminlte::page')

@section('title', 'Editar Espécie')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar espécie</h1>
@stop

@section('content')
    @include('species._form', [
        'form' => $form
    ])
@stop
