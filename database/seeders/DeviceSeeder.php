<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Device;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'id'        => '1',
            'device_name'      => 'KOMPUTER(DESKTOP)',
            
        ]);
        Device::create([
            'id'        => '2',
            'device_name'      => 'KOMPUTER TABLET',
            
        ]);
        Device::create([
            'id'        => '3',
            'device_name'      => 'KOMPUTER RIBA(LAPTOP)',
          
        ]);
        Device::create([
            'id'        => '4',
            'device_name'      => 'PENCETAK (PRINTER)',
           
        ]);
        Device::create([
            'id'        => '5',
            'device_name'      => 'PENGIMBAS(SCANNER)',
          
        ]);
        Device::create([
            'id'        => '6',
            'device_name'      => 'NO INFO',
          
        ]);
        Device::create([
            'id'        => '7',
            'device_name'      => 'NO INFO',
          
        ]);
        Device::create([
            'id'        => '8',
            'device_name'      => 'NO INFO',
          
        ]);
        Device::create([
            'id'        => '9',
            'device_name'      => 'NO INFO',
          
        ]);

        Device::create([
            'id'        => '10',
            'device_name'      => 'NO INFO',
          
        ]);
    }
}
