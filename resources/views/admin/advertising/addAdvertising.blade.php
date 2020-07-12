@extends('layout')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Advertising</a>
                <a href="#" class="current">Add Advertising</a></div>
            <h1>Advertising</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add Advertising</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('advertising.store') }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">description</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Link</label>
                                    <div class="controls">
                                        <input type="text" name="link" id="link" placeholder="Link "
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">page_id</label>
                                    <div class="controls">
                                        <select id="page_id" name="page_id" class="form-control">
                                            <option value="" selected>إختر الصفحة</option>
                                            <option value="1">الصفحة الرئيسية</option>
                                            <option value="2">مجموعة افوكود</option>
                                            <option value="3">من نحن</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" placeholder="Image "
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Advertising" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
