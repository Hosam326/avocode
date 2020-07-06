@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Slider</a>
                <a href="#" class="current">edit SubService</a></div>
            <h1>SubService</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>edit SubService</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post"
                                  action="{{ route('subService.update', $subService->id) }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="control-group">
                                    <label class="control-label">title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title"
                                               value="{{$subService->title}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">description</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"
                                        >{{$subService->description}}</textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <img src="{{ $subService->image_link }}" style="width: 100px" alt="">
                                        <br>
                                        <input type="file" name="image" id="image" placeholder="Image"
                                               class="form-control here">
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">services</label>
                                    <div class="controls">
                                        <select name="service_id" id="service_id" class="form-control here"
                                                required="required">
                                            @foreach($services as $service)
                                                @if($service->id == $subService->service_id)
                                                    <option value="{{ $service->id }}"
                                                            selected>{{ $service->title }}</option>
                                                @else
                                                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <input type="submit" value="Edit SubService" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
