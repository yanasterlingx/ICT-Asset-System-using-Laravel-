<?php

namespace Database\Seeders;
use App\AsetOfficer;
use Illuminate\Database\Seeder;

class AsetOfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asetofficer::create([
            'id'        => '1',
            'name'      => 'OFFICER !',
            'email'     => 'off@off.com',
            'password'  =>  bcrypt('password'),
            'staff_no'  => '1122',
            'phone_no'  => '0173803902',
        ]);
    }
}
