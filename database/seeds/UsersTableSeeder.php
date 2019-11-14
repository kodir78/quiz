<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
		 'name' => 'Kodir Zaelani',
		 'email' => 'kodir.zaelani78@gmail.com',
		 'password' => bcrypt('123456'),
		 ]);
		 $user->assignRole('administrator');
    }
}
