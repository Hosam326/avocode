@extends('website.layouts.layout')

@section('main-content')
    <main style="background-color: white;">

        <section class="artical-detials">
            <div class="row">
                <div class="over-lay-detials-header">
                    <h1>{{$blog->title}}</h1>
                    <div class="row">
                        <p>
                            <i class="far fa-calendar-alt"></i>{{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}
                        </p>
                        <h3><i class="far fa-eye"></i> 1500</h3>

                        <div class="star-header">
                            <!--================-->
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                        </div>
                    </div>
                    <ul class="soical-header-artical">

                        <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>

                    </ul>
                </div>
                <img src="{{ $blog->image_link }}" alt="">

            </div>
        </section>
        <section class="artical-detials-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h1>{{ $blog->description }}</h1>
                        <p>{{ $blog->description }}</p>
                        <img class="ads-det" src="img/ADS 1.png" alt="">
                        <div class="artical-a department">
                            <div class=" card-artical-a-parent">
                                <div style=" font-size: 20px !important;" class="a-parent"> مواضيع ذات علاقة</div>
                                <div class="row">
                                    @foreach($related_blogs as $blogD)
                                        <div class="col-lg-4 parent">
                                            <div class="card-artical-a department-card">
                                                <div class="card-overlay-artical-a card-overlay-department-a">
                                                    <span class="date-2">
                                                        <i class="far fa-calendar-alt"></i>
                                                        {{\Carbon\Carbon::parse($blogD->created_at)->format('d/m/Y')}}</span>
                                                </div>
                                                <img src="{{ $blogD->image_link }}" alt="">
                                                <h1><a href="">{{$blogD->title}}</a></h1>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 artical-a-col-lg">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>مواضيع شائعة</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-left-artical ">
                                    <img src="img/ola.png" alt="">
                                    <a href="detials.html"><h3>فن اختيار شريك الحياة</h3></a>
                                    <p>الحياة . كيف تستمع بالحياة . كيف تتخلى عن النمطية تعلم أن تحب الحياة . ابحث عما
                                        يُسعدك الحياة اللغز الذي نبحث عن مكانه، الحياة ذاك ...الشيء البعيد</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="ads" style="">
            <div class="container">
                <h1>هل تخطط للدراسة في العطلة الصيفية؟</h1>
                <p>تأتي العطلة الصيفية بعد شهور طويلة من الجد والاجتهاد وبذل الجهد في المذاكرة والمراجعة،</p>
                <a type="button" class="btn btn-light">اطلب تصميمك</a>
            </div>
        </section>
    </main>
@endsection
