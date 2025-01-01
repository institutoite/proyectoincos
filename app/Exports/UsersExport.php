<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromCollection;

use App\Exports\PersonasExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Persona::all();
    }
}
