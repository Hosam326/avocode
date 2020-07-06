@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Service</a>
                <a href="#" class="current">Add BusinessPhoto</a></div>
            <h1>BusinessPhoto</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add BusinessPhoto</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('businessPhoto.store') }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" placeholder="Image "
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">work_id</label>
                                    <div class="controls">
                                        <select name="work_id" id="work_id" class="form-control here"
                                                required="required">
                                            <option value="" selected>Choose work ...</option>
{{--                                            @foreach($businessphoto as $service)--}}
{{--                                                <option value="{{$service->id}}">{{$service->title}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add BusinessPhoto" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
