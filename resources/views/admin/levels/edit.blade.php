@extends('adminlte::page')

@section('title', 'PrisEduca')

@section('content_header')
    <h1>Editar nivel</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success mb-4 alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 col-lg-8 col-xl-6">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($level, ['route' => ['admin.levels.update', $level], 'method' => 'put', 'autocomplete' => 'off']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : ''), 'placeholder' => 'Escriba un nombre']) !!}
                        @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        {!! Form::submit('Actualizar nivel', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
