@extends('adminlte::page')

@section('title', 'Editar Fármaco')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar fármaco</h1>
@stop

@section('content')
    @include('medicines._form', [
        'form' => $form
    ])
@stop
