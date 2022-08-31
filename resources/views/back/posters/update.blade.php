@extends('back.layouts.master')
@section('title',$poster->title.' posterini güncelle')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-primary font-weight-bold">
            Poster Güncelle
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                       <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('poster.update' , $poster->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Poster Başlığı</label>
                    <input type="text" name="title" class="form-control" required value="{{$poster->title}}">
                    <div class="form-group">
                        <label for="">Poster Kategorisi</label>
                        <select class="form-control" name="category_id">
                            <option value="{{$poster->getCategory->id}}">{{$poster->getCategory->name}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="">Baskı Tekniği</label>
                    <input type="text" name="baski" class="form-control" required value="{{$poster->printing_technique}}">
                    <label for="">Ebat</label>
                    <input type="text" name="ebat" class="form-control" required value="{{$poster->dimensions}}">
                    <label for="">Kullanıldığı Yer</label>
                    <input type="text" name="yer" class="form-control" required value="{{$poster->country}}">
                    <label for="">Tarih</label>
                    <input type="date" name="tarih" class="form-control" required value="{{$poster->date}}">
                </div>
                <div class="form-group">
                    <label for="">Poster İçeriği</label>
                    <textarea id="editor" name="contentt" class="form-control" rows="6">{!! $poster->explanation !!} </textarea>
                </div>
                <div class="form-group">
                    <label for="">Poster Fotoğrafı</label><br>
                    <img src="{{asset($poster->image)}}" class="img-thumbnail rounded" width="300" alt="">
                    <input type="file" name="image" value="{{asset($poster->image)}}" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Poster Güncelle</button>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':300
                }
            );
        });
    </script>
@endsection
