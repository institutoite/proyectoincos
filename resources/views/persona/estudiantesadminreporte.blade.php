@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('custom/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/starrr.css')}}">
    <link href="{{asset('dist/css/zoomify.css')}}" rel="stylesheet" type="text/css">
@stop

@section('title', 'Estudiantes')
@section('plugins.Sweetalert2',true)
@section('plugins.Datatables',true)
@section('content')
    <div class="pt-4">
        <div class="card">
            <div class="card-header bg-primary">
                Lista de Estudiantes inscritos
            </div>
            
            <div class="card-body">
                <table id="personasadminreporte" class="table table-bordered table-hover table-striped">
                    <thead class="bg-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOP</th>
                            <th>APELLIDOM</th>
                            <th>FOTO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div id="imaginario">

        </div>
        
        
      
        @include('observacion.modalcreate')
        @include('telefono.modales')
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{asset('dist/js/starrr.js')}}"></script>

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script> 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/plugins/piexif.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/plugins/sortable.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/themes/fas/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/locales/es.js"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset('assets/js/observacion.js')}}"></script>
    <script src="{{asset('assets/js/eliminargenerico.js')}}"></script>
    <script src="{{asset('assets/js/mensajeAjax.js')}}"></script>

    <script>
        
            

        $(document).ready(function(){
            // let html="<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modal_estados'>Launch demox modal </button>";
            // $("#imaginario").append(html);
            function cerrarModal() {
                // Cerrar el modal
                var modal = document.getElementById("modal_estados");
                modal.style.display = "none";
                window.location.href = "espera/nuevo/view";
            }
           
        
            $("#cerrarmodal").on("click", function(){
                if($('body').hasClass('modal-open')){
                    $('#modal_estados').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                }
            });
            $(".modal").on("hidden.bs.modal", function() {
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            });
        });
    </script>
    
    {{-- telefono modales --}}
    <script src="{{asset('dist/js/moment.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/es.js"></script>
    {{-- js --}}
    <script type="text/javascript" src="{{asset('dist/js/jquery.leanModal.min.js')}}"></script>
    <script src="{{asset('assets/js/enviarmensaje/mostrarcontactos.js')}}"></script>
    <script src="{{asset('vistas/persona/estudiantesadminreporte.js')}}"></script>
@stop