@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">View Project_Request</a></div>
            <h1>Project_Request</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                            <h5>View Project_Request </h5>
                            <a  href="{{ route('projectRequest.create_image') }}" class="btn btn-success">Add Image</a>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projectRequest as $item)
                                    <tr class="odd gradeX">
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <a href="{{ url('admin/project_request/'. $item->id . '/edit') }}"
                                               class="btn btn-xs btn-info">Edit</a>
                                            <form action="{{ url('admin/project_request/'. $item->id . '/delete') }}"
                                                  method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
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

    <div id="content">
        <div id="content-header">
            <h1>Project_Request Image</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Image</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                                @foreach($projectRequest as $item)--}}
                                @if($project_image == null)

                                @else
                                    <tr class="odd gradeX">
                                        <td><img src="{{$project_image->image_link}}" style="width: 100px"></td>
                                        {{--                                        <td>{{$item->description}}</td>--}}
                                        <td>
                                            <a href="{{ url('admin/project_request/'. $item->id . '/edit') }}"
                                               class="btn btn-xs btn-info">Edit</a>
                                            <form action="{{ url('admin/project_request/'. $item->id . '/delete') }}"
                                                  method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                {{--                                @endforeach--}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
