{{-- <a href="{{route('personas.edit', $id)}}" class="tooltipsC mr-2" title="Editar esta persona">
    <i class="fa fa-fw fa-edit text-primary"></i>
</a> --}}

{{-- <a href="{{route('personas.show', $id)}}" class="tooltipsC mr-2" title="Ver esta persona">
    <i class="fa fa-fw fa-eye text-primary"></i>
</a> --}}

{{-- <form action=""  class="d-inline">
    @csrf
    @method("delete")
    <button name="btn-eliminar" id="{{$id}}" type="submit" class="btn eliminargenerico" title="Eliminar este contacto">
        <i class="fa fa-fw fa-trash text-danger"></i>   
    </button>
</form>  --}}


{{-- <a href="" class="tooltipsC mr-2 observacion" id="Persona" title="Agregar Observacion">
    <i class="fas fa-comment-alt"></i>
</a>
<a href="" class="tooltipsC mr-1 mostrarobservacionespersona" title="Mostrar observaciones">
    <i class="fas fa-comments text-secondary"></i>
</a>
<a href="{{route('descargar.contacto', $id)}}" class="btn-accion-tabla tooltipsC mr-1" title="Descargar contacto">
    <i class="far fa-address-card"></i>
</a>
<a class="btn-accion-tabla tooltipsC mr-1 enviarmensaje" title="Cobrar por mensaje">
    &nbsp;<i class="fab fa-whatsapp"></i>
</a> --}}
<a href="{{route('tus.inscripciones',App\Models\Persona::findOrFail($id)->estudiante)}}" class="btn-accion-tabla tooltipsC mr-1" title="Ir a Inscripciones">
    &nbsp;<i class="fas fa-table"></i>
</a>
{{--
<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">
    <a href="{{route('opcion.principal', $id)}}" class="btn btn-primary text-white tooltipsC mr-2" title="ir a opciones de matematicas">
        <i class="fas fa-bars"></i> &nbsp; Opciones
    </a>
</span>
     --}}
    
    

