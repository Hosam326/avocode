@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="contact">
            <div class="container">
                <a class="Titel" href="http://">أتصل بنا</a>

                <div class="row">
                    <div class="col-lg-6 ">
                        <form  id="form-contact" class="form-s " action="">
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">الأسم</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" form="form-contact" placeholder="ادخل الاسم">
                                </div>
                            </div>
                            <!--=====================-->
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">البريد الالكتروني</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="ادخل البريد الالكتروني">
                                </div>
                            </div>
                            <!--=================================-->
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">الجوال</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="ادخل رقم الجوال">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label class="col-lg-12" for="exampleFormControlTextarea1">رسالتك</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ادخل رسالتك" rows="3"></textarea>
                                </div>
                            </div>
                            <a href="User-Registar.html" type="button" class="btn btn-outline-success">ارسال</a>

                        </form>
                        <!--=================================-->

                    </div>
                    <div class="col-lg-6 img-contact">
                        <img  src="img/Contact/algedra_contact_us.jpg" alt="">
                    </div>
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
