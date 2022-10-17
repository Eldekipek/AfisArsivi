@extends("front.layout")
@section("content")

    <div class="about-title" style="margin:30px;border-bottom: 1px solid #0e0e0e;">
        <h2>İletişim Bilgileri</h2>
    </div>
    <section id="contact">

        <h1 class="section-header" style="color: black">Bizimle İletişime Geçin</h1>

        <div class="contact-wrapper">

            <!-- Left contact page -->



            <!-- Left contact page -->

            <div class="direct-contact-container">

                <ul class="contact-list">
                    <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">@if($contact->address) {!! $contact->address !!} @else
                                @endif</span></i></li>

                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call"> @if($contact->phone_number) {!! $contact->phone_number !!} @else
                                    @endif</a></span></i></li>

                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email"> @if($contact->email) {!! $contact->email !!} @else
                                    @endif</a></span></i></li>

                </ul>

                <hr>
                <ul class="social-media-list">
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa-brands fa-behance" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <hr>


            </div>

        </div>

    </section>


@endsection
@section('scripts')
    <script>
        document.querySelector('#contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            e.target.elements.name.value = '';
            e.target.elements.email.value = '';
            e.target.elements.message.value = '';
        });

    </script>
@endsection
