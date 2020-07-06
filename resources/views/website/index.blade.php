@extends('website.layouts.layout')

@section('main-content')
    <section class="SLIDER">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                @foreach($sliders as $key => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($sliders as $key => $item)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <div class="listslide">
                            <h1>{{ $item->title }}</h1>
                            <ul>
                                @foreach($item->tags as $tag)
                                    <a href="#" class="badge badge-info">{{ $tag->title }}</a>
                                @endforeach
                            </ul>
                        </div>
                        <img class="d-block w-100" src="{{ $item->image_link }}" alt="First slide">
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
    <!--==================  End slider ===============================-->

    <Section class="Servies-avo">
        <div class="container">
            <a class="Titel" href="http://">الخدمات</a>
            <div class="row">
                @foreach($services as $item)
                    <div class="col-lg-4">
                        <a href="{{ route('serviceDetail.show', $item->id) }}" class="card-Servies-avo">
                            <img src="{{ $item->image_link }}" alt="first">
                            <h1>{{ $item->title }}</h1>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </Section>
    <section class="Features">
        <div class="container">
            <a class="Titel" href="http://">بماذا نتميز</a>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card-Featuers-avo">
                        <div class="row">
                            @foreach($advantages as $item)
                            <h1 class="col-lg-8 col-md-6 col">{{$item->title}}</h1>
                            <img class="col-lg-4 col-md-6 col" src="{{$item->image_link}}" alt="first">
                        </div>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="how-to">
        <div class="container">
            <a class="Titel" href="http://">كيف تتطلب مشروعك</a>
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        @foreach($projectRequest as $item)
                            <li>
                                <h6>{{$item->title}}</h6>
                                <p class="">{{$item->description}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{$project_image->image_link}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="proti">

        <div class="container">

            <a class="detiel" href="">عرض المزيد</a>

            <a class="Titel">أعمالنا</a>
            <div class="row">
                @foreach($advantages as $item)
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="{{ route('businessDetail.show', $item->id) }}" class="over-lay-proti">
                            <span>{{$item->title}}</span>
                        </a>
                        <img src="{{$item->image_link}}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ads" style="background-image: url(img/bg.png);">
        <div class="container">
            <h1>هل تريد أن نساعدك بتصميم مشروعك؟ </h1>
            <p>تأتي العطلة الصيفية بعد شهور طويلة من الجد والاجتهاد وبذل الجهد في المذاكرة والمراجعة،</p>
            <a type="button" class="btn btn-light">اطلب تصميمك الان</a>

        </div>
    </section>


    <section class="blog">
        <div class="container">
            <div class="Titel">المدونة</div>

            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="card-blog">
                        <div class="blog-img">
                            <img src="img/img/bg-header.jpg" alt="">
                        </div>
                        <h1>عنوان الخبر</h1>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن</p>
                        <div class="row">
                            <span class="col-lg-6 col"><i class="fas fa-calendar-alt" aria-hidden="true"></i> 24/09/2019</span>
                            <a href="http://" class="col-lg-6 col">عرض المزيد</a>

                        </div>
                    </div>
                </div>
                <!--=====================================-->
                <div class="col-lg-3 col-md-4">
                    <div class="card-blog">
                        <div class="blog-img">
                            <img src="img/img/bg-header.jpg" alt="">
                        </div>
                        <h1>عنوان الخبر</h1>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن</p>
                        <div class="row">
                            <span class="col-lg-6 col"><i class="fas fa-calendar-alt" aria-hidden="true"></i> 24/09/2019</span>
                            <a href="http://" class="col-lg-6 col">عرض المزيد</a>

                        </div>
                    </div>
                </div>
                <!--=====================================-->

                <div class="col-lg-3 col-md-4">
                    <div class="card-blog">
                        <div class="blog-img">
                            <img src="img/img/bg-header.jpg" alt="">
                        </div>
                        <h1>عنوان الخبر</h1>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن</p>
                        <div class="row">
                            <span class="col-lg-6 col"><i class="fas fa-calendar-alt" aria-hidden="true"></i> 24/09/2019</span>
                            <a href="http://" class="col-lg-6 col">عرض المزيد</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card-blog">
                        <div class="blog-img">
                            <img src="img/img/bg-header.jpg" alt="">
                        </div>
                        <h1>عنوان الخبر</h1>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن</p>
                        <div class="row">
                            <span class="col-lg-6 col"><i class="fas fa-calendar-alt" aria-hidden="true"></i> 24/09/2019</span>
                            <a href="http://" class="col-lg-6 col">عرض المزيد</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
