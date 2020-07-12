@extends('website.layouts.layout')
@section('main-content')
    <main>
        <section class="servises-full">
            <div class="container">
                <a class="Titel" href="http://">{{ $business->service->title }}</a>
                <div class="row">
                    <div class="col-lg-6 col-md-6 serv-p">
                        <h1>{{$business->title}}</h1>
                        <p>{{$business->description}}</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{$first_image->image_link}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="other-serv">
            <div class="container">
                <div class="row">
                    @foreach($business->businessImages as $image)
                        @if($image->id == $first_image->id)

                        @else
                            <div class="col-lg-3">
                                <a href="ServisessD.html" class="card-servs-all">
                                    <div class="serv-img">
                                        <img src="{{$image->image_link}}" alt="">
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section class="ads" style="margin-bottom:0rem;">
            <div class="container">
                <h1>هل تخطط للدراسة في العطلة الصيفية؟</h1>
                <p>تأتي العطلة الصيفية بعد شهور طويلة من الجد والاجتهاد وبذل الجهد في المذاكرة والمراجعة،</p>
                <a type="button" class="btn btn-light">ابدأ الدرس الأول</a>

            </div>
        </section>
    </main>
@endsection
