@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="jopapp">
            <div class="container">
                <div class="Titel" >مجموعة أفوكود</div>
                <div class="card-titel-jopp row">

                    <div class="col-lg-6 p-jop">
                        <h1>{{ $group->title }}</h1>
                        <p>{{ $group->description }}</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ $group->image_link }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="group-company">
            <div class="container">
                <div class="row">
                    @foreach($groups as $item)
                    <div class="col-lg-6 col-md-6">
                        <div class="card-comapny row">
                            <div class="col-lg-3 col-md-3">
                                <img src="{{$item->image_link}}" alt="">
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <h1>{{$item->title2}}</h1>
                                <p>{{$item->description2}}</p>
                                <a href="User-Registar.html" type="button" class="btn btn-outline-success">عرض موقع</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @if($advertising)
        <section class="ads" style="margin-bottom: 0rem; background-image: url({{$advertising->image_link}});">
            <div class="container">
                <h1>{{$advertising->title}}</h1>
                <p>{{$advertising->description}}</p>
                <a type="button" class="btn btn-light" href="{{$advertising->link}}">دخول</a>
            </div>
        </section>
        @endif
    </main>
@endsection
