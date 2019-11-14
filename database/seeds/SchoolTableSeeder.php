<?php

use Illuminate\Database\Seeder;
use App\Models\School;


class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        School::create([
		 'slug' => Str::random(5),
		 'name' => 'SMK Negeri 1 Nusantara',
		 'address' => 'Jl. Raya Merdeka',
		 'phone' => '(0541) 956789',
		 'email' => 'contact@smkn1nusantara.sch.id',
		 'website' => 'smkn1nusantara.sch.id'
 ]);
    }
}
