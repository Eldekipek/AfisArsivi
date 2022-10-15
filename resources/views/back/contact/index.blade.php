@extends('back.layouts.master')
@section('title','İletişim Sayfası')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-primary font-weight-bold">
            İletişim Sayfasını Düzenle
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('panel.contact.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Adres</label>
                    <input type="text" name="address" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="">Telefon Numarası</label>
                    <input type="tel" name="tel" value="" class="form-control" >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">İletişim Sayfasını Güncelle</button>
                </div>
            </form>
        </div>

    </div>
@endsection


