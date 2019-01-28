@extends('adminlte::page')

@section('title', 'Fármacos')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Fármacos</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <div class="pull-right">
                <a class="btn btn-xs btn-primary" href="{{ route('medicines.create') }}">Cadastrar Fármaco</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Concentração</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicines as $medicine)
                        <tr class="text-center">
                            <td>{{ $medicine->id }}</td>
                            <td>{{ $medicine->name }}</td>
                            <td>{{ $medicine->concentration }}</td>

                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('medicines.show', $medicine->id) }}">
                                    Visualizar
                                </a>
                                <a class="btn btn-xs btn-warning" href="{{ route('medicines.edit', $medicine->id) }}">
                                    Editar
                                </a>
                                <a class="btn btn-xs btn-danger medicine-destroy" data-id="{{ $medicine->id }}">
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
            {{ $medicines->links() }}
        </div>
    </div>
@stop

@section('js')
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.medicine-destroy').on('click', function () {
            var medicineId = $(this).data('id');

            swal("Tem certeza que deseja excluir esse fármaco?", {
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
                            url: '{{ route('medicines.destroy', '_medicine') }}'.replace('_medicine', medicineId),
                            method: 'DELETE',
                            success: function (xhr) {
                                swal("Sucesso!", "Fármaco deletado", "success");
                                window.location.reload();
                            },
                            error: function (xhr) {
                                swal("Falha!", "Fármaco não pôde ser excluído", "error");
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
