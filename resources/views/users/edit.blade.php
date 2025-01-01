@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
@stop

@section('title', 'Asignar Rol a Usuario')


@section('content_header')
    {{-- <h1 class="text-center text-primary">Formulario Asignar Rol a Usuario</h1> --}}
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            {{-- Editar Rol <a class="btn btn-secondary text-white btn-sm float-right" href="{{route('rolusers.index')}}">Listar usaurios</a> --}}
            <h1 class="h5">Asignar roles al usuario: {{ $roluser->name}}</h1>
        </div>
        <div class="card-body">
            

            {!! Form::model($roluser, ['route'=> ['rolusers.update', $roluser], 'method' => 'put']) !!}

                @foreach ($roles as $role)

                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'  => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                
                @endforeach

                {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')

@stop