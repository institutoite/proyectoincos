
@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('custom/css/custom.css')}}">
   
@stop

@section('title', 'Aula Create')
@section('plugins.Jquery', true)
@section('plugins.Sweetalert2', true)
@section('plugins.Datatables', true)





@section('content')
    <section class="content container-fluid pt-4">
       
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-primary">
                        <span class="card-title">Create Aula</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aulas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('aula.form')
                            @include('include.botones')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
