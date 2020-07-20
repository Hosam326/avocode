@extends('website.layouts.layout')

@section('main-content')
    <main>

        <section class="privacy">
            <div class="container">
{{--                @foreach($privacy as $item)--}}
                <ul>
                    <li>
                        <p>{!! $privacy->description !!}</p>
                    </li>
                </ul>
{{--                @endforeach--}}
            </div>
        </section>
    </main>
@endsection
