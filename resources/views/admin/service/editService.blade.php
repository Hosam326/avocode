@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Slider</a>
                <a href="#" class="current">edit Service</a></div>
            <h1>Services</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>edit Service</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('service.update', $service->id) }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="control-group">
                                    <label class="control-label">title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title"
                                               value="{{$service->title}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">description</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"
                                        >{{$service->description}}</textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <img src="{{ $service->image_link }}" style="width: 100px" alt="">
                                        <br>
                                        <input type="file" name="image" id="image" placeholder="Image"
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Icon</label>
                                    <div class="controls">
                                        <img src="{{ $service->icon_link }}" style="width: 100px" alt="">
                                        <br>
                                        <input type="file" name="icon" id="icon" placeholder="Icon"
                                               class="form-control here">
                                    </div>
                                </div>





                                <div class="form-actions">
                                    <input type="submit" value="Edit Service" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
