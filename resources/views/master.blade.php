<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-TRENER</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" id="theme" href="{{ URL::asset('assets/css/theme-default.css') }}" />
    @yield('css_file')
</head>
<body>
<div class="page-container">
    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="{!! url('/') !!}">E-TRENER</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            @if(Auth::check())
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        {!! Html::image('assets/assets/images/users/avatar.jpg') !!}
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            {!! Html::image('assets/assets/images/users/avatar.jpg') !!}
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">{!!  Auth::user()->name !!} {!!  Auth::user()->surname !!}</div>
                            <div class="profile-data-title">{!! Auth::user()->role->roleName !!}</div>
                        </div>
                        <div class="profile-controls">
                            <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                            <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
            @endif
            <li class="xn-title">{!! trans('meni/meni.navigation') !!}</li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboards</span></a>
                <ul>
                    <li class="active"><a href="index.html"><span class="xn-text">Dashboard 1</span></a></li>
                    <li><a href="dashboard.html"><span class="xn-text">Dashboard 2</span></a><div class="informer informer-danger">New!</div></li>
                    <li><a href="dashboard-dark.html"><span class="xn-text">Dashboard 3</span></a><div class="informer informer-danger">New!</div></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>

            </li>
            @if( Auth::user()->role->roleValue >= 11110)
                <li class="xn-title">{!! trans('meni/meni.organizator') !!}</li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">{!! trans('meni/meni.uporabniki') !!}</span></a>
                    <ul>
                        <li><a href=""><span class="fa fa-file-text-o"></span>{!! trans('meni/meni.administrator') !!}</span></a></li>
                        <li><a href="{{ url('coach') }}"><span class="fa fa-file-text-o"></span>{!! trans('meni/meni.trenerji') !!}</span></a></li>
                        <li><a href="{{ url('ucenec') }}"><span class="fa fa-list-alt"></span>{!! trans('meni/meni.ucenci') !!}</span></a></li>
                        <li><a href=""><span class="fa fa-arrow-right"></span> {!! trans('meni/meni.uporabniki') !!}</a></li>
                        <li><a href=""><span class="fa fa-text-width"></span> {!! trans('meni/meni.uporabniki') !!}</a></li>
                        <li><a href=""><span class="fa fa-floppy-o"></span> {!! trans('meni/meni.uporabniki') !!}</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">{!! trans('meni/selekcije.sifranti') !!}</span></a>
                    <ul>
                        <li><a href="{{ url('selekcije') }}"><span class="fa fa-file-text-o"></span> {!! trans('meni/selekcije.selekcije') !!}</a></li>
                        <li><a href="{{ url('tekociracun') }}"><span class="fa fa-list-alt"></span> {!! trans('meni/meni.tekoci-racun') !!}</a></li>
                        <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                        <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                        <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                    </ul>
                </li>
            @endif
            @if( Auth::user()->role->roleValue >= 11111)
                <li class="xn-title">{!! trans('meni/meni.administratorAll') !!}</li>
                <li class="xn-openable">
                    <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                    <ul>
                        <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                        <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                        <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                    </ul>
                </li>
            @endif
        </ul>
        <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START X-NAVIGATION VERTICAL -->
        @include('include.topnav')
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- START BREADCRUMB -->

        @yield('meniSredina')
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                @include('flash::message')
                </div>
            </div>
            <!-- START WIDGETS -->
            @yield('content')
            <!-- END DASHBOARD CHART -->

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span>{!! trans('login/login.loginApp') !!}</div>
            <div class="mb-content">
                <p>{!! trans('login/login.confirmLOginTrue') !!}</p>
                <p>{!! trans('login/login.confirmLOginTFalse') !!}</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{!! url('logout') !!}" class="btn btn-success btn-lg">{!! trans('login/login.yes') !!}</a>
                    <button class="btn btn-default btn-lg mb-control-close">{!! trans('login/login.no') !!}</button>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('footer')
@include('include.script')
</body>
</html>






