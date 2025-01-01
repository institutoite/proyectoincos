@extends('adminlte::page')

@section('title', 'Editar Clase')

@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Clase</span>
                    </div>
                    {{-- {{dd($clase)}} --}}
                    <div class="card-body">
                        <form method="POST" action="{{ route('clases.update', $clase) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('clase.form')

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
