@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">View Member</a></div>
            <h1>Team</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                            <h5>View Member</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>job_name</th>
                                    <th>job_title</th>
                                    <th>image</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($team as $item)
                                    <tr class="odd gradeX">
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->job_name}}</td>
                                        <td>{{$item->job_title}}</td>
                                        <td style="width: 90px"><img src="{{asset('/images/'.$item->image)}}"></td>
                                        <td>
                                            <a href="{{ url('admin/team/'. $item->id . '/edit') }}" class="btn btn-xs btn-info">Edit</a>

                                            <form action="{{ url('admin/team/'. $item->id . '/delete') }}" method="post" style="display: inline;">
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
@endsection
