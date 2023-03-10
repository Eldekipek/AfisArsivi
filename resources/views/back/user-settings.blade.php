@extends('back.layouts.master')
@section('title','Profil Ayarları')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">

            <form action="{{route('user.settings.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ad Soyad</label>
                            <input type="text" name="name" required class="form-control" value="@if(isset($user_admin)&&!is_null($user_admin)) {{$user_admin->name}} @else {{$user->name}} @endif">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" value="@if(isset($user_admin)&&!is_null($user_admin)) @if($user_admin->website) {{$user_admin->website}} @else @endif @else @if($user->website) {{$user->website}} @else @endif @endif " name="website">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ülke</label><br>
                            <select name="country_id" id="country_id" required>
                                <option selected value="" >Seçiniz</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Profil Resmi</label>
                            <input type="file" class="form-control" value="@if(isset($user_admin)&&!is_null($user_admin)) @if($user_admin->image) {{$user_admin->image}} @else @endif @else @if($user->image) {{$user->image}} @else @endif @endif" name="image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Doğum Tarihi</label>
                            <input type="date" required value="@if(isset($user_admin)&&!is_null($user_admin)) @if(isset($user_admin->birthday)) {{$user_admin->birthday}} @else @endif @else @if($user->birthday) {{$user->birthday}} @else @endif @endif " class="form-control" name="birthday">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Özgeçmiş</label>
                    <textarea id="editor" name="contentt" class="form-control" rows="6" >@if(isset($user_admin)&&!is_null($user_admin)) @if(isset($user_admin->explanation)) {{$user_admin->explanation}} @else @endif @else @if($user->explanation) {{$user->explanation}} @else @endif @endif</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-md btn-success">Güncelle</button>
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
