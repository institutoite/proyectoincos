@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
@stop

@section('title', 'Docentes')
@section('title', 'Personas')
@section('plugins.Sweetalert2',true)
@section('plugins.Datatables',true)

@section('content_header')
    <h1 class="text-center text-primary">Formulario Crear Carreras</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            Crear Estados <a class="btn btn-secondary text-white btn-sm float-right" href="{{route('estado.index')}}">Listar Estados</a>
        </div>
        <div class="card-body">
            <form action="{{route('estado.store')}}" method="POST">
                @csrf
                @include('estado.form')
                @include('include.botones')
            </form>
        </div>
    </div>
@stop

@section('js')

@stop