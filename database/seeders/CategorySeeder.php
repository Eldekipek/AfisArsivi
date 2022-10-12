<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id'  => 1, 'name' => 'Reklam Afişleri'],
            ['id'  => 2, 'name' => 'Kültürel Afişler'],
            ['id'  => 3, 'name' => 'Sosyal Afişler'],
            ['id'  => 4, 'name' => 'Tipografik Afişler'],
            ['id'  => 5, 'name' => 'Diğer Afişler'],
        ]);

    }
}
