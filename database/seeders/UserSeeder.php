<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'        => '1',
            'name'      => 'USER PELUPUS/MISSING',
            'email'     => 'user@user.com',
            'password'  =>  bcrypt('password'),
            'staff_no'  => '1122',
            'phone_no'  => '0173422222',
        ]);

        User::create([
            'id'        => '2',
            'name'      => 'SYED',
            'email'     => 'syed@mbsj.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '2222',
            'phone_no'  => '0163291023',
        ]);
        User::create([
            'id'        => '3',
            'name'      => 'NURAZLINA',
            'email'     => 'nurazlina@mbsj.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '1122',
            'phone_no'  => '0193312201',
        ]);
        User::create([
            'id'        => '4',
            'name'      => 'MOHD NAZLY',
            'email'     => 'nazly@mbsj.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '1122',
            'phone_no'  => '0173002001',
        ]);

        User::create([
            'id'        => '5',
            'name'      => 'MOHD RAZUHRIN',
            'email'     => 'razuhrin@mbsj.my',
            'password'  =>  bcrypt('pass4371'),
            'staff_no'  => '1111',
            'phone_no'  => '0192021010',
        ]);
       
    }
}
