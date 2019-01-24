@extends('adminlte::page')

@section('title', 'Animals')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Animais</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <div class="pull-right">
                <a class="btn btn-xs btn-primary" href="{{ route('animals.create') }}">Cadastrar Animal</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">RG</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animals as $animal)
                        <tr class="text-center">
                            <td>{{ $animal->id }}</td>
                            <td>{{ $animal->name }}</td>
                            <td>{{ $animal->rg }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('animals.show', $animal->id) }}">
                                    Visualizar Dosagens
                                </a>
                                <a class="btn btn-xs btn-warning" href="{{ route('animals.edit', $animal->id) }}">
                                    Editar
                                </a>
                                <a class="btn btn-xs btn-danger assisted-destroy" data-id="{{ $animal->id }}">
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
            {{ $animals->links() }}
        </div>
    </div>
@stop

@section('js')
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.assisted-destroy').on('click', function () {
            var animalId = $(this).data('id');

            swal("Tem certeza que deseja excluir esse animal?", {
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
                            url: '{{ route('animals.destroy', '_animal') }}'.replace('_animal', animalId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Animal deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                swal("Falha!", "Animal não pôde ser excluído", "error");
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
