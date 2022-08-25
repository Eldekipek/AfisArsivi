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
                            <img src="{{asset($designer->image)}}" alt="">

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

    <div class="container mb-5">
        <!----if isset buraya gelecek sdfghj--->
            <article class="poster-item ">
                <!-----foreach buraya asdfgyhujı--->
                    <div href="" class="poster-items- w-imgs">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="{{asset('')}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="poster-item-info" style="padding: 15px;">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a href="" class="">tasarımcı ismi</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a class="">proje adı</a></span></strong>
                    </h2><!---->
                    <h1 class="title">tarih</h1> <!--Tarih--->
                    <small class="caption lining-numbers">ülke |</small><!--Kullanıldığı yer-->
                    <small class="caption lining-numbers">baskı tekniği,</small><!--Baskı tekniği-->
                    <small class="caption lining-numbers">ebat</small><!--ebat-->
                </span>
                            <div class="afis-detail">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn- border" data-toggle="modal" data-target="#exampleModal">
                                    Detay
                                </button>
                            </div>
                        </div>
                    </div>
               <!------end foreach-->
            </article>
        <!----endif buraya---->
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
                        <img style="width: 250px; height: 250px; margin: auto;display: flex" src="{{}}" alt="">
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
