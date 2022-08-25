@extends('back.layouts.master')
@section('title','Tüm Afişler')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><strong>{{$posters->count()}} afiş bulundu.</strong></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Oluşturan</th>
                        <th>Afiş Başlığı</th>
                        <th>Kategori</th>
                        <th>Baskı Tekniği</th>
                        <th>Ebat</th>
                        <th>Kullanıldığı Yer</th>
                        <th>Oluşturma Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posters as $poster)
                    <tr>
                        <td>
                            <img src="{{asset($poster->image)}}" width="200" alt="">
                        </td>
                        <td>{{$poster->getUser->name}}</td>
                        <td>{{$poster->title}}</td>
                        <td>{{$poster->getCategory->name}}</td>
                        <td>{{$poster->printing_technique}}</td>
                        <td>{{$poster->dimensions}}</td>
                        <td>{{$poster->country}}</td>
                        <td>{{$poster->created_at->diffForHumans()}}</td>
                        <td>

                            <a href="{{route("poster.update.index", $poster->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="{{route("delete.poster", $poster->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>


                        </td>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.switch').change(function () {
                id = $(this)[0].getAttribute('article-id');
                statu = $(this).prop('checked');
                $.get("#", {id:id,statu:statu}, function (data, status){});
            })
        })
    </script>
@endsection
