@extends("front.layout")
@section("content")
    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>Sosyal Afişler Arşivi</h2>
    </div>


            <div class="container mb-5">
                @if(isset($social_poster)&&!is_null($social_poster))
                <article class="poster-item ">
                    @foreach($social_poster as $social)
                    <div href="" class="poster-items- w-imgs">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="{{asset($social->image)}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="poster-item-info" style="padding: 15px;">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="{{route('designer.profile',$social->getUser->id)}}"
                                     class="">{{($social->getUser->name)}}</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a class="">{{($social->title)}}</a></span></strong>
                    </h2><!---->
                    <h1 class="title"> {{($social->date)}}</h1> <!--Tarih--->
                    <small class="caption lining-numbers">{{($social->country)}} |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">{{($social->printing_technique)}},</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">{{($social->dimensions)}}</small><!--ebat-->
                </span>
                                <div class="afis-detail">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn- border" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Detay
                                    </button>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </article>
                @endif
            </div>

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
                            src="{{asset($social->image)}}" alt="">
                    </picture>
                    <div class="mt-3" style="    display: flex;
                                                                         flex-direction: column;
                                                                         align-items: center;">
                                        <span class="common-links">
                                            <h2 class="title"><strong> <!--Tasarımcı adı--->
                                                <span><a href="{{route('designer.profile',$social->getUser->id)}}"
                                                         class="">{{($social->getUser->name)}}</a></span></strong>
                                            </h2>
                                            <h2 class="title"><strong> <!--Proje adı--->
                                                <span><a href="" class="">{{($social->title)}}</a></span></strong>
                                            </h2><!---->
                                            <h1 class="title"> {{($social->date)}}</h1> <!--Tarih--->
                                            <small class="caption lining-numbers">{{($social->country)}} |</small>
                                            <!--Kullanıldığı yer-->
                                            <small
                                                class="caption lining-numbers">{{($social->printing_technique)}},</small>
                                            <!--Baskı tekniği-->
                                            <small class="caption lining-numbers">{{($social->dimensions)}}</small>
                                            <!--ebat-->
                                        </span>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
