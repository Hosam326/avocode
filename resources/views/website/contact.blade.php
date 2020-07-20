@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="contact">
            <div class="container">
                <div class="Titel">أتصل بنا</div>

                <div class="row">
                    <div class="col-lg-6 ">
                        <form id="form-contact" class="form-s" method="post" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">الأسم</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="name" class="form-control" id="name" form="form-contact"
                                           placeholder="ادخل الاسم">
                                </div>
                            </div>
                            <!--=====================-->
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">البريد الالكتروني</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="ادخل البريد الالكتروني">
                                </div>
                            </div>
                            <!--=================================-->
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">الجوال</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                           placeholder="ادخل رقم الجوال">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label class="col-lg-12" for="exampleFormControlTextarea1">رسالتك</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="ادخل رسالتك"
                                              rows="3"></textarea>
                                </div>
                            </div>
                            {{--                            <a value="ارسال" type="submit"  class="btn btn btn-success"></a>--}}
                            <button name="submit" type="submit" class="btn btn-primary">
                                ارسال
                            </button>

                        </form>
                        <!--=================================-->

                    </div>
                    <div class="col-lg-6 img-contact">
                        <img src="images/cont.jpg" alt="">
                    </div>
                </div>

            </div>
        </section>
        @if($advertising)
            <section class="ads" style="background-image: url({{$advertising->image_link}});">
                <div class="container">
                    <h1>{{$advertising->title}}</h1>
                    <p>{{$advertising->description}}</p>
                    <a type="button" class="btn btn-light" href="{{$advertising->link}}">دخول</a>
                </div>
            </section>
        @endif
    </main>
@endsection
