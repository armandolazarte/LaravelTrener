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
        @if( Auth::user()->role->roleValue == 11111)
        <li class="xn-title">{!! trans('meni/meni.organizator') !!}</li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-users"></span> <span class="xn-text">{!! trans('meni/meni.uporabniki') !!}</span></a>
            <ul>
                <li><a href="{{ url('coach') }}"><span class="fa fa-file-text-o"></span>{!! trans('meni/meni.trenerji') !!}</span></a></li>
                <li><a href=""><span class="fa fa-list-alt"></span>{!! trans('meni/meni.ucenci') !!}</span></a></li>
                <li><a href=""><span class="fa fa-arrow-right"></span> {!! trans('meni/meni.uporabniki') !!}</a></li>
                <li><a href=""><span class="fa fa-text-width"></span> {!! trans('meni/meni.uporabniki') !!}</a></li>
                <li><a href=""><span class="fa fa-floppy-o"></span> {!! trans('meni/meni.uporabniki') !!}</a></li>
            </ul>
        </li>




        <li class="xn-openable">
            <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
            <ul>
                <li class="xn-openable">
                    <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                    <ul>
                        <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                        <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                        <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                        <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                    </ul>
                </li>
                <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a><div class="informer informer-danger">New!</div></li>
                <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
            <ul>
                <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
            <ul>
                <li><a href="charts-morris.html">Morris</a></li>
                <li><a href="charts-nvd3.html">NVD3</a></li>
                <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                <li><a href="charts-other.html">Other</a></li>
            </ul>
        </li>
        <li>
            <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
            <ul>
                <li class="xn-openable">
                    <a href="#">Second Level</a>
                    <ul>
                        <li class="xn-openable">
                            <a href="#">Third Level</a>
                            <ul>
                                <li class="xn-openable">
                                    <a href="#">Fourth Level</a>
                                    <ul>
                                        <li><a href="#">Fifth Level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        @endif
    </ul>
    <!-- END X-NAVIGATION -->
</div>