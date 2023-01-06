<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([

            'NIM' => $row[0],
            'Name'=> $row[1],
            'Score'=> $row[2],
            
        ]);
    }
}
