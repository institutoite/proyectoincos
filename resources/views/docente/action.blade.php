
<a href="{{route('users.edit', App\Models\Persona::findOrFail($id)->user->id)}}" class="btn-accion-tabla tooltipsC mr-2" title="Editar esta persona">
    <i class="fa fa-fw fa-edit text-primary"></i>
</a>


{{-- <a href="{{route('docentes.edit', $id)}}" class="btn-accion-tabla tooltipsC btn-sm mr-2" title="Editar como docente">
    <i class="fa fa-fw fa-edit text-primary"></i>
</a>

<a href="{{route('docentes.show', $id)}}" class="btn-accion-tabla tooltipsC btn-sm mr-2" title="Ver esta docente">
    <i class="fa fa-fw fa-eye text-primary"></i>
</a>

{{-- <a id="{{$persona_id}}" class='enviarmensaje'><i class='fab fa-whatsapp'></i></a> --}}


{{-- <a href="{{route("periodable.create",["periodable_id"=>$id,"periodable_type"=>"Docente"])}}" class="btn-accion-tabla tooltipsC btn-sm mr-2" title="Agregar Periodo a este Docente">
    <i class="far fa-calendar-plus"></i>
</a>
<a href="{{route("periodos.periodable.view",["periodable_id"=>$id,"periodable_type"=>"Docente"])}}" class="btn-accion-tabla tooltipsC btn-sm mr-2" title="Ver periodos de este docente">
    <i class="fab fa-btc"></i>
</a>


<a class="btn-accion-tabla tooltipsC mr-1 enviarmensaje" title="Cobrar por mensaje">
    &nbsp;<i class="fab fa-whatsapp"></i>
</a>



<form action=""  class="d-inline formulario">
    @csrf
    @method("delete")
    <button name="btn-eliminar" id="{{$id}}" type="submit" class="btn eliminargenerico" title="Eliminar este departamento">
        <i class="fa fa-fw fa-trash text-danger"></i>   
    </button>
</form>     
<a href="" class="btn-accion-tabla tooltipsC btn-sm mr-2 observacion" id="Docente" title="Agregar Observacion">
    <i class="fas fa-comment-alt fa-2x"></i>
</a>
<a href="" class="tooltipsC mr-1 mostrarobservacionesdocente" title="Mostrar observaciones">
    <i class="fas fa-comments text-secondary fa-2x"></i>
</a>
<a href="{{route('opcion.docentes', $persona_id)}}" class="btn btn-primary text-white tooltipsC btn-sm mr-2" title="ir a opciones de la persona">
    Opciones
</a>  --}}

