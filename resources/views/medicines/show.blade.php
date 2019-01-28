@extends('adminlte::page')

@section('title', 'Visualizar Fármaco')

@section('css')
@endsection

@section('content_header')
    <h1>Informações</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
                <h2>{{ $medicine->name }}</h2>

                <p> Concentração: {{ $medicine->concentration }} </p>
            </div>
        </div>
    </div>
@stop
