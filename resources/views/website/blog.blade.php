@extends('website.layouts.layout')

@section('main-content')
    <main>
        <section class="blog" style="padding-top: 3rem;">
            <div class="container">
                <div class="Titel">المدونة</div>
                <div class="row">
                    @foreach($blog as $item)
                    <div class="col-lg-3 col-md-4">
                        <div class="card-blog">
                            <div class="blog-img">
                                <img src="{{$item->image_link}}" alt="">
                            </div>
                            <h1>{{$item->title}}</h1>
                            <p>{!! $item->description !!}</p>
                            <div class="row">
                                <span class="col-lg-6 col"><i class="fas fa-calendar-alt" aria-hidden="true">

                                    </i>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</span>
                                <a href="{{ route('blog.index', $item->id) }}" class="col-lg-6 col">عرض المزيد</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="center">
                    <div class="pagination ">
                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
