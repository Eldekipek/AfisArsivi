<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'address' => "Firat Universitesi Basim ve Yayin Evi",
            'email' => 'kainatozpolat@gmail.com',
            'phone_number' =>'+905383013186',
        ]);
    }
}
