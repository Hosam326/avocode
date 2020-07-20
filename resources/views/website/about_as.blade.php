@extends('website.layouts.layout')

@section('main-content')
    <main>
        @foreach($about as $i => $item)
            @if($i % 2 == 0)
                <section class="about-as-D">
                    <div class="container">
                        <div class="Titel">من نحن</div>
                        <div class="row">
                            <div class="col-lg-6 about-right">
                                <h1>{{$item->title}}</h1>
                                <p>{{$item->description}}</p>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{$item->image_link}}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section class="about-as-D">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{$item->image_link}}" alt="">
                            </div>
                            <div class="col-lg-6 about-right">
                                <h1>{{$item->title}}</h1>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
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
