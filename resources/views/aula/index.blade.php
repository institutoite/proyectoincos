@extends('adminlte::page')

@section('css')
    
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
    @notifyCss
    {{-- <link rel="stylesheet" href="{{asset('custom/css/custom.css')}}"> --}}
@stop

@section('title', 'Aula')
@section('plugins.Jquery', true)
@section('plugins.Sweetalert2', true)
@section('plugins.Datatables', true)

@section('content')
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aula') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('aulas.create') }}" class="btn btn-primary btn-sm float-right text-white"  data-placement="left">
                                    {{ __('Crear nueva Aula') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="aulas" class="table table-striped table-hover table-borderless">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
										<th>Aula</th>
										<th>Direccion</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                            {{-- se carga con ajax --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('aula.modales')
    @notifyJs
@endsection

@section('js')
    <script src="{{asset('dist/js/moment.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    <script src="{{asset('assets/js/eliminargenerico.js')}}"></script>
    <script src="{{asset('assets/js/mensajeAjax.js')}}"></script>
    
    {{-- %%%%%%%%%%%%%% muestra el ok de la insersion de datos %%%%%%%%%%%%%%%%% --}}
   


    <script>

         /*%%%%%%%%%%%%%%%%%%%%%%  funcion que agrega clase por tiempo x y luego lo destruye %%%%%%%%%%%*/
        ( function ( $ ) {
            'use strict';
            $.fn.addTempClass = function ( className, expire, callback ) {
                className || ( className = '' );
                expire || ( expire = 2000 );
                return this.each( function () {
                    $( this ).addClass( className ).delay( expire ).queue( function () {
                        $( this ).removeClass( className ).clearQueue();
                        callback && callback();
                    } );
                } );
            };
        } ( jQuery ) );

        $(document).ready(function() {
            /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  DATA TABLE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            //let fila=1;
            var tabla=$('#aulas').dataTable({
                "responsive":true,
                "searching":true,
                "paging":   true,
                "autoWidth":false,
                "ordering": true,
                "info":     true,
                "createdRow": function( row, data, dataIndex ) {
                    $(row).attr('id',data['id']); 
                    // $('td', row).eq(0).html(fila++);
                },
                "ajax":{
                        'url':"listar/aulas",
                    },
                "columns": [
                    {data: 'id'},
                    {data: 'aula'},
                    {data: 'direccion'},
                    {
                        "name":"btn",
                        "data": 'btn',
                        "orderable": false,
                    },
                ],
                "columnDefs": [
                    { responsivePriority: 1, targets: 0 },  
                    { responsivePriority: 2, targets: -1 }
                ],
                "language":{
                        "url":"https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
                },
            });

            /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% MOSTRAR PROGRAMACION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            $('#aulas').on('click', '.mostrar', function(e) {
                e.preventDefault(); 
                let aula_id=$(this).closest('tr').attr('id');
                $.ajax({
                    url : "aula/mostrar",
                    data : { id :aula_id },
                    success : function(json) {
                        $("#modal-mostrar").modal("show");
                        $("#tabla-mostrar").empty();
                        $html="";
                        $html+="<tr><td>ID</td>"+"<td>"+ json.aula.id +"</td></tr>";
                        $html+="<tr><td>AULA</td>"+"<td>"+json.aula.aula+"</td></tr>";
                        $html+="<tr><td>DIRECCION</td>"+"<td>"+json.aula.direccion+"</td></tr>";
                        $html+="<tr><td>CREADO</td>"+"<td>"+ moment(json.aula.created_at).format('LLLL') +"</td></tr>";
                        $html+="<tr><td>ACTUALIZADO</td>"+"<td>"+moment(json.aula.updated_at).format('LLLL')+"</td></tr>";
                        $html+="<tr><td>USER</td>"+"<td>"+ json.user.name+"</td></tr>";
                        $("#tabla-mostrar").append($html);
                    },
                    error : function(xhr, status) {
                        Swal.fire({
                        type: 'error',
                        title: 'Ocurrio un Error',
                        text: 'Saque una captura para mostrar al servicio Técnico!',
                        })
                    },
                });
            });
             /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% INICIO MOSTRAR EDITAR PROGRAMACION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            $('table').on('click', '.editar', function(e) {
                e.preventDefault(); 
                let aula_id =$(this).closest('tr').attr('id');
                
                
                    $.ajax({
                    url : "aula/editar/",
                    data : { id :aula_id },
                    success : function(json) {
                        $("#modal-editar").modal("show");
                        $("#errores").addClass('alert-danger');
                        $("#formulario-editar").empty();
                        $("#errores").empty();
                            $html="<div class='row'>";
                            $("#aula").val(json.aula);
                            $("#aula_id").val(json.id);
                            $("#direccion").val(json.direccion);
                            $("#formulario-editar").append($html);
                    },
                    error : function(xhr, status) {
                        Swal.fire({
                        type: 'error',
                        title: 'Ocurrio un Error',
                        text: 'Saque una captura para mostrar al servicio Técnico!',
                        })
                    },  
                });
            });
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ACTUALIZAR ENVIO DE FORMULARIO PROGRAMACION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
            $(document).on("submit","#formulario-editar-aula",function(e){
                e.preventDefault();//detenemos el envio
            
                $aula=$('#aula').val();
                $aula_id=$('#aula_id').val();
                $direccion=$('#direccion').val();
                
                var token = $("input[name=_token]").val();
                $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : "aula/actualizar/",
                    headers:{'X-CSRF-TOKEN':token},
                    data:{
                            aula:$aula,
                            direccion:$direccion,
                            id:$aula_id,
                            token:token,
                        },
                    success : function(json) {
                        if(json.error){
                        $("#errores").html(json.error);
                        }else{
                            $("#modal-editar").modal("hide");
                            $('#aulas').DataTable().ajax.reload();
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1500,
                                })
                                Toast.fire({
                                type: 'success',
                                title: 'Se actualizó correctamente el registro'
                            })   
                        } 
                    },
                    error:function(xhr, textStatus, thrownError) 
                    {
                        html="";
                        $.each(xhr.responseJSON.errors, function(i, item) {
                            $.each(item, function(i, error) {
                                html+="<li>"+ item[0] +"</li>";
                            });
                        });
                        $("#errores").append(html);
                    },
                });
            });
            
            /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% E L I M I N A R  M O T I V O %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
            $('table').on('click','.eliminargenerico',function (e) {
                e.preventDefault(); 
                registro_id=$(this).closest('tr').attr('id');
                eliminarRegistro(registro_id,'aula',tabla);
            });
        });
    </script>

@endsection
