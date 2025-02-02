<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Listar Roles')->only('index');
        $this->middleware('can:Crear Roles')->only('create','store');
        $this->middleware('can:Editar Roles')->only('edit','update');
        $this->middleware('can:Eliminar Roles')->only('destroy');
        $this->middleware('can:Asignar Permisos')->only('asignarPermisos');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            //'permissions' => 'required'
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        //$role->permissions()->attach($request->permissions);

        //dd($role);
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
            // 'permissions' => 'required'
        ]);

        $role->update([
            'name' => $request->name
        ]);

        //$role->permissions()->sync($request->permissions);

        return redirect()->route('role.index');
    }
    public function asignarPermisosForm(Role $role)
    {
        $permissions = Permission::all();
        return view("roles.asignarpermisos", compact('role','permissions'));
    }
    public function asignarPermisos(Request $request, Role $role)
    {
        
        $request->validate([
            'permissions' => 'required'
        ]);

        $role->permissions()->sync($request->permissions);

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index');
    }
}
