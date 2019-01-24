@extends('adminlte::page')

@section('title', 'Espécies')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Espécies</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <div class="pull-right">
                <a class="btn btn-xs btn-primary" href="{{ route('species.create') }}">Cadastrar Espécie</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($species as $specie)
                        <tr class="text-center">
                            <td>{{ $specie->id }}</td>
                            <td>{{ $specie->name }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('species.show', $specie->id) }}">
                                    Visualizar
                                </a>
                                <a class="btn btn-xs btn-warning" href="{{ route('species.edit', $specie->id) }}">
                                    Editar
                                </a>
                                <a class="btn btn-xs btn-danger assisted-destroy" data-id="{{ $specie->id }}">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix text-center">
            {{ $species->links() }}
        </div>
    </div>
@stop

@section('js')
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.assisted-destroy').on('click', function () {
            var specieId = $(this).data('id');

            swal("Tem certeza que deseja excluir essa espécie?", {
                buttons: {
                    cancel: "Cancelar",
                    catch: {
                        text: "Confirmar",
                        value: "confirm",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "confirm":
                        $.ajax({
                            url: '{{ route('species.destroy', '_especie') }}'.replace('_especie', specieId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Espécie deletada", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                swal("Falha!", "Espécie não pôde ser excluído", "error");
                            }
                        });
                        break;
                    default:
                        swal("Operação cancelada!");
                }
            });
        })
    </script>
@endsection
