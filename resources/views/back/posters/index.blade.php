@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><strong>{{$posters->count()}} makale bulundu.</strong></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Poster Başlığı</th>
                        <th>Kategori</th>
                        <th>Baskı Tekniği</th>
                        <th>Ebat</th>
                        <th>Kullanıldığı Yer</th>
                        <th>Açıklama</th>
                        <th>Oluşturma Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posters as $poster)
                    <tr>
                        <td>
                            <img src="{{asset($poster->image)}}" width="200" alt="">
                        </td>
                        <td>{{$poster->title}}</td>
                        <td>Kategori</td>
                        <td>{{$poster->printing_technique}}</td>
                        <td>{{$poster->dimensions}}</td>
                        <td>{{$poster->country}}</td>
                        <td>{{$poster->explanation}}</td>
                        <td>{{$poster->created_at->diffForHumans()}}</td>
                        <td>
                            <input class="switch" article-id="{{$poster->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" @if($poster->status==1) checked @endif data-toggle="toggle">
                        <td>
                            <a href="{{route("poster.update.index", $poster->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="{{route("delete.poster", $poster->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>


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
