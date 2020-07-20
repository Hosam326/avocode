@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="jopapp">
            <div class="container">
                <div class="Titel" >التوظيف</div>
                <div class="card-titel-jopp row">
                    <div class="col-lg-6 p-jop">
                        <h1>{{$personal->title}}</h1>
                        <p>{{$personal->description}}</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{$personal->image_link}}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="join-jop">
            <div class="container">
                <form class="row" method="post" action="{{ route('jopAppStore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-6">
                        <h1>بيانات شخصية</h1>
                        <div class="name-input">
                            <label for="demo">الاسم كامل</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل الاسم" id="name" name="name">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/Profile.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <div class="name-input">
                            <label for="demo">ادخل البريد الالكتروني</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل ادخل البريد الالكتروني" id="email" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/at.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="name-input">
                            <label for="demo">الجوال</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل الجوال" id="phone" name="phone">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <div class="name-input">
                            <label for="demo">تاريخ الميلاد</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="أدخل تاريخ الميلاد" id="dob" name="dob">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="name-input">
                            <label for="demo">العنوان</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل  العنوان" id="address" name="address">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">اختر الجنس</label>

                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                <option>الجنس</option>
                                <option>ذكر</option>
                                <option>انثى</option>

                            </select>

                        </div>
                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">اختر الدرجة العلمية</label>

                            <select class="form-control" id="exampleFormControlSelect1" name="degree">
                                <option>توجيهي</option>
                                <option>دبلوم</option>
                                <option>بكالوريوس</option>
                                <option>ماجستير</option>
                                <option>دكتوراة</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1>بيانات التوظيف</h1>

                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">اختر المهنة</label>

                            <select class="form-control" id="exampleFormControlSelect1" name="job">
                                <option>تدريب</option>
                                <option>تدريب مدفوع</option>
                                <option>وظيفة رسمية</option>

                            </select>

                        </div>
                        <div class="name-input">
                            <label for="demo">المسمى الوظيفي</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="أدخل المسمى الوظيفي" id="jobTitle" name="jobTitle">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/at.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group menu ">
                            <label for="exampleFormControlSelect1">حدد الدوام</label>

                            <select class="form-control" id="exampleFormControlSelect1" name="jobTime">
                                <option>كامل</option>
                                <option>نصف دوام</option>
                                <option>دوام متقطع</option>

                            </select>

                        </div>


                        <div class="name-input">
                            <label for="demo">الراتب المتوقع بالدولار</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="أدخل الراتب المتوقع" id="salary" name="salary">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="name-input">
                            <label for="demo">سنوات الخبرة</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="سنوات الخبرة" id="yearsExperience" name="yearsExperience">
                                <div class="input-group-append">
                                    <span class="input-group-text"><img src="img/join/mobile-alt.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">حدثنا عن مهاراتك</label>
                            <textarea class="form-control" placeholder="أدخل مهاراتك" id="skills"  name="skills" rows="3"></textarea>
                        </div>
                        <div class="name-input">
                            <label for="demo">السيرة الذاتية</label>

                            <div class="input-group mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="cv" name="cv" aria-describedby="inputGroupFileAddon03">
                                    <label class="custom-file-label" for="inputGroupFile03">السيرة الذاتية</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary">
                        ارسال
                    </button>
                </form>
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
