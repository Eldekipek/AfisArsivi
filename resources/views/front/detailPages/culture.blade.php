@extends("front.layout")
@section("content")
    <div class="about-title" style="display:flex;justify-content: space-between;margin:30px;border-bottom: 1px solid #0e0e0e;">
        <div class="culture-title ">
            <h2 style="font-family: work-sans, sans-serif;
    font-weight: 400;
    font-style: normal;">Kültürel Afişler Arşivi</h2>
        </div>
        <div class="culture-poster-title ">
          <strong><p> {{$culture_poster->count()}} Afiş</p></strong>
        </div>
    </div>
            <div class="container mb-5">
                @if(isset($culture_poster)&&!is_null($culture_poster))
                <article class="poster-item ">
                    @foreach($culture_poster as $culture)
                    <div href="" class="poster-items- w-imgs">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="{{asset('uploads/thumbnail/'.$culture->image)}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="poster-item-info"  style="padding: 15px;">
                            <span class="common-links">
                                <h2 class="title"><strong> <!--Tasarımcı adı--->
                                <span><a href="{{route('designer.profile',$culture->getUser->id)}}"
                                     class="">{{($culture->getUser->name)}}</a></span></strong>
                                </h2>
                                <h2 class="title"><strong> <!--Proje adı--->
                                <span><a class="">{{($culture->title)}}</a></span></strong>
                                </h2><!---->
                                <h1 class="title">{{$culture->date = date('d-m-Y', strtotime($culture->date))}}</h1> <!--Tarih--->
                                <div style="white-space:nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;">
    <small  class="caption lining-numbers">{{($culture->country)}} |</small><!--Kullanıldığı yer-->
    <small  class="caption lining-numbers">{{($culture->printing_technique)}},</small>
                                    <!--Baskı tekniği-->
</div>
                                <small class="caption lining-numbers">{{($culture->dimensions)}}</small><!--ebat-->
                            </span>

                                <div class="afis-detail">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn- border" onclick="getPoster({{$culture->id}})"  data-toggle="modal"
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
    <div class="modal fade" style="background: #00000075;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 900px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Afiş Başlığı</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-row">
                        <div class="col-6">
                            <picture>
                                <img style="width: 500px; margin: auto;display: flex;    object-position: top;
                             object-fit: cover;
                             position: relative;
                             transition: 400ms all;" id="imageGet" class="img-thumbnail" src="{{asset('https://images.typographicposters.com/search-2x-p3/apeloig/0117738-tnt-affiche-saison-2012-13-rvb-01.jpg')}}" alt="">
                            </picture>
                        </div>
                        <div class="col-6">
                            <div class="mt-3" style="    display: flex;
                                                                         flex-direction: column;
                                                                         align-items: center;">
                                <span class="common-links">
                                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                                            <span><a id="designerGet" class="">İpek Eldek</a></span></strong>
                                    </h2>
                                    <h2 class="title"><strong> <!--Proje adı--->
                                            <span><a id="nameGet" class="">Studio Philippe Apeloig</a></span></strong>
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
