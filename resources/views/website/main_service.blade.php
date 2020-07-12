@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="servises-full">
            <div class="container">
                <a class="Titel">{{$service->title}}</a>

                <div class="row">
                    <div class="col-lg-6 col-md-6 serv-p">

                        <h1>{{$service->title}}</h1>
                        <p>
                            {{$service->description}}
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{$service->image_link}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="other-serv">

            <div class="container">
                <a class="Titel" href="http://">اكتشف خدماتنا</a>

                <div class="row">
                    @foreach($service->subService as $sub)
                        <div class="col-lg-3">
                            <a href="{{route('subService.show', $sub->id)}}" class="card-servs-all">
                                <div class="serv-img">
                                    <img src="{{$sub->image_link}}" alt="">
                                </div>
                                <div class="parg-sev">
                                    <h1>{{$sub->title}}</h1>
                                    <p>{{$sub->description}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="ads" style="">
            <div class="container">
                <h1>هل تخطط للدراسة في العطلة الصيفية؟</h1>
                <p>تأتي العطلة الصيفية بعد شهور طويلة من الجد والاجتهاد وبذل الجهد في المذاكرة والمراجعة،</p>
                <a type="button" class="btn btn-light">ابدأ الدرس الأول</a>

            </div>
        </section>
    </main>

@endsection
