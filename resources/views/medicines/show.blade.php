@extends('adminlte::page')

@section('title', 'Visualizar Animal')

@section('css')
@endsection

@section('content_header')
    <h1>{{ $animal->name }}</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
                <h2>Informações</h2>

                <p> Nome: {{ $animal->name }} </p>
                <p> Espécie: {{ $animal->specie->name }} </p>
                <p> RG: {{ $animal->rg }} </p>
            </div>
        </div>
    </div>
@stop
