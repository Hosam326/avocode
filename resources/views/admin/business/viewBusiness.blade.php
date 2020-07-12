@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">View Business</a></div>
            <h1>Business</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                            <h5>View Business</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>image</th>
                                    <th>type</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($business as $item)
                                    <tr class="odd gradeX">
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->description}}</td>
                                        <td style="width: 90px"><img src="{{asset('/images/'.$item->image)}}"></td>
                                        <td>
                                            {{@$item->service->title}}
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/business/'. $item->id . '/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                            <form action="{{ url('admin/business/'. $item->id . '/delete') }}" method="post" style="display: inline;">
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
