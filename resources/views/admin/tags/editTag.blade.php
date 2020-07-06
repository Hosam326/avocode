@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Tags</a>
                <a href="#" class="current">edit Tag</a></div>
            <h1>Tags</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>edit Tag</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('tags.update', $tag->id) }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="control-group">
                                    <label class="control-label">title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title"
                                               value="{{$tag->title}}">
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <input type="submit" value="edit Tag" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
