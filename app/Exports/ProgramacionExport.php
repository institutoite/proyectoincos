<?php

namespace App\Exports;

use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ProgramacionExport implements FromView,ShouldAutoSize
{
    use Exportable;
    protected $grado;
    protected $persona;
    protected $usuario;
    protected $modalidad;
    protected $programacion;
    protected $estudiante;
    protected $colegio;
    protected $inscripcion;
    protected $pago;
    protected $dias;
    protected $edad;
    protected $nivel;

    // Constructor para recibir parámetros
    public function __construct($grado,$persona,$usuario,$modalidad,$programacion,$estudiante,$colegio,$inscripcion,$pago,$dias,$edad,$nivel)
    {
        $this->grado = $grado;
        $this->persona = $persona;
        $this->usuario = $usuario;
        $this->modalidad = $modalidad;
        $this->programacion = $programacion;
        $this->estudiante = $estudiante;
        $this->colegio = $colegio;
        $this->inscripcion = $inscripcion;
        $this->pago = $pago;
        $this->dias = $dias;
        $this->edad = $edad;
        $this->nivel = $nivel;
       
    }

    public function view(): View
    {

        return view('programacion.reporteexcel',[
            'grado' => $this->grado,
            'persona' => $this->persona,
            'usuario' => $this->usuario,
            'modalidad' => $this->modalidad,
            'programacion' => $this->programacion,
            'estudiante' => $this->estudiante,
            'colegio' => $this->colegio,
            'inscripcion' => $this->inscripcion,
            'pago' => $this->pago,
            'dias' => $this->dias,
            'edad' => $this->edad,
            'nivel' => $this->nivel,
        ]);
    }
}
