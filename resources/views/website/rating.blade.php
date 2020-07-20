@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="rating-D">
            <div class="container">
                <div class="Titel">آراء العملاء</div>
                @foreach($rating as $item)
                <div class="card-rating-D row">
                    <div class="col-lg-3 col-md-3 ">
                        <img src="{{$item->image_link}}" alt="">
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="row">
                            <h1 class="col-lg-6 col-md-6 col-6">{{$item->title}}</h1>
                            <span class="col-lg-6 col"><i class="fas fa-calendar-alt" aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</span>
                        </div>
                    <p>{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
                <div class="center">
                    <div class="pagination">
                        {{ $rating->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
