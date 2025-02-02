@extends('adminlte::page')
@section('css')
@stop

@section('title', 'Inscripcion Crear')

@section('content')
 
    <section class="content container-fluid">
            {{ Breadcrumbs::render('inscripcion.configuracion',$inscripcion->estudiante,$inscripcion->estudiante->persona, $inscripcion) }}

        <div class="row">
            
            @isset($datos)
            <table class="table table-dark">
                <thead class="thead-light">
                    <tr>
                        <th>Atribubuto</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>HORA INICIO</td><td>{{$datos['horainicio']}}</td></tr>
                    <tr><td>HORA FIN</td><td>{{$datos['horafin']}}</td></tr>
                    <tr><td>HORAS X DIA</td><td>{{$datos['totalhoras']}}</td></tr>
                    <tr><td>TOTAL HORAS</td><td>{{$datos['horas_total']}}</td></tr>
                    <tr><td>COSTO</td><td>{{$datos['costo']}}</td></tr>
                </tbody>
            </table>
            @endisset
        </div>
        <div class="row">
            <div class="col-md-12">
                {{-- <a href="{{route('opcion.principal', $inscripcion->estudiante->id)}}" class="btn text-primary btn-outline-primary tooltipsC mr-2" title="No realizar ninguna modificacion en los clases">
                    Conservar clases sin modificar &nbsp;<i class="fas fa-bars"></i>
                </a> --}}
                <div class="card card-default">
                    <div class="card-header bg-secondary">
                         {{-- <a href="{{route('opcion.principal', $inscripcion->estudiante->id)}}" class="btn btn-primary text-white tooltipsC mr-2" title="ir a opciones de la persona">
                            Conservar clases sin modificar &nbsp;<i class="fas fa-bars"></i>
                        </a> --}}
                        <div class="card-tools" id="divfuera">
                           
                            <button id="botonplus" class="btn btn-primary d-none" type="button">Agregar Sesiones &nbsp;<i class="fas fa-plus-square"></i></button>
                        </div>
                    </div>
                   
                    <div class="card-body">
                        {{-- @include('inscripcione.guarderia.config') --}}
                        @include('inscripcione.form_configurar')
                        @if ($tipo=='actualizando')
                            <form method="POST" id="formulario" action="{{ route('inscripcion.actualizar.configuracion')}}"  role="form" enctype="multipart/form-data">       
                                @csrf 
                                <div class="row">
                                    <div class="col-12">
                                        @if($errors->has('radioconfig'))
                                            <span class="text-danger"> {{ $errors->first('radioconfig')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioconfig" id="radiodesde" value="radiodesde">
                                            <label class="form-check-label text-gray" for="radiodesde">Modificar desde la fecha (de aqui en adelante)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioconfig" id="radiotodo" value="radiotodo">
                                            <label class="form-check-label text-gray" for="radiotodo">Cambiar Fecha Inicio (Todo)</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if($errors->has('fecha'))
                                            <span class="text-danger"> {{ $errors->first('fecha')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <input id="fecha" class="form-control border-warning mb-3" name="fecha" value="{{$inscripcion->fechaini->format('Y-m-d')}}" type="date">
                                        <p id="mensajefecha" class="d-none text-gray">La fecha no es necesaria ya que lo tomara de la inscripción, esta opcion edita todas las clases</p>
                                    </div>
                                    <input class="form-control" type="number" name="inscripcione_id" hidden value="{{$inscripcion->id}}">
                                </div>
                                
                                
                                <div id="sesiones">
                                    
                                </div>

                                
                                <div class="card-tools text-lg-center mt-4">                                                   
                                    <input id="boton-aceptar" class="btn btn-primary p-2 pl-5 pr-5 d-none" type="submit" value="Guardar Cambios">
                                </div>
                                
                            </form>
                        @endif
                        @if ($tipo=='guardando')
                       
                            <form method="POST" id="formulario" action="{{ route('inscripcion.guardar.configuracion',$inscripcion->id)}}"  role="form" enctype="multipart/form-data">       
                                @csrf
                                <div class="card">
                                    <div id="titulosesion" class="card-header bg-warning">
                                        
                                    </div>
                                    <div class="card-body">
                                        <div id="sesiones" class="p-3">
                                            
                                        </div>
                                        <div class="container-fluid h-100 mt-3"> 
                                            <div class="row w-100 align-items-center">
                                                <div class="col text-center">
                                                    <input id="boton-aceptar" class="btn btn-primary p-2 pl-5  d-none pr-5" type="submit" value="Guardar Cambios">
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @isset($programacion)
        @if (count($programacion)>0)
            @include('programacion.registros')    
        @endif
    @endisset
    
    {{-- <div class="container-fluid h-100 mt-3"> 
        <div class="row w-100 align-items-center">
            <div class="col text-center">
                <div class="card">
                    <div class="card-header">
                        {{-- <a href="{{route('reservar.inscripcion',$inscripcion->id )}}">
                            <button type="button" class="btn btn-danger text-white btn-lg" data-bs-toggle="tooltip" data-bs-placement="left" title="Click aqui si solo va reservar sin pagar: solo si no trajo dinero el Supercliente">
                                Solo reservar: Sin dinero <i class="fas fa-times-circle"></i>
                            </button>
                        </a> --}}
                        {{-- <a href="{{route('reservar.inscripcion',$inscripcion->id )}}">
                            <button type="button" class="btn text-warning btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="left" title="Click aqui si solo va reservar sin pagar: solo si no trajo dinero el Supercliente">
                                Solo reservar: Sin dinero <i class="fas fa-times-circle"></i>
                            </button>
                        </a> 
                    </div>
                    {{-- <div class="card-body">
                        <div class="text-center">
                        <img class="img-thumbnail rounded" src="{{asset('imagenes/sindinero.jpg')}}" width="200" alt="No traje dinero solo quiero reservar">
                        </div>
                    </div> 
                </div>
            </div>	
        </div>
    </div> --}}
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script> 
    
    @if($nivel->nivel == 'GUARDERIA')
        @php
            
        @endphp
        <script>
            $('#horainicio').val("<?php echo $datos['horainicio'] ?>");
            $('#horafin').val("<?php echo $datos['horafin'] ?>");
            $("#botonplus").removeClass('d-none');
            $('#horainicio').addClass('is-valid');
            $('#horafin').addClass('is-valid');
            $('#horafin').focus();
            </script>
    @endif

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        $(document).ready(function() {
            
            // let cantida_sesiones=0;

            // $("#titulosesion").html("<h4>Tine: "+cantida_sesiones+" sesiones por semana para esta inscripción</h4>");

            // $('#horainicio').blur(function() {
            //     if(($('#horainicio').val()=='')||(($('#horafin').val()<=$('#horainicio').val()))){
            //         $('#horainicio').addClass('is-invalid');
            //         $('#botonplus').hide();
            //     }else{
            //         $(this).addClass('is-valid');
            //         $(this).removeClass('is-invalid');
            //     }    
            // });
            // $('#horafin').blur(function() {
            //     if(($('#horafin').val()=='')||($('#horafin').val()<=$('#horainicio').val())){
            //         $('#horafin').addClass('is-invalid');
            //         $('#horainicio').addClass('is-invalid');
            //         $('#botonplus').hide();
            //     }else{
            //         $(this).addClass('is-valid');
            //         $('#horainicio').blur();
            //         $("#botonplus").removeClass('d-none');
            //         $(this).removeClass('is-invalid');
            //         $('#botonplus').show(300);
                    
            //     }    
            // });

            let cantida_sesiones=0;

            $("#titulosesion").html("<h4>Tine: "+cantida_sesiones+" sesiones por semana para esta inscripción</h4>");

            $('#horainicio').blur(function() {
                if(($('#horainicio').val()=='')||(($('#horafin').val()<=$('#horainicio').val()))){
                    $('#horainicio').addClass('is-invalid');
                    $('#botonplus').hide();
                }else{
                    $(this).addClass('is-valid');
                    $(this).removeClass('is-invalid');
                }    
            });
            $('#horafin').blur(function() {
                if((($('#horainicio').val()=='')&&($('#horafin').val()==''))||($('#horafin').val()<=$('#horainicio').val())){
                    $('#horafin').addClass('is-invalid');
                    $('#horainicio').addClass('is-invalid');
                    $('#botonplus').hide();
                }else{
                    $(this).addClass('is-valid');
                    $('#horainicio').blur();
                    $("#botonplus").removeClass('d-none');
                    $(this).removeClass('is-invalid');
                    $('#botonplus').show(300);
                    
                }    
            });
            //console.log($('input[type=time]').size);

            $('input[type=radio][name=radioconfig]').on('change',function(){
                if ($("#radiotodo").is(':checked')){
                    $('#fecha').attr('readonly',true);
                    $("#mensajefecha").removeClass('d-none');
                }
                if ($("#radiodesde").is(':checked')){
                    $('#fecha').attr('readonly',false);
                    $("#mensajefecha").addClass('d-none');
                }
                
            });

            $("#botonplus").click(function(){
                cantida_sesiones=cantida_sesiones+1;
                $("#dia option[value="+ cantida_sesiones +"]").attr("selected",true);
                if(cantida_sesiones>0){
                    $("#boton-aceptar").removeClass('d-none');
                    console.log(cantida_sesiones);
                }
                var $html="<div class='row'><div class='col-xs-12 col-sm-6 col-md-3 col-lg-2 input-group text-sm'>";
                    $html+="<select class='form-control' name='dias[]' value="+$("#dia").val()+">"+ $("#dia").html() +"</option>  </select></div>";
                    $html+="<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2 input-group text-sm'>"
                    $html+="<select class='form-control' name='materias[]' value="+$("#materia").val()+">"+ $("#materia").html() +"</select></div>";
                    $html+="<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2 input-group text-sm'>"
                    $html+="<select class='form-control' name='docentes[]' value="+$("#docente").val()+">"+ $("#docente").html() +"</select></div>";
                    $html+="<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2 input-group text-sm'>"
                    $html+="<select class='form-control' name='aulas[]' value="+$("#aula").val()+">"+ $("#aula").html() +"</select></div>";
                    $html+="<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2 input-group text-sm'>"
                    $html+="<input type='time' class='form-control' name='horainicio[]' value="+ $('#horainicio').val() +"></div>";
                    
                    $html+="<div class='col-xs-12 col-sm-6 col-md-4 col-lg-2 input-group text-sm'>"
                    $html+="<input type='time' class='form-control' name='horafin[]' value="+ $('#horafin').val() +"></div>";
                    
                    $("#sesiones").append("<div class='alert alert-success alert-dismissible fade show' role='alert'> "+$html+"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span> </button></div>");

                    
                    
                    $("#sesiones").animate({
                        opacity: '1',
                        width: '100%',
                    }, 1500);
                    var ultimaAlerta=$("div .alert").last().animate({
                        
                    });

                    $("#titulosesion").html("<h4>Tine: "+cantida_sesiones+" sesiones por semana para esta inscripción</h4>");
                     if(cantida_sesiones==0){
                    $("#boton-aceptar").addClass('d-none');
                    $("#titulosesion").addClass('bg-warning');
                }
                if(cantida_sesiones==1){
                    $("#boton-aceptar").removeClass('d-none');
                    $("#titulosesion").removeClass('bg-warning');
                    $("#titulosesion").addClass('bg-success');
                }
                   
                }); 
            $("body").on('click','div .alert .close',function() {
                cantida_sesiones=cantida_sesiones-1;
                //console.log(cantida_sesiones);
                if(cantida_sesiones==0){
                    $("#boton-aceptar").addClass('d-none');
                    $("#titulosesion").addClass('bg-warning');
                }
                if(cantida_sesiones==1){
                    $("#boton-aceptar").removeClass('d-none');
                    $("#titulosesion").removeClass('bg-warning');
                    $("#titulosesion").addClass('bg-success');
                }
                console.log(cantida_sesiones);
                $("#titulosesion").html("<h4>Tine: "+cantida_sesiones+" sesiones por semana para esta inscripción </h4>");
            });

                //** data-table
                $('#table-registros').dataTable({
                "responsive":true,
                "searching":false,
                "paging":   false,
                "autoWidth":false,
                "ordering": false,
                "info":     false,
                "columnDefs": [
                    { responsivePriority: 1, targets: 0 },  
                    { responsivePriority: 2, targets: -1 }
                ],
                "language":{
                        "url":"https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
                    },  
            });

        });
    </script>
@endsection
