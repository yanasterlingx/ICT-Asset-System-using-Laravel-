<?php

namespace App\Imports;

use App\Models\Asset;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportAsset implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Asset([
           
                'id' => $row[0],
                'asset_no' => $row[3],
                'serial_no' => $row[2],
                'assigned_to' => $row[1],
                'purchase_year' => $row[6],
                'device_id' => $row[4],
                'brand_id' => $row[5],
                'department_id' => $row[7],
                'location' => $row[8],
                'user_id' => $row[9],
                
                
                
        ]);
    }
}
