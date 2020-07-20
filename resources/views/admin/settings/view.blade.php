@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">View Settings</a></div>
            <h1>Settings</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                            <h5>View Settings</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>icon</th>
                                    <th>description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($setting as $item)
                                    <tr class="odd gradeX">
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->address}}</td>
                                        <td style="width: 90px"><img src="{{asset('/images/'.$item->icon)}}"></td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('admin/settings/'. $item->id . '/edit') }}"
                                               class="btn btn-xs btn-info">Edit</a>

                                            <form action="{{ url('admin/settings/'. $item->id . '/delete') }}"
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
@endsection
