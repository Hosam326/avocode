@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="servises-full">
            <div class="container">
                <a class="Titel">{{ $subService->service->title }}</a>

                <div class="row">
                    <div class="col-lg-6 col-md-6 serv-p">
                        <h1>{{ $subService->title }}</h1>
                        <p>{{ $subService->description }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ $subService->image_link }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="other-serv">

            <div class="container">
                <a class="Titel" href="http://">اكتشف خدماتنا</a>

                <div class="row">
                    @foreach($related_subServices as $related)
                        <div class="col-lg-3">
                            <a href="ServisessD.html" class="card-servs-all">
                                <div class="serv-img">
                                    <img src="{{ $related->image_link }}" alt="">
                                </div>
                                <div class="parg-sev">
                                    <h1>{{ $related->title }}</h1>
                                    <p>{{ $related->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="ads" style="margin-bottom: 0rem; background-image: url(img/bg.png);">
            <div class="container">
                <h1>هل تخطط للدراسة في العطلة الصيفية؟</h1>
                <p>تأتي العطلة الصيفية بعد شهور طويلة من الجد والاجتهاد وبذل الجهد في المذاكرة والمراجعة،</p>
                <a type="button" class="btn btn-light">ابدأ الدرس الأول</a>

            </div>
        </section>
    </main>
@endsection
