<div class="responsive">
    <div class="container">
        @php
            $setting = \App\Setting::query()->get()->first();
        @endphp
        <div class="logo">
            <a href="index.html"><img src="{{ $setting->image_link }}" alt="logo"></a>
        </div>
        <div class="navbar">

            <div class="icon-bar" onclick="Show()">
                <i></i>
                <i></i>
                <i></i>
            </div>

            <ul id="nav-lists">
                <li class="close"><span onclick="Hide()">×</span></li>
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="servieses.html"></a>خدماتنا</li>
                <li><a href=""></a>الاعمال</li>
                <li><a href="about-as.htm"></a>من نحن</li>
                <li><a href="rating.html"></a>اراء العملاء</li>
                <li><a href="group-company.html"></a>مجموعة أفوكود</li>
                <li><a href="team.html"></a>فريق العمل</li>
                <li><a href="jopapp.html"></a>التوظيف</li>
                <li><a href="blog.html"></a>المدونة</li>
                <li><a href="privacy.html">سياسة الخصوصية</a></li>
                <li><a href="treams.html">الشروط والاحكام</a></li>
                <li><a href="contact.html"></a>اتصل بنا</li>
            </ul>

        </div>
    </div>
</div>

<header class="Navbar-Header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="{{$setting->image_link}}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class=" nav-link " href="{{ route('home') }}">الرئيسية <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('about_As.show') }}">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('group_company.show') }}">مجموعة أفوكود</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        خدماتنا
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @php
                            $services = \App\Service::all();
                        @endphp
                        @foreach($services as $service)
                            <a class="dropdown-item"
                               href="{{ route('serviceDetail.show', $service->id) }}">{{ $service->title }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('our_works.show') }}">أعمالنا</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('jopApp.show') }}">التوظيف</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('team.show') }}">فريق العمل</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('blog.show') }}">المدونة</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="{{ route('contact.index') }}">اتصل بنا</a>
                </li>
            </ul>
            <ul class="social-media">

                <a href="{{$setting->whatsApp_link}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                <a href="{{$setting->facebook_link}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="{{$setting->twitter_link}}"><i class="fab fa-twitter" aria-hidden="true"></i></a>

            </ul>
        </div>
    </nav>
    <a href="{{ route('contact.index') }}" class="btn btn-danger">اطلب تصميمك</a>

</header>
