<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(AsetOfficerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AssetSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DeviceSeeder::class);
        $this->call(BrandSeeder::class);

    }
}
