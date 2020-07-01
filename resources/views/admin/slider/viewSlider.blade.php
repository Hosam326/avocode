@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">View Slider</a></div>
            <h1>Sliders</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                            <h5>View Slider </h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>image</th>
                                    <th>tags</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($slider as $item)
                                    <tr class="odd gradeX">
                                        <td>{{$item->title}}</td>
                                        <td style="width: 90px"><img src="{{asset('/images/'.$item->image)}}"></td>
                                        <td>
                                            @foreach(@$item->tags as $tag)
                                                {{ $tag->title }} /
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="/posts//edit" class="btn btn-xs btn-info">Edit</a>
                                            <form action="/posts/" method="post" style="display: inline;">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" clsass="btn btn-xs btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
