@extends('adminlte::page')

@section('title', 'PrisEduca')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
@endsection


@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>!Exito¡ </strong>{{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.roles.create')}}">Crear Role</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" style="width:100%" id="roles">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.roles.edit', $role)}}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningun rol registrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#roles').DataTable();
    </script>
@stop
