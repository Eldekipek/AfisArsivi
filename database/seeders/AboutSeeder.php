<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_page')->insert([
            'title' => "Hakkımızda",
            'image' => '',
            'content' => '<p>İnsanlığın bilgi paylaşımını sağlayan önemli hafızalarından biri arşivdir.</p>

            <p> Teknoloji, insan hayatını ve insanlar arasındaki bilgi alışverişini kolaylaştırmıştır.</p>

            <p> 19. yüzyıldan sonra bilgi ve iletişim teknolojilerinin gelişmesi, üretimi ve tüketimi hızla ve farkında olmadan artmıştır.</p>

            <p> Zaman içerisinde gelişen ve dönüşen teknoloji, beraberinde dijitalleşmeyi getirmiştir.</p>

            <p> Bu nedenle bilgi paylaşımları basılı materyallerden dijital ekranlara dönüşmüştür.</p>

            <p> Bir tasarım geliştirme araştırması modeli olarak afişin dijital arşivinin uygulaması, afişin var olması ve araştırmalarda kullanılmasını doğru biçimde sağlamaya yönelik bir bir adımdır.</p>

           ',
        ]);
    }
}
