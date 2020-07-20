<!DOCTYPE html>
<html lang="en">
<head>
    <title>AvoCode</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">

    <h1><a href="public\images\Logo@2x.png.">AvoCode</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">

        <li class="">
            <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt "></i>
                <span class="text">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                @csrf
                @method('POST')
            </form>
        </li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i>AvoCode</a>
    <ul>
        <li class="active"><a href="/layout"><i class="icon icon-home"></i> <span>AvoCode</span></a></li>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>slider</span></a></li>
        <ul>
            <li><a href="/admin/slider/viewSlider"><i class="icon icon-home"></i> <span>View Slider</span></a></li>
            <li><a href="/admin/slider/addSlider"><i class="icon icon-home"></i> <span>Add Slider</span></a></li>

        </ul>

        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Tag</span></a></li>
        <ul>
            <li><a href="/admin/tags/viewTag"><i class="icon icon-home"></i> <span>View Tag</span></a></li>
            <li><a href="/admin/tags/addTag"><i class="icon icon-home"></i> <span>Add Tag</span></a></li>

        </ul>

        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Services</span></a></li>
        <ul>
            <li><a href="/admin/service/viewService"><i class="icon icon-home"></i> <span>View Services</span></a></li>
            <li class=""><a href="/admin/service/addService"><i class="icon icon-home"></i> <span>add Service</span></a>
            </li>

        </ul>


        <li class="submenu"><a href="/admin/service/subService"><i class="icon icon-home"></i> <span>Sub_Services</span></a>
        </li>
        <ul>
            <li><a href="/admin/service/viewSubService"><i class="icon icon-home"></i> <span>View subService</span></a>
            </li>
            <li class=""><a href="/admin/service/subService"><i class="icon icon-home"></i> <span>add subService</span></a>
            </li>

        </ul>

        <li class="submenu"><a href="/admin/service/subService"><i class="icon icon-home"></i>
                <span>Advantages</span></a></li>
        <ul>
            <li><a href="/admin/advantage/viewAdvantage"><i class="icon icon-home"></i> <span>View Advantage</span></a>
            </li>
            <li class=""><a href="/admin/advantage/addAdvantage"><i class="icon icon-home"></i>
                    <span>add Advantage</span></a></li>

        </ul>
        <li class="submenu"><a href="/admin/service/subService"><i class="icon icon-home"></i>
                <span>project_request</span></a></li>
        <ul>
            <li class=""><a href="/admin/project_request/addProjectRequest"><i class="icon icon-home"></i> <span>add project_request</span></a>
            </li>
            <li><a href="/admin/project_request/viewProjectRequest"><i class="icon icon-home"></i> <span>View project_request</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Business</span></a></li>
        <ul>
            <li><a href="/admin/business/viewBusiness"><i class="icon icon-home"></i> <span>View Business</span></a>
            </li>
            <li class=""><a href="/admin/business/addBusiness"><i class="icon icon-home"></i> <span>add Business</span></a>
            </li>
            <li class=""><a href="/admin/business/photo/addBusinessPhoto"><i class="icon icon-home"></i> <span>add BusinessPhoto</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Advertising</span></a></li>
        <ul>
            <li><a href="/admin/advertising/viewAdvertising"><i class="icon icon-home"></i>
                    <span>View Advertising</span></a>
            </li>
            <li class=""><a href="/admin/advertising/addAdvertising"><i class="icon icon-home"></i> <span>add Advertising</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Blog</span></a></li>
        <ul>
            <li><a href="/admin/blog/viewBlog"><i class="icon icon-home"></i>
                    <span>View Blog</span></a>
            </li>
            <li class=""><a href="/admin/blog/addBlog"><i class="icon icon-home"></i> <span>add Blog</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>About</span></a></li>
        <ul>
            <li><a href="/admin/about/viewAbout"><i class="icon icon-home"></i>
                    <span>View About</span></a>
            </li>
            <li class=""><a href="/admin/about/about"><i class="icon icon-home"></i> <span>add About</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>rating</span></a></li>
        <ul>
            <li><a href="/admin/rating/viewRating"><i class="icon icon-home"></i>
                    <span>View rating</span></a>
            </li>
            <li class=""><a href="/admin/rating/rating"><i class="icon icon-home"></i> <span>add rating</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Team</span></a></li>
        <ul>
            <li><a href="/admin/team/viewMember"><i class="icon icon-home"></i>
                    <span>View Member</span></a>
            </li>
            <li class=""><a href="/admin/team/addMember"><i class="icon icon-home"></i> <span>add Member</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Personal_Data</span></a></li>
        <ul>
            <li><a href="/admin/personal/viewPersonal"><i class="icon icon-home"></i>
                    <span>View Data</span></a>
            </li>
            <li class=""><a href="/admin/personal/personal"><i class="icon icon-home"></i> <span>add Data</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Group company</span></a></li>
        <ul>
            <li><a href="/admin/groupComp/viewGroup"><i class="icon icon-home"></i>
                    <span>View</span></a>
            </li>
            <li class=""><a href="/admin/groupComp/group"><i class="icon icon-home"></i> <span>add</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>Settings Footer</span></a></li>
        <ul>
            <li><a href="/admin/settings/view"><i class="icon icon-home"></i>
                    <span>View</span></a>
            </li>
            <li class=""><a href="/admin/settings/add"><i class="icon icon-home"></i> <span>add</span></a>
            </li>
        </ul>
        <li class="submenu"><a href=""><i class="icon icon-home"></i> <span>PrivacyTrm</span></a></li>
        <ul>
            <li><a href="/admin/privacyTrm/view"><i class="icon icon-home"></i>
                    <span>View</span></a>
            </li>
            <li class=""><a href="/admin/privacyTrm/add"><i class="icon icon-home"></i> <span>add</span></a>
            </li>
        </ul>
    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content" style="width: 100%; margin: auto; background-color: #2E363F">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="layout.blade.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>AvoCode</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <!--End-Action boxes-->

        <!--End-Chart-box-->
        <hr/>
        <div class="row-fluid">
            @yield('content')
        </div>
    </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a>
    </div>
</div>

<!--end-Footer-part-->

<script src="{{asset('js/backend_js/excanvas.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.flot.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.dashboard.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.interface.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.chat.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.validate.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.wizard.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/backend_js/select2.min.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.popover.js')}}"></script>
<script src="{{asset('js/backend_js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/backend_js/matrix.tables.js')}}"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>
