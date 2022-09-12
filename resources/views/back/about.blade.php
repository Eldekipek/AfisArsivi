@extends("front.layout")
@section("content")

    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>{{$page->title}}</h2>
    </div>
    <div class="container">
        <div class="about-content">
            @if($page->content) {!! $page->content !!} @else
            @endif
        </div>
        <p><img class="mr-1" loading="lazy" class="alignnone size-medium wp-image-105" src="{{asset('images/hakkımızda1.jpeg')}}" alt="" width="424" height="283" >
            <img class="mr-1" loading="lazy" class="alignnone size-medium wp-image-102" src="{{asset('images/hakkımızda2.jpeg')}}" alt="" width="424" height="283">
            <img class="mr-1" loading="lazy" class="alignnone size-medium wp-image-104" src="{{asset('images/hakkımızda3.jpeg')}}" alt="" width="424" height="282"></p>
    </div>
@endsection
