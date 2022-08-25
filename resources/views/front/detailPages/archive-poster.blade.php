@extends("front.layout")
@section("content")
    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>Afiş Arşivi</h2>
    </div>

    <div class="container mb-5">
        @if(isset($posters)&&!is_null($posters))
        <article class="poster-item ">
            @foreach($posters as $poster)
            <div href="" class="poster-items- w-imgs">
                <div class="poster-card-top">
                    <picture>
                        <img
                            src="{{asset($poster->image)}}"
                            alt="">
                    </picture>
                </div>
                <div class="poster-item-info" style="padding: 15px;">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="" class="">{{$poster->getUser->name}}</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a class="">{{$poster->title}}</a></span></strong>
                    </h2><!---->
                    <h1 class="title">{{$poster->date}}</h1> <!--Tarih--->
                    <small class="caption lining-numbers">{{$poster->country}} |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">{{$poster->printing_technique}},</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">{{$poster->dimensions}}</small><!--ebat-->
                </span>
                        <div class="afis-detail">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn- border" data-toggle="modal" data-target="#exampleModal">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Afiş Başlığı</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <picture>
                        <img style="width: 250px; height: 250px; margin: auto;display: flex" src="{{asset('https://images.typographicposters.com/search-2x-p3/apeloig/0117738-tnt-affiche-saison-2012-13-rvb-01.jpg')}}" alt="">
                    </picture>
                    <div class="mt-3" style="    display: flex;
                                                                         flex-direction: column;
                                                                         align-items: center;">
                                        <span class="common-links">
                                            <h2 class="title"><strong> <!--Tasarımcı adı--->
                                                <span><a href="" class="">İpek Eldek</a></span></strong>
                                            </h2>
                                            <h2 class="title"><strong> <!--Proje adı--->
                                                <span><a href="" class="">Studio Philippe Apeloig</a></span></strong>
                                            </h2><!---->
                                            <h1 class="title"> 2012-2013”, 2012</h1> <!--Tarih--->
                                            <small class="caption lining-numbers">France |</small><!--Kullanıldığı yer-->
                                            <small class="caption lining-numbers">Offset,</small><!--Baskı tekniği-->
                                            <small class="caption lining-numbers">1000 x 700</small><!--ebat-->
                                        </span>
                        <div class="icons">
                            <div class="like">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="add-collection">
                                <i class="fa-solid fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
