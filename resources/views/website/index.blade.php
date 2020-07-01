@extends('website.layouts.layout')

@section('main-content')
    <section class="SLIDER">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
                <div class="col-lg-4">
                    <a href="" class="card-Servies-avo">
                        <img src="img/Servises/D-1.svg" alt="">
                        <h1>تصميم داخلي</h1>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="" class="card-Servies-avo">
                        <img src="img/Servises/D-2.svg" alt="">
                        <h1>تصميم معماري </h1>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="" class="card-Servies-avo">
                        <img src="img/Servises/D-3.svg" alt="">
                        <h1>تصميم حدائق</h1>
                    </a>
                </div>


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
                            <h1 class="col-lg-8 col-md-6 col">تفكر وإبداع</h1>
                            <img class="col-lg-4 col-md-6 col" src="img/Features/ic-s-1.svg" alt="">
                        </div>
                        <p>حيث نسعى الى الوصول لحلول فريدة من نوعها ومبتكرة حتى تلمّع وتُبرز تميز علامتك التجارية
                            وأعمالك وتجذب انتباه العملاء، فأساس نجاح العمل هو الفكرة.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-Featuers-avo">
                        <div class="row">
                            <h1 class="col-lg-8 col-md-6 col">فريق عمل محترف</h1>

                            <img class="col-lg-4 col-md-6 col" src="img/Features/ic-s-2.svg" alt="">
                        </div>
                        <p>كل يوم يتعلم فريق العمل شيئاً جديداً، ويحمل الشغف لإفادتك بخبراته ومهاراته، ففريق العمل
                            لدينا يعمل كوحدة واحدة في صالح انجاح العمل.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-Featuers-avo">

                        <div class="row">
                            <h1 class="col-lg-8 col-md-6 col">أسعار مناسبة</h1>

                            <img class="col-lg-4 col-md-6 col" src="img/Features/ic-s-3.svg" alt="">
                        </div>
                        <p>خدمات عالية الجودة صُمّمت في باقات متنوعة ومتعددة، وبأسعار مناسبة ومرنة حتى تناسب كافة
                            المؤسسات وجميع الشركات بمختلف أحجامها.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-Featuers-avo">

                        <div class="row">
                            <h1 class="col-lg-8 col-md-6 col">خدمة عملاء مستمرة</h1>

                            <img class="col-lg-4 col-md-6 col" src="img/Features/ic-s-4.svg" alt="">
                        </div>
                        <p>يستمتع فريق خدمة العملاء بقضاء الوقت في التحدث مع العملاء لحل مشكلاتهم على وجه السرعة للتأكد
                            من رضاهم التامّ عن الخدمة المقدمة.</p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-to">
        <div class="container">
            <a class="Titel" href="http://">كيف تتطلب مشروعك</a>

            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li>
                            <h6>تقديم الطلب</h6>
                            <p class="">
                                عـن طـريق الضغـط علـى ((اطلــب خدمتك)) وكتابـة كافـة تفاصيل مشروعكم.
                            </p>

                        </li>
                        <li>
                            <h6>تقديم الطلب</h6>
                            <p class="">
                                عـن طـريق الضغـط علـى ((اطلــب خدمتك)) وكتابـة كافـة تفاصيل مشروعكم.
                            </p>

                        </li>
                        <li>
                            <h6>تقديم الطلب</h6>
                            <p class="">
                                عـن طـريق الضغـط علـى ((اطلــب خدمتك)) وكتابـة كافـة تفاصيل مشروعكم.
                            </p>

                        </li>
                        <li>
                            <h6>تقديم الطلب</h6>
                            <p class="">
                                عـن طـريق الضغـط علـى ((اطلــب خدمتك)) وكتابـة كافـة تفاصيل مشروعكم.
                            </p>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="img/how-to.png" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="proti">

        <div class="container">

            <a class="detiel" href="">عرض المزيد</a>

            <a class="Titel" href="http://">أعمالنا</a>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="" class="over-lay-proti">
                            <span>هيا بنا نذهب ل تفاصيل العمل ☺</span>

                        </a>
                        <img src="img/protofile/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="" class="over-lay-proti">
                            <span>هيا بنا نذهب ل تفاصيل العمل ☺</span>
                        </a>
                        <img src="img/protofile/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="" class="over-lay-proti">
                            <span>هيا بنا نذهب ل تفاصيل العمل ☺</span>
                        </a>
                        <img src="img/protofile/3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="" class="over-lay-proti">
                            <span>هيا بنا نذهب ل تفاصيل العمل ☺</span>
                        </a>
                        <img src="img/protofile/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="" class="over-lay-proti">
                            <span>هيا بنا نذهب ل تفاصيل العمل ☺</span>
                        </a>
                        <img src="img/protofile/5.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-proti">
                        <a href="" class="over-lay-proti">
                            <span>هيا بنا نذهب ل تفاصيل العمل ☺</span>
                        </a>
                        <img src="img/img/work6.png" alt="">
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
            <a class="Titel" href="http://">المدونة</a>

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
