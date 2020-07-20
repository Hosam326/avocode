@extends('website.layouts.layout')
@section('main-content')
    <main>
        <section class="servises-full">
            <div class="container">
                <a class="Titel" href="http://">{{ $business->service->title }}</a>
                <div class="row">
                    <div class="col-lg-6 col-md-6 serv-p">
                        <h1>{{$business->title}}</h1>
                        <p>{{$business->description}}</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{$first_image->image_link}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="other-serv">
            <div class="container">
                <div class="row">
                    @foreach($business->businessImages as $image)
                        @if($image->id == $first_image->id)

                        @else
                            <div class="col-lg-3">
                                <a href="ServisessD.html" class="card-servs-all">
                                    <div class="serv-img">
                                        <img src="{{$image->image_link}}" alt="">
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
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
