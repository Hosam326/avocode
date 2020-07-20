@extends('website.layouts.layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .rate-area {
        float: left;
        border-style: none;
    }

    .rate-area:not(:checked) > input {
        position: absolute;
        top: -9999px;
        clip: rect(0,0,0,0);
    }

    .rate-area:not(:checked) > label {
        float: right;
        width: 1em;
        padding: 0 .1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 400%;
        line-height: 1.2;
        color: lightgrey;
        text-shadow: 1px 1px #bbb;
    }

    .rate-area:not(:checked) > label:before { content: '★ '; }

    .rate-area > input:checked ~ label {
        color: gold;
        text-shadow: 1px 1px #c60;
        font-size: 450% !important;
    }

    .rate-area:not(:checked) > label:hover, .rate-area:not(:checked) > label:hover ~ label { color: gold; }

    .rate-area > input:checked + label:hover, .rate-area > input:checked + label:hover ~ label, .rate-area > input:checked ~ label:hover, .rate-area > input:checked ~ label:hover ~ label, .rate-area > label:hover ~ input:checked ~ label {
        color: gold;
        text-shadow: 1px 1px goldenrod;
    }

    .rate-area > label:active {
        position: relative;
        top: 2px;
        left: 2px;
    }
</style>

@section('main-content')
    <main style="background-color: white;">

        <section class="artical-detials">
            <div class="row">
                <div class="over-lay-detials-header">
                    <h1>{{$blog->title}}</h1>
                    <div class="row">
                        <p>
                            <i class="far fa-calendar-alt"></i>{{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}
                        </p>
                        <h3><i class="far fa-eye"></i>{{$blog->view_count}}</h3>

                        <div class="star-header">
                            <!--================-->
                            @php $rating = $blog_rate @endphp
                            @for($i = 0; $i < 5; ++$i)
                                <span class="{{ $rating<=$i ? 'far fa-star' : 'fas fa-star'}}" style="{{ $rating<=$i ? 'color: #A5A6AD' : 'color: #BCED4A'}}"></span>
                            @endfor
                            @php $rating--; @endphp

                        </div>
                    </div>
                    <ul class="soical-header-artical">

                        <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>

                    </ul>
                </div>
                <img src="{{ $blog->image_link }}" alt="">

            </div>
        </section>
        <section class="artical-detials-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <p>{!! $blog->description !!}</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            تقييم
                        </button>
                        <div class="artical-a department">
                            <div class=" card-artical-a-parent">
                                <div style=" font-size: 20px !important;" class="a-parent"> مواضيع ذات علاقة</div>
                                <div class="row">
                                    @foreach($related_blogs as $blogD)
                                        <div class="col-lg-4 parent">
                                            <div class="card-artical-a department-card">
                                                <div class="card-overlay-artical-a card-overlay-department-a">
                                                    <span class="date-2">
                                                        <i class="far fa-calendar-alt"></i>
                                                        {{\Carbon\Carbon::parse($blogD->created_at)->format('d/m/Y')}}</span>
                                                </div>
                                                <img src="{{ $blogD->image_link }}" alt="">
                                                <h1><a href="">{{$blogD->title}}</a></h1>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title fc-header-center">التقييم</h4>
                </div>

                <!-- Modal body -->
                <form action="{{ route('rating.store') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $blog->id }}" name="blog_id">
                    <div class="modal-body">
                        <label class="control-label">الرسالة</label>
                        <div class="controls">
                            <input type="text" name="message" id="message">
                        </div>
                    </div>
                    <ul class="rate-area">
                        <input type="radio" id="5-star" name="rate" value="5" /><label for="5-star" title="Amazing">5 stars</label>
                        <input type="radio" id="4-star" name="rate" value="4" /><label for="4-star" title="Good">4 stars</label>
                        <input type="radio" id="3-star" name="rate" value="3" /><label for="3-star" title="Average">3 stars</label>
                        <input type="radio" id="2-star" name="rate" value="2" /><label for="2-star" title="Not Good">2 stars</label>
                        <input type="radio" id="1-star" name="rate" value="1" /><label for="1-star" title="Bad">1 star</label>
                    </ul>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">إرسال</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
