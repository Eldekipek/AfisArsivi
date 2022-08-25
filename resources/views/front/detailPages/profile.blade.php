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
            <div class="number-posters">
                <strong><p style="text-align: center;">{{$designer->getPoster->count()}} Afiş</p></strong>
            </div>
        </div>
        @endif
    </div>

    <div class="container mb-5">
        <!----if isset buraya gelecek sdfghj--->
            <article class="poster-item ">

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
                   <div style="white-space:nowrap;
                        width: 200px;
                        overflow: hidden;
                        text-overflow: ellipsis;">
<small  class="caption lining-numbers">ülke |</small><!--Kullanıldığı yer-->
<small  class="caption lining-numbers">baskı tekniği,</small><!--Baskı tekniği-->
</div>

                    <small class="caption lining-numbers">ebat</small><!--ebat-->
                </span>
                            <div class="afis-detail">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn- border" {{--onclick="getPoster({{$poster->id}})" --}} data-toggle="modal" data-target="#exampleModal">
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
                        <img style="width: 250px; height: 250px; margin: auto;display: flex" id="imageGet" class="img-thumbnail" src="{{asset('https://images.typographicposters.com/search-2x-p3/apeloig/0117738-tnt-affiche-saison-2012-13-rvb-01.jpg')}}" alt="">
                    </picture>
                    <div class="mt-3" style="    display: flex;
                                                                         flex-direction: column;
                                                                         align-items: center;">
                                        <span class="common-links">
                                            <h2 class="title"><strong> <!--Tasarımcı adı--->
                                                <span><a href="" id="designerGet" class="">İpek Eldek</a></span></strong>
                                            </h2>
                                            <h2 class="title"><strong> <!--Proje adı--->
                                                <span><a href="" id="nameGet" class="">Studio Philippe Apeloig</a></span></strong>
                                            </h2><!---->
                                            <h1 class="title" id="tarihGet"> 2012-2013”, 2012</h1> <!--Tarih--->
                                            <small class="caption lining-numbers" id="yerGet">France |</small><!--Kullanıldığı yer-->
                                            <small class="caption lining-numbers" id="baskıGet">Offset,</small><!--Baskı tekniği-->
                                            <small class="caption lining-numbers" id="ebatGet">1000 x 700</small><!--ebat-->
                                            <div class="culture-explanation" id="açıklamaGet">
                                                <p>açıklamaq açıklama açıklama açıklama çıklamaq açıklama açıklama açıklama
                                                çıklamaq açıklama açıklama açıklama</p>
                                            </div>
                                        </span>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        function getPoster(id) {

            $.ajax({
                type: 'GET',
                url: '{{route('poster.detail.get')}}',
                data: {id: id},
                success: function (data) {
                    $('#designerGet').html(data.name);
                    $('#imageGet').prop('src',data.image);
                    $('#nameGet').html(data.title);
                    $('#tarihGet').html(data.tarih);
                    $('#yerGet').html(data.yer);
                    $('#ebatGet').html(data.ebat);
                    $('#baskıGet').html(data.baski);
                    $('#açıklamaGet').html(data.contentt);


                    $('#detail-poster').modal('toggle');


                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Başarısız',

                        html: 'Bilinmeyen bir hata oluştu.\n' + errors,
                    });
                }
            });
        }
    </script>

@endsection
