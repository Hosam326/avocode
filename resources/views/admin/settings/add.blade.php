@extends('layout')
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet"
      type="text/css"/>

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Settings</a>
                <a href="#" class="current">Add Settings</a></div>
            <h1>Settings</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add Settings</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ route('setting.store') }}"
                                  name="basic_validate" id="basic_validate" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="email" name="email" id="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" name="phone" id="phone" placeholder="phone" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" name="address" id="address" placeholder="address "
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Icon</label>
                                    <div class="controls">
                                        <input type="file" name="icon" id="icon" placeholder="Icon" class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">description</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">youtube_link</label>
                                    <div class="controls">
                                        <input type="text" name="youtube_link" id="youtube_link" placeholder="youtube_link "
                                               class="form-control here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">twitter_link</label>
                                    <div class="controls">
                                        <input type="text" name="twitter_link" id="twitter_link" placeholder="twitter_link ">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">inst_link</label>
                                    <div class="controls">
                                        <input type="text" name="inst_link" id="inst_link" placeholder="inst_link ">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">snapchat_link</label>
                                    <div class="controls">
                                        <input type="text" name="snapchat_link" id="snapchat_link" placeholder="snapchat_link ">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">facebook_link</label>
                                    <div class="controls">
                                        <input type="text" name="facebook_link" id="facebook_link" placeholder="facebook_link">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">in_link</label>
                                    <div class="controls">
                                        <input type="text" name="in_link" id="in_link" placeholder="in_link">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">whatsApp_link</label>
                                    <div class="controls">
                                        <input type="text" name="whatsApp_link" id="whatsApp_link" placeholder="whatsApp_link">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Add Settings" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{{--    <script type="text/javascript"--}}
{{--            src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>--}}

{{--    <script>--}}
{{--        var editor = new FroalaEditor('#description');--}}
{{--    </script>--}}
@endsection
