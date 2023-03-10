@extends('back.layouts.master')
@section('title','Ayarlar')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">

                <form action="{{route('config.update')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" name="twitter" value="@if(isset($config->twitter)) {{$config->twitter}} @else https://twitter.com/ @endif">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" name="instagram" value="@if(isset($config->instagram)) {{$config->instagram}} @else https://www.instagram.com/ @endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="@if(isset($config->facebook)) {{$config->facebook}} @else https://tr-tr.facebook.com/ @endif">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control" name="linkedin" value="@if(isset($config->linkedin)) {{$config->linkedin}} @else https://www.linkedin.com/ @endif">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-md btn-success">G??ncelle</button>
                    </div>
                </form>

        </div>
    </div>
@endsection
