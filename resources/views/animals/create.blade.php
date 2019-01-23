@extends('adminlte::page')

@section('title', 'Cadastrar novo animal')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar novo animal</h1>
@stop

@section('content')
    @include('animals._form', [
        'form' => $form
    ])
@stop
