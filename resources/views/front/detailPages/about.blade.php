@extends("front.layout")
@section("content")

    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>Hakkımızda</h2>
    </div>
    <div class="container">
        <div class="about-content">
            @if($page->content) {!! $page->content !!} @else
            <p>İnsanlığın bilgi paylaşımını sağlayan önemli hafızalarından biri arşivdir.</p>
            <p> Teknoloji, insan hayatını ve insanlar arasındaki bilgi alışverişini kolaylaştırmıştır.</p>
            <p> 19. yüzyıldan sonra bilgi ve iletişim teknolojilerinin gelişmesi, üretimi ve tüketimi hızla ve farkında olmadan artmıştır.</p>
            <p> Zaman içerisinde gelişen ve dönüşen teknoloji, beraberinde dijitalleşmeyi getirmiştir.</p>
            <p> Bu nedenle bilgi paylaşımları basılı materyallerden dijital ekranlara dönüşmüştür.</p>
            <p> Bir tasarım geliştirme araştırması modeli olarak afişin dijital arşivinin uygulaması, afişin var olması ve araştırmalarda kullanılmasını doğru biçimde sağlamaya yönelik bir bir adımdır.</p>
            @endif
        </div>
        <h2>Sergiler</h2>
        <p><img class="mr-1" loading="lazy" class="alignnone size-medium wp-image-105" src="/app/uploads/2021/01/typographicpostersexhibition1-424x283.jpg"
                alt="" width="424" height="283" srcset="https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-424x283.jpg 424w,
                https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-1000x667.jpg 1000w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-200x133.jpg 200w,
                https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-560x373.jpg 560w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-1536x1024.jpg 1536w,
                https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-2048x1365.jpg 2048w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-400x267.jpg 400w,
                https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-848x565.jpg 848w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition1-1120x747.jpg 1120w" sizes="(max-width: 424px) 100vw, 424px">
            <img class="mr-1" loading="lazy" class="alignnone size-medium wp-image-102" src="/app/uploads/2021/01/typographicpostersexhibition2a-424x283.jpg" alt="" width="424" height="283" srcset="https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-424x283.jpg 424w,
            https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-1000x667.jpg 1000w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-200x133.jpg 200w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-560x373.jpg 560w,
            https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-1536x1024.jpg 1536w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-400x267.jpg 400w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-848x565.jpg 848w,
            https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a-1120x747.jpg 1120w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition2a.jpg 1872w" sizes="(max-width: 424px) 100vw, 424px">
            <img class="mr-1" loading="lazy" class="alignnone size-medium wp-image-104" src="/app/uploads/2021/01/typographicpostersexhibition4-424x282.jpg" alt="" width="424" height="282" srcset="
            https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-424x282.jpg 424w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-1000x666.jpg 1000w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-200x133.jpg 200w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-560x373.jpg 560w,
            https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-2048x1363.jpg 2048w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-400x266.jpg 400w, https://www.typographicposters.com/app/uploads/2021/01/typographicpostersexhibition4-1120x746.jpg 1120w" sizes="(max-width: 424px) 100vw, 424px"></p>
    </div>
@endsection
