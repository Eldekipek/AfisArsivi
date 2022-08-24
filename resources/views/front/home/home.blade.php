@extends("front.layout")
@section("content")

<div class="posters-top">
            @if(isset($posters)&&!is_null($posters))

                <div class="poster-inner">
                    @foreach($posters as $poster)
                    <a href="{{route('poster.archive')}}" class="poster-items-link w-imgs">
                        <div>
                            <picture>
                                <img
                                    src="{{$poster->image}}"
                                    alt="">
                            </picture>
                        </div>
                    </a>
                    @endforeach
                    @endif
                </div>
</div>


     <!--Giris sayfası--->

    <div class="module-profiles gray-theme mt-5">
        <div class="row" style="display: flex">
            <div class="col-12 col-lg-2 pt-2">
                <h1 class="big highlight tight side-title-home" style="color: white; font-size:50px">Yeni Tasarımcı</h1>
                @if(isset($designers)&&!is_null($designers))
                @foreach($designers as $designer)
            </div>
            <div class="col-12 col-lg-10 pt-3">
                <a href="{{route('designer.profile',$designer->id)}}" class="module-profiles-link">
                    <div class="row module-profiles-row">
                        <div class="col-12 col-lg-4-10" style="width: 40%;">
                            <div class="module-profiles-name">
                                <div style="color: #1c1f23">
                                    <h1>{{$designer->name}}</h1>
                                    <h6>{{$designer->getCountry->name}}</h6>
                                </div>
                                <div>
                                    <div class="profile-icon large">
                                        <picture>
                                            <img
                                                src="{{$designer->image}}"
                                                alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6-10" style="width: calc(100% * 6 / 10);">
                            <div class="module-profiles-posters">
                                <picture>
                                    <img
                                        src="{{asset('https://images.typographicposters.com/search-2x-p3/nicolebrugger/nicolebrugger-poster-62ecdd354ac43f38a54b50ee.jpg')}}"
                                        alt="">
                                </picture>
                                <picture>
                                    <img
                                        src="{{asset('https://images.typographicposters.com/search-2x-p3/nicolebrugger/nicolebrugger-poster-62ecd24577a3b04347b58415.jpg')}}"
                                        alt="">
                                </picture>
                                <picture>
                                    <img
                                        src="{{asset('https://images.typographicposters.com/search-2x-p3/nicolebrugger/nicolebrugger-poster-62ecd0fb1aa91bf2a335dc4a.jpg')}}"
                                        alt="">
                                </picture>
                                <picture>
                                    <img
                                        src="{{asset('https://images.typographicposters.com/search-2x-p3/nicolebrugger/nicolebrugger-poster-62eccfad85798afc4e35d590.jpg')}}"
                                        alt="">
                                </picture>
                                <picture>
                                    <img
                                        src="{{asset('https://images.typographicposters.com/search-2x-p3/nicolebrugger/nicolebrugger-poster-62ecce9fc8769e1f0831937b.jpg')}}"
                                        alt="">
                                </picture>
                                <picture>
                                    <img
                                        src="{{asset('https://images.typographicposters.com/search-2x-p3/nicolebrugger/nicolebrugger-poster-62eccdd9cd006dbcb000b377.jpg')}}"
                                        alt="">
                                </picture>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="module-collection white-theme">
        <div class="collection-info">
            <div class="collection-info-heading">
                <div class="collection-titles">
                    <div>
                        <br>
                        <h1 class="big">Reklam Afişleri</h1>
                    </div>

                </div>

            </div>
            <div class="collection-info-footer">
                <small>{{$advertisement_poster->count()}} Afiş</small>
            </div>
        </div>
    </div>
    <div class="poster-article">
    <article class="poster-item ">
        <a href="" class="poster-items- w-imgs">
            <div class="poster-card-top">
                <picture>
                    <img
                        src="{{asset('https://images.typographicposters.com/search-2x-p3/apeloig/0117738-tnt-affiche-saison-2012-13-rvb-01.jpg')}}"
                        alt="">
                </picture>
            </div>
        </a>
        <div class="poster-item-info">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="/apeloig" class="">İpek Eldek</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a href="/apeloig" class="">Studio Philippe Apeloig</a></span></strong>
                    </h2><!---->
                    <h1 class="title"> 2012-2013”, 2012</h1> <!--Tarih--->
                    <small class="caption lining-numbers">France |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">Offset,</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">1000 x 700</small><!--ebat-->
                </span>
        </div>

    </article>
</div>


    <div class="module-collection white-theme">
        <div class="collection-info">
            <div class="collection-info-heading">
                <div class="collection-titles">
                    <div>
                        <br>
                        <h1 class="big">Kültürel Afişler</h1>
                    </div>

                </div>

            </div>
            <div class="collection-info-footer">
                <small>{{$culture_poster->count()}} Afiş</small>
            </div>
        </div>
    </div>
    <div class="poster-article">
    <article class="poster-item ">
        <a href="" class="poster-items- w-imgs">
            <div class="poster-card-top">
                <picture>
                    <img
                        src="{{asset('https://images.typographicposters.com/search-2x-p3/apeloig/0117738-tnt-affiche-saison-2012-13-rvb-01.jpg')}}"
                        alt="">
                </picture>
            </div>
        </a>
        <div class="poster-item-info">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="/apeloig" class="">İpek Eldek</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a href="/apeloig" class="">Studio Philippe Apeloig</a></span></strong>
                    </h2><!---->
                    <h1 class="title"> 2012-2013”, 2012</h1> <!--Tarih--->
                    <small class="caption lining-numbers">France |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">Offset,</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">1000 x 700</small><!--ebat-->
                </span>
        </div>

    </article>

</div>


    <div class="module-collection white-theme">
        <div class="collection-info">
            <div class="collection-info-heading">
                <div class="collection-titles">
                    <div>
                        <br>
                        <h1 class="big">Sosyal Afişler</h1>
                    </div>

                </div>

            </div>
            <div class="collection-info-footer">
                <small>{{$social_poster->count()}} Afiş</small>
            </div>
        </div>
    </div>
    <div class="poster-article">
    <article class="poster-item ">
        <a href="" class="poster-items- w-imgs">
            <div class="poster-card-top">
                <picture>
                    <img
                        src="{{asset('https://images.typographicposters.com/search-2x-p3/apeloig/0117738-tnt-affiche-saison-2012-13-rvb-01.jpg')}}"
                        alt="">
                </picture>
            </div>
        </a>
        <div class="poster-item-info">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="/apeloig" class="">İpek Eldek</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a href="/apeloig" class="">Studio Philippe Apeloig</a></span></strong>
                    </h2><!---->
                    <h1 class="title"> 2012-2013”, 2012</h1> <!--Tarih--->
                    <small class="caption lining-numbers">France |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">Offset,</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">1000 x 700</small><!--ebat-->
                </span>
        </div>

    </article>
</div>

@endsection






