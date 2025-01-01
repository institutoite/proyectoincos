@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
@stop

@section('title', 'Mostrar Cargos')

@section('content')
        <div class="card">
            <div class="card-header bg-primary">
                Mostrar Como <a class="btn btn-secondary text-white btn-sm float-right text-white" href="{{route('convenio.index')}}">Listar Convenios</a>
            </div>
            <div class="card-body">
                <table class="table table-light table-striped table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ATRIBUTO</th>
                            <th>VALOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{$plan->id}}</td>
                        </tr>
                        <tr>
                            <td>Título</td>
                            <td>{{$plan->titulo}}</td>
                        </tr>
                        <tr>
                            <td>Descripcion</td>
                            <td>{!!$plan->descripcion!!}</td>
                        </tr>
                        <tr>
                            <td>Costo</td>
                            <td>{!!$plan->costo!!}</td>
                        </tr>
                        <tr>
                            <td>Convenio</td>
                            <td>{!!$plan->convenio->titulo !!}</td>
                        </tr>
                        <tr>
                            <td>Descripcion</td>
                            <td><img width="75%" src="{{URL::to('/').Storage::url("$plan->foto")}}" alt=""></td>
                        </tr>
                        <tr>
                            <td>CREADO</td>
                            <td>{{$plan->created_at}}</td>
                        </tr>
                        <tr>
                            <td>ACTUALIZADO</td>
                            <td>{{$plan->updated_at}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
@stop

@section('js')

@stop