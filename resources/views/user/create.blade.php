@extends('adminlte::page')
@section('css')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop

@section('title', 'Usuarios')

@section('content_header')
    <div class="d-flex">
        <h1>CREAR USUARIO</h1>
        <a href="{{route('users.index')}}" class="ml-auto">
            <button class="btn btn-primary">
            Listar Usuarios
        </button>
        </a>
    </div>
@stop

@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('success'))
                  <script>
                      console.log("llega success");
                  </script>
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Header</h4>
                        {{$message}}
                    </div>
                @endif

                <div class="card card-default">
                    <div class="card-header bg-secondary">
                        <span class="card-title">Create User</span>
                    </div>
                    <div class="card-body">
                       <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off">
                            {{ csrf_field() }}
                            @include('user.form')

                            @include('persona.form')

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fas fa-user-plus text-white"></span> Guardar
                                </button>
                            </div>
                            
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
@endsection
@section('js')
   
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>

        $(document).ready(function() {
            // $('.js-example-basic-single').select2();

            $("#persona_id").select2({
                dataType: 'json',
                ajax: {
                    url: '{{ url("personas/select") }}',
                    processResults: function(data) {
                        console.log(data);
                        return {
                            results: data
                        };
                    },
                    cache: true,
                },
                tags: true
            });
            $("#persona_id").on('change', function (e) {
                var selectedId = $(this).val();
                $("#persona").val(selectedId);
            });       
        });
    </script>
@endsection
