@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Group_Company</a>
                <a href="#" class="current">edit Group</a></div>
            <h1>Group_Company</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>edit Group</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('group.update', $group->id) }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="control-group">
                                    <label class="control-label">title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title"
                                               value="{{$group->title}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">description</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"
                                        >{{$group->description}}</textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <img src="{{ $group->image_link }}" style="width: 100px" alt="">
                                        <br>
                                        <input type="file" name="image" id="image" placeholder="Image"
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">title2</label>
                                    <div class="controls">
                                        <input type="text" name="title2" id="title2"
                                               value="{{$group->title2}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">description2</label>
                                    <div class="controls">
                                        <textarea type="text" name="description2" id="description2"
                                        >{{$group->description2}}</textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Image2</label>
                                    <div class="controls">
                                        <img src="{{ $group->image_link }}" style="width: 100px" alt="">
                                        <br>
                                        <input type="file" name="image2" id="image2" placeholder="Image"
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Edit Group" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
