<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
             ['id'  => 1, 'name' => 'Türkiye'],
             ['id'  => 2, 'name' => 'Afghanistan'],
             ['id'  => 3, 'name' => 'Albania'],
             ['id'  => 4, 'name' => 'Algeria'],
             ['id'  => 5, 'name' => 'Andorra'],
             ['id'  => 7, 'name' => 'Argentina'],
             ['id'  => 8, 'name' => 'Armenia'],
             ['id'  => 9, 'name' => 'Australia'],
             ['id'  => 10, 'name' => 'Austria'],
             ['id'  => 11, 'name' => 'Azerbaijan'],
             ['id'  => 12, 'name' => 'Belarus'],
             ['id'  => 13, 'name' => 'Belgium'],
             ['id'  => 14, 'name' => 'Bolivia'],
             ['id'  => 15, 'name' => 'Bosnia and Herzegovina'],
             ['id'  => 16, 'name' => 'Brazil'],
             ['id'  => 17, 'name' => 'Bulgaria'],
             ['id'  => 18, 'name' => 'Canada'],
             ['id'  => 19, 'name' => 'Chile'],
             ['id'  => 20, 'name' => 'China'],
             ['id'  => 21, 'name' => 'Colombia'],
             ['id'  => 22, 'name' => 'Croatia (Hrvatska)'],
             ['id'  => 23, 'name' => 'Cuba'],
             ['id'  => 24, 'name' => 'Cyprus'],
             ['id'  => 25, 'name' => 'Czech Republic'],
             ['id'  => 26, 'name' => 'Denmark'],
             ['id'  => 27, 'name' => 'Ecudaor'],
             ['id'  => 28, 'name' => 'Egypt'],
             ['id'  => 29, 'name' => 'Finland'],
             ['id'  => 30, 'name' => 'France'],
             ['id'  => 31, 'name' => 'Germany'],
             ['id'  => 32, 'name' => 'Greece'],
             ['id'  => 33, 'name' => 'Hungary'],
             ['id'  => 34, 'name' => 'Iceland'],
             ['id'  => 35, 'name' => 'India'],
             ['id'  => 36, 'name' => 'Indonesia'],
             ['id'  => 37, 'name' => 'Iran (Islamic Republic of)'],
             ['id'  => 38, 'name' => 'Iraq'],
             ['id'  => 39, 'name' => 'Ireland'],
             ['id'  => 40, 'name' => 'Israel'],
             ['id'  => 41, 'name' => 'Italy'],
             ['id'  => 42, 'name' => 'Ivory Coast'],
             ['id'  => 43, 'name' => 'Jamaica'],
             ['id'  => 44, 'name' => 'Japan'],
             ['id'  => 45, 'name' => 'Kazakhstan'],
             ['id'  => 46, 'name' => 'Korea, Republic of'],
             ['id'  => 47, 'name' => 'Kyrgyzstan'],
             ['id'  => 48, 'name' => 'Lithuania'],
             ['id'  => 49, 'name' => 'Luxembourg'],
             ['id'  => 50, 'name' => 'Macedonia'],
             ['id'  => 51, 'name' => 'Maldives'],
             ['id'  => 52, 'name' => 'Mexico'],
             ['id'  => 53, 'name' => 'Morocco'],
             ['id'  => 54, 'name' => 'Netherlands'],
             ['id'  => 55, 'name' => 'New Zealand'],
             ['id'  => 56, 'name' => 'Nigeria'],
             ['id'  => 57, 'name' => 'Norway'],
             ['id'  => 58, 'name' => 'Pakistan'],
             ['id'  => 59, 'name' => 'Paraguay'],
             ['id'  => 60, 'name' => 'Peru'],
             ['id'  => 61, 'name' => 'Philippines'],
             ['id'  => 62, 'name' => 'Poland'],
             ['id'  => 63, 'name' => 'Portugal'],
             ['id'  => 64, 'name' => 'Qatar'],
             ['id'  => 65, 'name' => 'Romania'],
             ['id'  => 66, 'name' => 'Russian Federation'],
             ['id'  => 67, 'name' => 'Saudi Arabia'],
             ['id'  => 68, 'name' => 'Senegal'],
             ['id'  => 69, 'name' => 'Serbia'],
             ['id'  => 70, 'name' => 'Singapore'],
             ['id'  => 71, 'name' => 'Slovakia'],
             ['id'  => 72, 'name' => 'Slovenia'],
             ['id'  => 73, 'name' => 'South Africa'],
             ['id'  => 74, 'name' => 'Spain'],
             ['id'  => 75, 'name' => 'Sweden'],
             ['id'  => 76, 'name' => 'Switzerland'],
             ['id'  => 77, 'name' => 'Thailand'],
             ['id'  => 78, 'name' => 'Turkmenistan'],
             ['id'  => 79, 'name' => 'Ukraine'],
             ['id'  => 80, 'name' => 'United Arab Emirates'],
             ['id'  => 81, 'name' => 'United Kingdom'],
             ['id'  => 82, 'name' => 'United States'],
             ['id'  => 83, 'name' => 'Uruguay'],
             ['id'  => 84, 'name' => 'Uzbekistan'],
        ]);
    }
}
