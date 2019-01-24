@extends('adminlte::page')

@section('title', 'Visualizar Espécie')

@section('css')
@endsection

@section('content_header')
    <h1>{{ $specie->name }}</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
                <h2>Informações</h2>

                <p> Nome: {{ $specie->name }} </p>
            </div>
        </div>
    </div>
@stop

@section('js')
@endsection
