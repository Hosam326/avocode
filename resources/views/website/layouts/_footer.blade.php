<footer>
    <div class="container">
        <div class="row">
            @php
                $setting = \App\Setting::query()->get()->first();
            @endphp
{{--            @dd($setting->image_link)--}}
            <div class="col-lg-3">
                <img class="logo" src="{{$setting->image_link}}" alt="">
                <p>{{$setting->description}}</p>
            </div>
            <div class="col-lg-3 R col ">
                <h1>روابط هامة</h1>
                <ul>
                    <li><a href="{{ route('trm.show') }}">الشروط والاحكام</a></li>
                    <li><a href="{{ route('privacy.show') }}">سياسة الخصوصية</a></li>
                    <li><a href="{{ route('group_company.show') }}">مجموعة الشركات</a></li>
                    <li><a href="{{ route('rating.show') }}">اراء العملاء</a></li>
                </ul>
            </div>
            <div class="col-lg-3 R col ">

                <h1>عنا</h1>
                <ul>
                    <li><a href="{{ route('jopApp.show') }}">طلب توظيف</a></li>
                    <li><a href="{{ route('about_As.show') }}">من نحن </a></li>
                    <li><a href="{{ route('blog.show') }}">المدونة</a></li>
                    <li><a href="{{ route('contact.index') }}">اتصل بنا</a></li>

                </ul>
            </div>
            <div class="col-lg-3">
                <h1>اتصل بنا</h1>
                <div class="contactte">
                    <a href=""><i class="fas fa-map-marker-alt"></i>{{$setting->address}}</a>
                    <a href=""><i class="fas fa-envelope"></i>{{$setting->email}}</a>
                    <a href=""><i class="fas fa-phone"></i>{{$setting->phone}}</a>

                </div>
            </div>
            <div class="full-footer row col-lg-12">
                <div class="col-lg-6 col-12">
                    <h5>جميع الحقوق محفوظة لدى شركة أفوكود © {{ \Carbon\Carbon::now()->year }}</h5>
                </div>
                <div class="col-lg-6 col-12">
                    <ul class="soical-footer">
                        <a href="{{$setting->youtube_link}}" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a href="{{$setting->snapchat_link}}" target="_blank"> <i class="fab fa-snapchat-ghost" aria-hidden="true"></i></a>
                        <a href="{{$setting->in_link}}" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                        <a href="{{$setting->inst_link}}" target="_blank"> <i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{$setting->twitter_link}}" target="_blank"> <i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{$setting->facebook_link}}" target="_blank"> <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('website/js/jquery.min.js')}}"></script>
<script src="{{asset('website/js/popper.min.js')}}"></script>
<script src="{{asset('website/js/vue.js')}}"></script>
<script src="{{asset('website/js/script-vue.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('website/js/script.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
