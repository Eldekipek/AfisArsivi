@extends("front.layout")
@section("content")
    <div class="container">
        <div class="about-title" style="display:flex;justify-content: space-between;margin:30px;border-bottom: 0.5px solid #0e0e0e;">
            <div class="advertisement-title ">
                <h2>Tasarımcılar</h2>
            </div>
            </div>
        <div class="designers-input m-5">
        <nav class="navbar navbar-light bg-light">

        </nav>
    </div>

        <div class="profile-list-item">
            <div class="list-row header-list" style="display: flex">
                <div class="col-12 col-md-6 list-item name" style="display: flex; gap: 20px;">
                    <button type="button" class="list-toggle" style="background-color: transparent; border:none;"><span class="sort-arrow">Profile</span></button>
                </div>
                <div class="col-12 col-md-2 list-item">
                    <button type="button" class="list-toggle" style="background-color: transparent; border:none;"><span class="sort-arrow">Country</span></button>
                </div>
                <div class="col-12 col-md-1 list-item">
                    <button type="button" class="list-toggle" style="background-color: transparent; border:none;"><span class="sort-arrow">Katılma Tarihi</span></button>
                </div>
                <div class="col-12 col-md-2 list-item">
                    <button type="button" class="list-toggle" style="background-color: transparent; border:none;"><span class="sort-arrow">Website</span></button>
                </div>
            </div>
        </div>

        @if(isset($designers)&&!is_null($designers))
            @foreach($designers as $designer)
        <article class="profile-list-item" style="    border-top: 1px solid #0e0e0e;  ">
            <div class="list-row">
                <a href="{{route('designer.profile',$designer->id)}}"  class="col-12 col-md-6 list-item name" style="display: flex;text-decoration: none;color:black">
                    <div class="profile-icon large">
                        <picture>
                            <img src="{{$designer->image}}" alt="">
                        </picture>
                    </div>
                    <h1 class="title">{{$designer->name}}</h1>
                </a>

                <div class="col-12 col-md-2 list-item info">
                    <h6>{{$designer->getCountry->name}}</h6>
                </div>

                <div class="col-12 col-md-1 list-item info">
                    <h6>{{$designer->created_at}}</h6>
                </div>
                <div class="col-12 col-md-2 list-item info common-links">
                    <h6><a href="{{$designer->website}}" target="_blank" rel="noopener">{{$designer->website}}</a>
                    </h6>
                </div>
            </div>
        </article>
            @endforeach
        @endif
    </div>
@endsection
