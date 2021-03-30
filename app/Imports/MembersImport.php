<?php

namespace App\Imports;

use App\Models\Members;
use Maatwebsite\Excel\Concerns\ToModel;


class MembersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Members([
            'member_id' => $row[1],
            'full_name' => $row[2],
            'gender' => $row[3],
            'valid_upto' => $row[4],
            'occupation' => $row[5],
            'education' => $row[6],
            'mobile' => $row[7],
            'phone' => $row[8],
            'age' => $row[9],
            'email' => $row[10],
        ]);
    }
}
