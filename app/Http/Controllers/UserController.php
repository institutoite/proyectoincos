<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use UxWeb\SweetAlert\SweetAlert as SweetAlert;
use Alert;
use App\Models\Persona;
use App\Models\Estado;
use App\Models\Estudiante;
use App\Models\Computacion;
use App\Models\Observacion;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Auth;


//use UxWeb\SweetAlert\SweetAlert as SweetAlertSweetAlert;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Listar Usuarios')->only("index","show","share");
        $this->middleware('can:Crear Usuarios')->only("create","crear","store","guardar");
        $this->middleware('can:Editar Usuarios')->only("edit","update");
        $this->middleware('can:Eliminar Usuarios')->only("destroy");
    }
    
    public function index()
    {
        $users = User::paginate();
        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        //SweetAlert::message('Robots are working!');
        SweetAlert::success('Success Message', 'Optional Title');
        return view('auth.register', compact('user'));
    }
    
    public function crear(Persona $persona)
    {
        $estados=Estado::get();
        return view('user.create',compact('persona','estados'));
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(userStoreRequest $request)
    {
        //request()->validate(User::$rules);
        dd($request->all());
        $user = User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }
    public function guardar(UserStoreRequest $request)
    {
        //dd($request->all());

        // "name" => "SADF"
        // "email" => "info@ite.com.bo"
        // "password" => "Educabol1326*"
        // "password_confirmation" => "Educabol1326*"
        // "nombre" => "Educabol1326"
        // "apellidop" => "apellido"
        // "apellidom" => "fdsfds"
        // "fechanacimiento" => "2023-11-13"
        // "carnet" => "32432432"
        // "expedido" => "SCZ"
        // "genero" => "HOMBRE"
        // "telefono" => "71039910"
        // "papel" => "estudiante"
        // "direccion" => "CALLE ANTOFAGASTA FINAL"
        // "foto" => Illuminate\Http\UploadedFile {#2857 ▶}
        $persona=new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidop = $request->apellidop;
        $persona->apellidom = $request->apellidom;
        $persona->fechanacimiento = $request->fechanacimiento;
        $persona->direccion = $request->direccion;
        $persona->carnet = $request->carnet;
        $persona->expedido = $request->expedido;
        $persona->genero = $request->genero;
        if ($request->hasFile('foto')){
            $foto=$request->file('foto');
            $nombreImagen='estudiantes/'.Str::random(20).'.jpg';
            $imagen= Image::make($foto)->encode('jpg',75);
            $imagen->resize(300,300,function($constraint){
                $constraint->upsize();
            });
            $fotillo = Storage::disk('public')->put($nombreImagen, $imagen->stream());
            $persona->foto = $nombreImagen;
        }else {
            $persona->foto = "estudiantes/sinfoto.jpg";
        }
        $persona->como_id = 1;
        $persona->habilitado = 1;
        if($request->papel==null)
            $persona->papelinicial = "estudiante";
        else
            $persona->papelinicial = $request->papel;
        
        $persona->telefono=$request->telefono;
        $persona->persona_id = $request->persona_id;
        $persona->pais_id = 1;
        $persona->ciudad_id = 6;
        $persona->zona_id = 1;
        $persona->save();

        switch ($request->papel) {
            case 'estudiante':
                $computacion=new Computacion();
                $computacion->persona_id=$persona->id;
                $computacion->save();

                $estudiante=new Estudiante();
                $estudiante->persona_id=$persona->id;
                $estudiante->save();
                //**%%%%%%%%%%%%%%%%%%%%  B  I  T  A  C  O  R  A  E S T U D I A N T E   %%%%%%%%%%%%%%%%*/
                $estudiante->usuarios()->attach(Auth::user()->id);
                $computacion->usuarios()->attach(Auth::user()->id);
                
                $observacion=new Observacion();
                $observacion->observacion=$request->observacion;
                $observacion->activo=1;
                $observacion->observable_id=$persona->id;
                $observacion->observable_type="App\Models\Persona";
                $observacion->save();
                //**%%%%%%%%%%%%%%%%%%%%  B  I  T  A  C  O  R  A  O B S E R V A C I O N   %%%%%%%%%%%%%%%%*/
                $observacion->usuarios()->attach(Auth::user()->id);
                break;
           
            case 'docente':
                $docente = new Docente();
                $docente->nombrecorto=$request->nombre.$request->apellidop;
                $docente->fecha_inicio=Carbon::now()->format('Y-m-d');
                $docente->dias_prueba = 3;
                $docente->sueldo =2000;
                $docente->mododocente_id = 1;
                $docente->perfil = "SIN PERFIL";
                $docente->estado_id =11;
                $docente->persona_id = $persona->id;
                $docente->save();
                
                //**%%%%%%%%%%%%%%%%%%%%  B  I  T  A  C  O  R  A  D O C E N T E   %%%%%%%%%%%%%%%%*/
                $docente->usuarios()->attach(Auth::user()->id);
                $observacion = new Observacion();
                $observacion->observacion = $request->observacion;
                $observacion->activo = 1;
                $observacion->observable_id = $persona->id;
                $observacion->observable_type = "App\Models\Persona";
                $observacion->save();
                //**%%%%%%%%%%%%%%%%%%%%  B  I  T  A  C  O  R  A  O B S E R V A C I O N   %%%%%%%%%%%%%%%%*/
                $observacion->usuarios()->attach(Auth::user()->id);

                break;
         
            case 'administrativo':
                $administrativo = new Administrativo();
                $administrativo->cargo_id=1;
                $administrativo->diasprueba=3;
                $administrativo->estado_id=11;
                $administrativo->sueldo=2000;
                $administrativo->fechaingreso=Carbon::now()->format("Y-m-d");
                $administrativo->persona_id = $persona->id;
                $administrativo->save();
                $observacion=new Observacion();
                $observacion->observacion=$request->observacion;
                $observacion->activo=1;
                $observacion->observable_id=$persona->id;
                $observacion->observable_type="App\Models\Persona";
                $observacion->save();
                //**%%%%%%%%%%%%%%%%%%%%  B  I  T  A  C  O  R  A   A D M I N I S T V R V A V T I V O  %%%%%%%%%%%%%%%%*/
                $administrativo->usuarios()->attach(Auth::user()->id);
                break;
       
            default:
                # code...
                break;
        }


        $usuario=new User();
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->persona_id=$persona->id;
        $usuario->password= Hash::make($request->password);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreImagen = 'usuarios/' . Str::random(20) . '.jpg';
            /** las convertimos en jpg y la redimensionamos */
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(160, 160, function ($constraint) {
                $constraint->upsize();
            });
            /* las guarda en en la carpeta estudiantes  */
            $fotillo = Storage::disk('public')->put($nombreImagen, $imagen->stream());

            $usuario->foto = $nombreImagen;

        }
        $usuario->save();
        $usuario->assignRole('Docente');
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        if($request->password != null){
            $user->password=Hash::make($request->password);
        }
        if ($request->hasFile('foto')) {
            if (Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $foto = $request->file('foto');
            $nombreImagen = 'estudiantes/' . Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(160, 160, function ($constraint) {
                $constraint->upsize();
            });
            $fotillo = Storage::disk('public')->put($nombreImagen, $imagen->stream());
            $user->foto = $nombreImagen;
        }
        $user->save();
        return redirect()->route('users.index')
            ->with('success', 'Usuario actualizado correctamente');
    }
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return response()->json(['message' => 'Registro Eliminado', 'status' => 200]);
    }
    
    public function share(User $user){
        $persona=$user->persona;
        $apoderados= $persona->apoderados;
        $user=$persona->user;
        $pass=ucfirst(strtolower($persona->nombre).$persona->id).'*';
        return view('user.telefonos',compact('persona','apoderados','user','pass'));
    }
    // public function quien(Request $request){
    //     $useres=User::join('userables','userables.user_id','users.id')
    //         ->where('userable_id',69)
    //         ->where('userables.userable_type',"App\\Models\\Observacion")
    //         ->select('name')
    //         ->get();
    //     return response()->json(['user'=>$useres,'d'=>2]);
    // }

}
