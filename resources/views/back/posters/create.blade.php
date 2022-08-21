@extends('back.layouts.master')
@section('title','Poster Oluştur')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-primary font-weight-bold">
            Poster Oluştur
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                       <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('poster.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tasarımcı Adı</label>
                       <!-- otomatik alinacak -->
                    <input type="text" name="user_id" class="form-control" required placeholder="otomatik doldurulacak">
                    <label for="">Poster Başlığı</label>
                    <input type="text" name="title" class="form-control" required>
                    <div class="form-group">
                        <label for="">Poster Kategorisi</label>
                        <select class="form-control" name="category">
                            <option value="">Seçim Yapınız</option>
                            <option value="2">Reklam</option>
                            <option value="3">Kültür</option>
                            <option value="4">Sosyal</option>

                        </select>
                    </div>
                    <label for="">Baskı Tekniği</label>
                    <input type="text" name="baski" class="form-control" required>
                    <label for="">Ebat</label>
                    <input type="text" name="ebat" class="form-control" required>
                    <label for="">Kullanıldığı Yer</label>
                    <input type="text" name="yer" class="form-control" required>
                    <label for="">Tarih</label>
                    <input type="date" name="tarih" class="form-control" required>
                </div>


                <div class="form-group">
                    <label for="">Poster Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Poster Tematik Bilgisi</label>
                    <textarea id="editor" name="contentt" class="form-control" rows="6"></textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Posteri Oluştur</button>
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
