@extends('website.layouts.layout')

@section('main-content')
    <main>

        <section class="privacy">
            <div class="container">
                <ul>
                    <li>
                        <h3></h3>
                        <p>
                            {!! $term->description !!}
                        </p>
                    </li>


                </ul>
            </div>
        </section>
    </main>
@endsection
