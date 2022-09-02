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
                                    src="/uploads/thumbnail/{{$poster->image}}"
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
            <div class="col-12 col-lg-2 pt-2" style="    display: flex;
    align-items: center;">
                <h1 class="big highlight tight side-title-home" style=" color: #007ca2; font-size:33px;font-family: work-sans, sans-serif;
font-weight: 400;
font-style: normal;
   "><a class="big highlight tight side-title-home" style="text-decoration: none" href="{{route('designer.index')}}">Tasarımcılar</a> </h1>
                @if(isset($designers)&&!is_null($designers))
                    @foreach($designers as $designer)
            </div>
            <div class="col-12 col-lg-10 pt-3">
                <a href="{{route('designer.profile',$designer->id)}}" class="module-profiles-link">
                    <div class="row module-profiles-row">
                        <div class="col-12 col-lg-4-10" style="width: 40%;">
                            <div class="module-profiles-name">
                                <div style="color: #1c1f23">
                                    <h2 style="font-family: work-sans, sans-serif;

font-weight: 400;

font-style: normal;">{{$designer->name}}</h2>
                                    @if(isset($designer->getCountry->name)&&!is_null($designer->getCountry->name))

                                    <h6>{{$designer->getCountry->name}}</h6>
                                    @endif
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
                                @foreach($designer_posters as $designer_poster)
                                <picture>
                                    <img
                                        src="{{asset('uploads/thumbnail/'.$designer_poster->image)}}"
                                        alt="">
                                </picture>
                                @endforeach
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

                <div class="collection-titles" style="display: flex;
    flex-direction: column;">
                    <div class="collection">
                        <p>Koleksiyon</p>
                    </div>
                    <div>

                        <h2 class="big" style="font-family: work-sans, sans-serif;
font-weight: 400;
font-style: normal;"><a class="big highlight tight side-title-home" style="text-decoration: none; color: #0e0e0e" href="{{route('poster.advertisement')}}">Reklam Afişleri</a></h2>
                    </div>

                </div>

            </div>

            <div class="collection-info-footer">
                <small>{{$advertisement_poster->count()}} Afiş</small>
            </div>
        </div>
    </div>
            <div class="container">
                @if(isset($advertisement_poster)&&!is_null($advertisement_poster))

                    <article class="poster-item ">
                        @foreach($advertisement_poster as $adv)
                        <a href="{{route('poster.advertisement')}}" class="poster-items- w-imgs" style="color: #464646; ">
                            <div class="poster-card-top">
                                <picture>
                                    <img
                                        src="/uploads/thumbnail/{{$adv->image}}"
                                        alt="">
                                </picture>
                            </div>

                                <div class="poster-item-info" style="padding: 30px;">
                            <span class="common-links">
                                <h2 class="title"><strong> <!--Tasarımcı adı--->
                                        <span><div href="{{route('designer.profile',$adv->getUser->id)}}"
                                                 class="">{{($adv->getUser->name)}}</div></span></strong>
                                </h2>
                                <h2 class="title"><strong> <!--Proje adı--->
                                        <span><div class="">{{($adv->title)}}</div></span></strong>
                                </h2><!---->
                                <h1 class="title"> {{($adv->date)}}</h1> <!--Tarih--->
                                <small class="caption lining-numbers">{{($adv->country)}} |</small><!--Kullanıldığı yer-->
                                <small class="caption lining-numbers">{{($adv->printing_technique)}},</small><!--Baskı tekniği-->
                                <small class="caption lining-numbers">{{($adv->dimensions)}}</small><!--ebat-->
                            </span>
                            </div>
                        </a>
                        @endforeach
                    </article>
                @endif
            </div>

    <div class="module-collection white-theme">
                <div class="collection-info">
                    <div class="collection-info-heading">
                        <div class="collection-titles"  style="display: flex;
    flex-direction: column;">
                            <div class="collection">
                                <p>Koleksiyon</p>
                            </div>
                            <div>

                                <h2 class="big" style="font-family: work-sans, sans-serif;
font-weight: 400;
font-style: normal;"><a class="big highlight tight side-title-home" style="text-decoration: none; color: #0e0e0e" href="{{route('poster.culture')}}">Kültürel Afişler</a></h2>
                            </div>

                        </div>

                    </div>
                    <div class="collection-info-footer">
                        <small>{{$culture_poster->count()}} Afiş</small>
                    </div>
                </div>
            </div>


            <div class="container">
                @if(isset($culture_poster)&&!is_null($culture_poster))
                <article class="poster-item ">
                    @foreach($culture_poster as $culture)
                    <a href="{{route('poster.culture')}}" class="poster-items- w-imgs" style="color: #464646; ">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="/uploads/thumbnail/{{$culture->image}}"
                                    alt="">
                            </picture>
                        </div>

                    <div class="poster-item-info" style="padding: 30px;">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><div href="{{route('designer.profile',$culture->getUser->id)}}" class="">{{($culture->getUser->name)}}</div></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><div class="">{{($culture->title)}}</div></span></strong>
                    </h2><!---->
                    <h1 class="title"> {{($culture->date)}}</h1> <!--Tarih--->
                    <small class="caption lining-numbers">{{($culture->country)}} |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">{{($culture->printing_technique)}},</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">{{($culture->dimensions)}}</small><!--ebat-->
                </span>
                    </div>
                    </a>
                    @endforeach
                </article>
                @endif
            </div>


            <div class="module-collection white-theme">
                <div class="collection-info">
                    <div class="collection-info-heading">
                        <div class="collection-titles" style="display: flex;
    flex-direction: column;">
                            <div class="collection">
                                <p>Koleksiyon</p>
                            </div>
                            <div>

                                <h2 class="big" style="font-family: work-sans, sans-serif;
font-weight: 400;
font-style: normal;"><a class="big highlight tight side-title-home" style="text-decoration: none; color: #0e0e0e" href="{{route('poster.social')}}">Sosyal Afişler</a></h2>
                            </div>

                        </div>

                    </div>
                    <div class="collection-info-footer">
                        <small>{{$social_poster->count()}} Afiş</small>
                    </div>
                </div>
            </div>


            <div class="container mb-5">
                @if(isset($social_poster)&&!is_null($social_poster))
                <article class="poster-item ">
                    @foreach($social_poster as $social)
                    <a href="{{route('poster.social')}}" class="poster-items- w-imgs" style="color: #464646; ">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="/uploads/thumbnail/{{$social->image}}"
                                    alt="">
                            </picture>
                        </div>

                    <div class="poster-item-info" style="padding: 30px;">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><div href="{{route('designer.profile',$social->getUser->id)}}" class="">{{($social->getUser->name)}}</div></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><div class="">{{($social->title)}}</div></span></strong>
                    </h2><!---->
                    <h1 class="title"> {{($social->date)}}</h1> <!--Tarih--->
                    <div style="white-space:nowrap;
                                            width: 200px;
                                            overflow: hidden;
                                            text-overflow: ellipsis;">
                    <small  class="caption lining-numbers">{{($social->country)}} |</small><!--Kullanıldığı yer-->
                    <small  class="caption lining-numbers">{{($social->printing_technique)}},</small><!--Baskı tekniği-->
                    </div>
                    <small class="caption lining-numbers">{{($social->dimensions)}}</small><!--ebat-->
                </span>
                    </div>
                    </a>
                    @endforeach
                </article>
                @endif
            </div>



@endsection






