@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="team-decoration">
            <div class="container">
                <a class="Titel" href="http://">فريق عمل أفوكود </a>
                <div class="row">
                    @foreach($team as $item)
                    <div class="col-lg-3">
                        <div class="over-lay-team">
                            <h1>{{$item->job_name}}</h1>
                            <h2>{{$item->name}}</h2>
                            <h3>{{$item->job_title}}</h3>
                        </div>
                        <img src="{{$item->image_link}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </section >
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
