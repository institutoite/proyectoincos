@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
@stop

@section('title', 'Docentes')


@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            Asingar permisos 
            {{-- <a class="btn btn-secondary text-white btn-sm float-right" href="{{route('role.index')}}">Listar roles</a> --}}
        </div>
        {!! Form::model($role, ['route'=> ['role.asignarpermisos', $role], 'method' => 'put']) !!}

        @include('roles.formasignar')

            {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
        {{-- @include('roles.formasignar') --}}
    </div>
@stop

@section('js')

@stop