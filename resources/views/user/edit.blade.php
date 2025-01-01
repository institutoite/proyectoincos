
@extends('adminlte::page')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
@stop

@section('title', 'Usuarios')


@section('content_header')
    
@stop
@section('content')
    <section class="content container-fluid">
        <div class="container p-1">
            <div class="card">
                <div class="card-header bg-secondary">
                    <span class="card-title">Actualizar Usuario</span>
                            <a href="{{route('users.index')}}" class="ml-auto float-right">
                                Listar Usuarios
                            </a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        {{-- {{ $user->persona }} --}}
                        @include('user.form')
                        @include('persona.form')

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                <span class="fas fa-user-plus text-white"></span> Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
