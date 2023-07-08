<?php

namespace App\Imports;

use Spatie\Permission\Models\Permission;
use Maatwebsite\Excel\Concerns\ToModel;

class PermissionImport implements ToModel
{
    /** 
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Permission([
            'name'     => $row[0],
            'group_name'    => $row[1], 
        ]);
    }
}
