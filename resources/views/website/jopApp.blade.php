@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="jopapp">
            <div class="container">
                <a class="Titel" href="http://">التوظيف</a>
                <div class="card-titel-jopp row">

                    <div class="col-lg-6 p-jop">
                        <h1>هل ترغب في العمل معنا؟</h1>
                        <p>
                            تسعى شركة أفوكود للتصميم الداخلي جاهدة لتحقيق النمو،ونبحث في الشركة دائماً وبشكل حثيث عن المواهب المبدعة من شتى أنحاء العالم حيث أننا نبذل جهودنا بأن نبقى على تواصل مع أولئك اللذين يثقون بأنفسهم لتحقيق أفضل الإنجازات الحقيقية.إذا كنت تؤمن بمقدرتك الإبداعية الخلاقة وخبراتك الكافية ومتحمساً لأن تعمل في أفضل شركات التصميم الداخلي المرموقة في دبي وتكون جزءاً منها وسوف نتصل بك.


                        </p>
                        <span>حظاً سعيداً في تحقيق التفوق في حياتك المهنية.</span>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/header/algedra_career.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="join-jop">
            <div class="container">
                <form class="row" action="">
                    <div class="col-lg-6">
                        <h1>بيانات شخصية</h1>
                        <div class="name-input">
                            <label for="demo">الاسم كامل</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل الاسم" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/Profile.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <div class="name-input">
                            <label for="demo">ادخل البريد الالكتروني</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل ادخل البريد الالكتروني" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/at.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="name-input">
                            <label for="demo">الجوال</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل الجوال" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <div class="name-input">
                            <label for="demo">تاريخ الميلاد</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل تاريخ الميلاد" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="name-input">
                            <label for="demo">العنوان</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل  العنوان" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">اختر الجنس</label>

                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>الجنس</option>
                                <option>ذكر</option>
                                <option>انثى</option>

                            </select>

                        </div>
                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">اختر الدرجة العلمية</label>

                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>بكالوريس</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1>بيانات التوظيف</h1>

                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">اختر المهنة</label>

                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>تدريب</option>
                                <option>ذكر</option>
                                <option>انثى</option>

                            </select>

                        </div>
                        <div class="name-input">
                            <label for="demo">المسمى الوظيفي</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل المسمى الوظيفي" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/at.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">حدد الدوام</label>

                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>كامل</option>
                                <option>ذكر</option>
                                <option>انثى</option>

                            </select>

                        </div>


                        <div class="name-input">
                            <label for="demo">الراتب المتوقع بالدولار</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل الراتب المتوقع" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="name-input">
                            <label for="demo">سنوات الخبرة</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل الراتب المتوقع" id="demo" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">حدثنا عن مهاراتك</label>
                            <textarea class="form-control" placeholder="أدخل مهاراتك" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="name-input">
                            <label for="demo">السيرة الذاتية</label>

                            <div class="input-group mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                    <label class="custom-file-label" for="inputGroupFile03">السيرة الذاتية</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="User-Registar.html" type="button" class="btn btn-outline-success">ارسال</a>
                </form>
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
