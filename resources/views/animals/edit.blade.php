@extends('adminlte::page')

@section('title', 'Editar Animal')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar animal</h1>
@stop

@section('content')
    @include('animals._form', [
        'form' => $form
    ])
@stop
