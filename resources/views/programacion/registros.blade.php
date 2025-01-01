<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <table id="table-registros" class="table table-bordered table-hover">
                        <thead class="bg-secondary">
                            <tr>
                                <th>#</th>
                                <th>FECHA</th>
                                <th>DIA</th>
                                <th>HORARIO</th>
                                <th>HRAS</th>
                                <th>DOCENTE/AULA</th>
                                <th>ESTADO</th>
                                <th>PAGO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programacion as $programa)
                                    @php
                                    
                                        $hoy=Carbon\Carbon::now();
                                        $clase="";
                                        if($programa->fecha->isoFormat('DD/MM/YYYY')==$hoy->isoFormat('DD/MM/YYYY')){
                                            $clase .= 'table-success text-success .fs-1 text'; 
                                        }else{
                                            if($programa->habilitado==0){
                                                $clase .= 'table-danger text-danger .fs-1 text'; 
                                            }
                                        }
                                    @endphp
                                <tr class="{{$clase}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$programa->fecha->isoFormat('DD/MM/YYYY')}}</td>
                                    <td>{{$programa->fecha->isoFormat('dddd')}}</td>
                                    <td>{{$programa->hora_ini->isoFormat('HH:mm').'-'.$programa->hora_fin->isoFormat('HH:mm')}}</td>
                                    <td>{{$programa->horas_por_clase}}</td>
                                    <td>{{$programa->docente->persona->nombre.'/'.$programa->aula->aula}}</td>
                                    <td>{{$programa->estado->estado}}</td>
                                    <td>
                                        @if ($programa->habilitado==1)
                                            <img width='20' height='20' src='{{asset('dist/image/check3.png')}}' alt=''>
                                        @else
                                            <img width='20' height='20' src='{{asset('dist/image/x.png')}}' alt=''>
                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>