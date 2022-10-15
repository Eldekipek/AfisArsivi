@extends("front.layout")
@section("content")

    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>İletişim Bilgileri</h2>
    </div>
    <div class="container">
        <div class="contact-adress">
            @if($contact->address) {!! $contact->address !!} @else
            @endif
        </div>

        <div class="contact-email">
            @if($contact->email) {!! $contact->email !!} @else
            @endif
        </div>

        <div class="contact-tel">
            @if($contact->phone_number) {!! $contact->phone_number !!} @else
            @endif
        </div>
    </div>

@endsection
