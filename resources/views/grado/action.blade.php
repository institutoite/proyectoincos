
<a class="btn-accion-tabla tooltipsC mr-2 editar" title="Editar este grado">
    <i class="fa fa-fw fa-edit text-primary"></i>
</a>

{{-- <a href="" class="btn-accion-tabla tooltipsC mr-2 mostrar" title="Ver este grado">
    <i class="fa fa-fw fa-eye text-primary"></i>
</a> --}}

<form action=""  class="d-inline formulario">
    @csrf
    @method("delete")
    <button name="btn-eliminar" id="{{$id}}" type="submit" class="btn eliminargenerico" title="Eliminar este grado">
        <i class="fa fa-fw fa-trash text-danger"></i>   
    </button>
</form> 