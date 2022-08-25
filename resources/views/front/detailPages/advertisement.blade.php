@extends("front.layout")
@section("content")
    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>Reklam Afişleri Arşivi</h2>
    </div>
    @if(isset($advertisement_poster)&&!is_null($advertisement_poster))
        @foreach($advertisement_poster as $adv)
            <div class="poster-article">
                <article class="poster-item ">
                    <a href="" class="poster-items- w-imgs">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="{{asset($adv->image)}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="poster-item-info">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="{{route('designer.profile',$adv->getUser->id)}}"
                                     class="">{{($adv->getUser->name)}}</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a class="">{{($adv->title)}}</a></span></strong>
                    </h2><!---->
                    <h1 class="title"> {{($adv->date)}}</h1> <!--Tarih--->
                    <small class="caption lining-numbers">{{($adv->country)}} |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">{{($adv->printing_technique)}},</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">{{($adv->dimensions)}}</small><!--ebat-->
                </span>
                            <div class="afis-buttons">

                                <div class="afis-detail">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn- border" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Detay
                                    </button>
                                @endforeach
                                @endif
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Afiş Detayı</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <picture>
                                                        <img
                                                            style="width: 250px; height: 250px; margin: auto;display: flex"
                                                            src="{{asset($adv->image)}}" alt="">
                                                    </picture>
                                                    <div class="mt-3" style="    display: flex;
                                                                         flex-direction: column;
                                                                         align-items: center;">
                                        <span class="common-links">
                                            <h2 class="title"><strong> <!--Tasarımcı adı--->
                                                <span><a href="{{route('designer.profile',$adv->getUser->id)}}"
                                                         class="">{{($adv->getUser->name)}}</a></span></strong>
                                            </h2>
                                            <h2 class="title"><strong> <!--Proje adı--->
                                                <span><a href="" class="">{{($adv->title)}}</a></span></strong>
                                            </h2><!---->
                                            <h1 class="title"> {{($adv->date)}}</h1> <!--Tarih--->
                                            <small class="caption lining-numbers">{{($adv->country)}} |</small>
                                            <!--Kullanıldığı yer-->
                                            <small
                                                class="caption lining-numbers">{{($adv->printing_technique)}},</small>
                                            <!--Baskı tekniği-->
                                            <small class="caption lining-numbers">{{($adv->dimensions)}}</small>
                                            <!--ebat-->
                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </a>
                </article>
            </div>
@endsection
