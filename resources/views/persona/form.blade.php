{{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div> --}}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('nombre'))
                <span class="text-danger"> {{ $errors->first('nombre')}}</span>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('apellidop'))
                <span class="text-danger"> {{ $errors->first('apellidop')}}</span>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('apellidom'))
                <span class="text-danger"> {{ $errors->first('apellidom')}}</span>
            @endif
        </div>
    </div>


    {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%% CAMPO NOMBRE %%%%%%%%%%%%%%%%%%%%%% --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" > 
            <div class="form-floating mb-3 text-gray">
                <input  type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre',$user->persona->nombre ?? '')}}">
                <label class="text-warning" for="nombre">NOMBRE*</label>
            </div>
        </div>
        {{-- %%%%%%%%%%%%%%% CAMPO APELLIDO PATERNO --}}
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="form-floating mb-3 text-gray">
                <input  type="text" name="apellidop" class="form-control @error('apellidop') is-invalid @enderror" value="{{old('apellidop',$user->persona->apellidop ?? '')}}">
                <label class="text-warning" for="apellidop">APELLIDO PATERNO*</label>
            </div>    
        </div>
        {{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO APELLIDO MATERNO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="form-floating mb-3 text-gray">
            <input  type="text" name="apellidom" class="form-control @error('apellidom') is-invalid @enderror" value="{{old('apellidom',$user->persona->apellidom ?? '')}}">
            <label for="apellidom">Apellido Materno</label>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            @if($errors->has('fechanacimiento'))
                <span class="text-danger"> {{ $errors->first('fechanacimiento')}}</span>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            @if($errors->has('carnet'))
                <span class="text-danger"> {{ $errors->first('carnet')}}</span>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            @if($errors->has('expedido'))
                <span class="text-danger"> {{ $errors->first('expedido')}}</span>
            @endif
        </div>    
    </div>

{{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO  FECHA NACIMIENTO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
    <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            @isset($user)
                <div class="form-floating mb-3 text-gray">
                    @if(isset($user->persona->fechanacimiento))
                        <input  type="date" name="fechanacimiento" class="form-control @error('fechanacimiento') is-invalid @enderror" value="{{old('fechanacimiento',$user->persona->fechanacimiento->format('Y-m-d') ?? '')}}">
                        <label for="fechanacimiento">fechanacimiento</label>    
                    @else 
                        <input  type="date" name="fechanacimiento" class="form-control @error('fechanacimiento') is-invalid @enderror" value="">
                        <label for="fechanacimiento">fechanacimiento</label>    
                    @endif
                    
                </div>
            @else
                <div class="form-floating mb-3 text-gray">
                    <input  type="date" name="fechanacimiento" class="form-control @error('fechanacimiento') is-invalid @enderror" value="{{old('fechanacimiento' ?? '')}}">
                    <label class="text-warning" for="fechanacimiento">FECHA NACIMIENTO*</label>
                </div>
            @endisset
        </div>
{{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO  CARNET  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="form-floating mb-3 text-gray">
                <input  type="number" min="100000" name="carnet" class="form-control @error('carnet') is-invalid @enderror" value="{{old('carnet',$user->persona->carnet ?? '')}}">
                <label for="carnet">carnet</label>
            </div>
        </div>

{{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO  expedido del carnet  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="form-floating mb-3 text-gray">
                <select class="form-control @error('expedido') is-invalid @enderror"  name="expedido" id="expedido">
                    <option value=""> Elija Expedido</option>
                        @isset($user->persona->expedido)
                            <option value="SCZ" @if($user->persona->expedido == 'SCZ') {{'selected'}} @endif>Santa Cruz</option>
                            <option value="LPZ" @if($user->persona->expedido == 'LPZ') {{'selected'}} @endif>La Paz</option>
                            <option value="CBBA" @if($user->persona->expedido == 'CBBA') {{'selected'}} @endif>Cochabamba</option>

                            <option value="BEN" @if($user->persona->expedido == 'BEN') {{'selected'}} @endif>Beni</option>
                            <option value="TAR" @if($user->persona->expedido == 'TAR') {{'selected'}} @endif>Tarija</option>
                            <option value="PND" @if($user->persona->expedido == 'PND') {{'selected'}} @endif>Pando</option>

                            <option value="ORU" @if($user->persona->expedido == 'ORU') {{'selected'}} @endif>Oruro</option>
                            <option value="POT" @if($user->persona->expedido == 'POT') {{'selected'}} @endif>Potosí</option>
                            <option value="CHU" @if($user->persona->expedido == 'CHU') {{'selected'}} @endif>Chuquisaca</option>
                        @else 
                            <option value="SCZ" @if(old('expedido') == 'SCZ') {{'selected'}} @endif>Santa Cruz</option>
                            <option value="LPZ" @if(old('expedido') == 'LPZ') {{'selected'}} @endif>La Paz</option>
                            <option value="CBBA" @if(old('expedido') == 'CBBA') {{'selected'}} @endif>Cochabamba</option>

                            <option value="BEN" @if(old('expedido') == 'BEN') {{'selected'}} @endif>Beni</option>
                            <option value="TAR" @if(old('expedido') == 'TAR') {{'selected'}} @endif>Tarija</option>
                            <option value="PND" @if(old('expedido') == 'PND') {{'selected'}} @endif>Pando</option>

                            <option value="ORU" @if(old('expedido') == 'ORU') {{'selected'}} @endif>Oruro</option>
                            <option value="POT" @if(old('expedido') == 'POT') {{'selected'}} @endif>Potosí</option>
                            <option value="CHU" @if(old('expedido') == 'CHU') {{'selected'}} @endif>Chuquisaca</option>
                        @endisset 
                </select> 
                <label for="expedido">Elija departamento de expedido</label>
            </div>
        
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            @if($errors->has('genero'))
                <span class="text-danger"> {{ $errors->first('genero')}}</span>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            @if($errors->has('telefono'))
                <span class="text-danger"> {{ $errors->first('telefono')}}</span>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            @if($errors->has('papel'))
                <span class="text-danger"> {{ $errors->first('papel')}}</span>
            @endif
        </div>
    </div>
    {{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO GENERO  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}

    <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="form-floating mb-3 text-gray">
                <select class="form-control @error('genero') is-invalid @enderror" name="genero" id="genero">
                    <option value=""> Elija tu género</option>
                    @isset($user)
                        @if(isset($user->persona->genero))
                            @if($user->persona->genero=="MUJER")
                                <option value="{{ $user->persona->genero }}" {{ "MUJER"==$user->persona->genero ? 'selected':''}} >{{ $user->persona->genero }}</option>
                                <option value="HOMBRE">HOMBRE</option>
                            @else
                                <option value="{{ $user->persona->genero }}" {{ "HOMBRE"==$user->persona->genero ? 'selected':''}} >{{ $user->persona->genero }}</option>
                                <option value="MUJER" >MUJER</option>
                            @endif
                        @else  
                            <option value="MUJER" @if(old('genero') == 'MUJER') {{'selected'}} @endif>MUJER</option>
                            <option value="HOMBRE" @if(old('genero') == 'HOMBRE') {{'selected'}} @endif>HOMBRE</option>
                        @endif 
                    @else
                        <option value="MUJER" @if(old('genero') == 'MUJER') {{'selected'}} @endif>MUJER</option>
                        <option value="HOMBRE" @if(old('genero') == 'HOMBRE') {{'selected'}} @endif>HOMBRE</option>
                    @endisset    
                </select>
                <label class="text-success" for="genero">GENERO*</label>
            </div>
        </div>

        {{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% CAMPO COMO SE INFORMO  --}}
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                    <div class="form-floating mb-3 text-gray">
                        <input class="form-control" type="tel" id="phone" name="telefono" value="{{old('telefono',$persona->telefono ?? '')}}">
                        <label class="text-warning" for="telefono">TELEFONO ESTUDIANTE*</label>
                    </div>
                </div>
            </div>
            
        </div>

        
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% CAMPO OCULTO CON QUE PAPEL LLEGA A ITE papel de profesor papel de practico etc ---}}

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
            <div class="form-floating mb-3 text-gray">
                <select class="form-control @error('papel') is-invalid @enderror"  name="papel" id="papel">
                    <option value=""> Elija Papel</option>
                        @isset($user->persona)
                            <option value="estudiante" @if($user->persona->papelinicial == 'estudiante') {{'selected'}} @endif>Estudiante</option>
                            <option value="docente" @if($user->persona->papelinicial == 'docente') {{'selected'}} @endif>Docente</option>
                        @else 
                            <option value="estudiante" @if(old('papel') == 'estudiante') {{'selected'}} @endif>Estudiante</option>
                            <option value="docente" @if(old('papel') == 'docente') {{'selected'}} @endif>Docente</option>
                        @endisset
                </select>
                <label class="text-success" for="papel">PAPEL*</label>
            </div> 
        </div>
    </div>

    

    {{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO PAIS  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
   

    {{-- %%%%%%%%%%%%%%%%%%%%%%% CAMPO DIRECCION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                @if($errors->has('direccion'))
                    <span class="text-danger"> {{ $errors->first('direccion')}}</span>
                @endif
        </div>
        
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" > 
            <div class="form-floating mb-3 text-gray">
                <input  type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{old('direccion',$persona->direccion ?? '')}}" >
                <label class="text-warning" for="direccion">DIRECCION*</label>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                @if($errors->has('observacion'))
                    <span class="text-danger"> {{ $errors->first('observacion')}}</span>
                @endif
        </div>
    </div>
       {{-- <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true"> --}}
    
<div class="modal" tabindex="-1" id="modal-ite">
    <div class="modal-dialog modal-lg modalito">
        <div class="modal-content">
            <div class="modal-header">
                Seleccione la persona referenciadora
                <button class="btn btn-danger close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table id="personas" class="table table-bordered table-hover table-striped">
                    <thead class="bg-primary">
                        <tr>
                            <th>ID</th>
                            <th>OLD</th>
                            <th>NOMBRE</th>
                            <th>APATERNO</th>
                            <th>AMATERNO</th>
                            <th>FOTO</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>

            </div>
            <div class="modal-footer">
                pie del modal 
            </div>
        </div>
    </div>
</div>

