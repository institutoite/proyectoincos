<a href="{{route('users.edit', App\Models\Persona::findOrFail($id)->user->id)}}" class="btn-accion-tabla tooltipsC mr-2" title="Editar esta persona">
    <i class="fa fa-fw fa-edit text-primary"></i>
</a>

{{-- <form action="" class="d-inline formulario">
    @csrf 
    @method("delete")
    <button name="btn-eliminar" id="{{$id}}" type="submit" class="btn eliminar" title="Eliminar esta persona">
        <i class="fa fa-fw fa-trash text-danger"></i>
    </button>
</form> --}}