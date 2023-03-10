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
                    <h6>{{$designer->birthday = date('d-m-Y', strtotime($designer->birthday))}} /</h6>
                    @if(isset($designer->getCountry->name)&&!is_null($designer->getCountry->name))

                        <h6>{{$designer->getCountry->name}}</h6>
                    @endif

                </div>
             </div>
            <div class="summary">
                <div class="caticerik">
                    {!!$designer->explanation!!}
                </div>
                @if(isset($designer->explanation))
                <div class="devaminioku">
                    <div class="devamyazi btn" style="font-weight: 600;border-bottom: 1px solid #000000">DEVAMINI OKU</div>
                </div>
                @else
                    <div class="devaminioku">
                        <div class="devamyazi btn" style="font-weight: 600;border-bottom: 1px solid #000000; display: none">DEVAMINI OKU</div>
                    </div>
                @endif
            </div>
            <div class="number-posters">
                <strong><p style="text-align: center;">{{$designer->getPoster->count()}} Afiş</p></strong>
            </div>
        </div>
        @endif
    </div>

    <div class="container mb-5">
        @if(isset($posters)&&!is_null($posters))
            <article class="poster-item ">
                @foreach($posters as $poster)
                    <div href="" class="poster-items- w-imgs">
                        <div class="poster-card-top">
                            <picture>
                                <img
                                    src="{{asset('uploads/thumbnail/'.$poster->image)}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="poster-item-info" style="padding: 15px;">
                <span class="common-links">
                    <h2 class="title"><strong> <!--Tasarımcı adı--->
                            <span><a class="">{{$poster->getUser->name}}</a></span></strong>
                    </h2>
                    <h2 class="title"><strong> <!--Proje adı--->
                            <span><a class="">{{$poster->title}}</a></span></strong>
                    </h2><!---->
                    <h1 class="title">{{$poster->date = date('d-m-Y', strtotime($poster->date))}}</h1> <!--Tarih--->
                   <div style="white-space:nowrap;
                        width: 200px;
                        overflow: hidden;
                        text-overflow: ellipsis;">
<small  class="caption lining-numbers">{{$poster->country}} |</small><!--Kullanıldığı yer-->
<small  class="caption lining-numbers">{{$poster->printing_technique}},</small><!--Baskı tekniği-->
</div>

                    <small class="caption lining-numbers">{{$poster->dimensions}}</small><!--ebat-->
                </span>
                            <div class="afis-detail">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn- border" onclick="getPoster({{$poster->id}})"  data-toggle="modal" data-target="#exampleModal">
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
    <div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                               <img style="width: 500px;  margin: auto;display: flex;    object-position: top;
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
                                                <span><a href="" id="designerGet" class="">İpek Eldek</a></span></strong>
                                            </h2>
                                            <h2 class="title modal-sub-title"><strong> <!--Proje adı--->
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
    <script>
        jQuery(function($){
            //ANA SAYFA DEVAMINI OKU
            $('.devamyazi').on('click',function(){

                if($(this).hasClass('aktif')){
                    $('.caticerik').css({'height':'50px'});
                    $(this).removeClass('aktif');
                }else{
                    $('.caticerik').css({'height':'auto'});
                    $(this).addClass('aktif');
                }

            });
            //ANA SAYFA DEVAMINI OKU
        });
    </script>

@endsection
