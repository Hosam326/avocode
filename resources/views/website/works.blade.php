@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="works">
            <div class="container">
                <div class="Titel">معرض الاعمال</div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach($services as $key => $service)
                        <li class="nav-item @if($key == 0) active @endif">
                            <a class="nav-link" id="pills-{{$service->id}}-tab" data-toggle="pill"
                               href="#pills-{{$service->id}}" role="tab" aria-controls="pills-home"
                               aria-selected="true">{{ $service->title }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    @foreach($services as $service)
                        <div class="tab-pane fade show active" id="pills-{{$service->id}}" role="tabpanel"
                             aria-labelledby="pills-{{$service->id}}-tab">
                            <div class="works-taps">
                                <div class="row">
                                    @foreach($service->business as $business_item)
                                        <a href="{{ route('businessDetail.show', $business_item) }}"><img src="{{ @$business_item->businessImages->first()->image_link }}" alt=""></a>
                                    @endforeach
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
