@extends('layout')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
      type="text/css"/>

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Team</a>
                <a href="#" class="current">Edit Member</a></div>
            <h1>Team</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Edit Member</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('team.update', $team->id) }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name" value="{{$team->name}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">job_name</label>
                                    <div class="controls">
                                        <input type="text" name="job_name" id="job_name" value="{{$team->job_name}}"></input>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">job_title</label>
                                    <div class="controls">
                                        <input type="text" name="job_title" id="job_title" value="{{$team->job_title}}"></input>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <img src="{{ $team->image_link }}" style="width: 100px" alt="">
                                    <br>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" placeholder="Image "
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Member" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
