<?php

use Illuminate\Database\Seeder;
use App\Admin;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   $this->call(UsersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);







 // insert sample user as the system formateur

 




    }
}
