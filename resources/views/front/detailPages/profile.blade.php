@extends("front.layout")
@section("content")
    <div class="container mb-5">
        <div class="row" style="width: 100%">
            <div class="col-12 m-4" style="
    display: flex;
    flex-direction: column;
    align-items: center;">
                @if(isset($designer)&&!is_null($designer))
                <div class="profile-img">
                    <div>
                        <picture>
                            <img src="{{$designer->image}}" alt="">
                        </picture>
                    </div>
                </div>
                <div class="profile-name">
                    <h2>{{$designer->name}}</h2>
                </div>
                <div class="profile-birth">
                    <h6>{{$designer->birthday}} / </h6><h6> {{$designer->getCountry->name}}</h6>
                </div>
             </div>
            <div class="summary">
            <p style="text-align: center;"> Kullanıcının, Sitemiz Altında Bulunan Afişleri Aşağıdaki Gibidir. </p>
            </div>
        </div>
        @endif
    </div>

    <div class="container pt-1">
        <div class="row">
            <article class="poster-item col-6 col-md-2">
                <a href="" class="poster-items-link w-imgs">
                    <div>
                        <picture>
                            <img src="{{asset('https://images.typographicposters.com/search-2x-p3/erich-brechbuhl/filmpreis-2019.jpg')}}" alt="">
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
    </div>
@endsection
