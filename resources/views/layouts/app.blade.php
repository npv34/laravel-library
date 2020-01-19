<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap-extend.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('css/css/master_style.css') }}">

    <!-- Bankio admin skins -->
    <link rel="stylesheet" href="{{ asset('css/css/skins/_all-skins.css') }}">

    <!-- weather weather -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/weather-icons/weather-icons.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

    @include('layouts.cores.header')
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="treeview">
                    <a href="{{ route('home') }}">
                        <i class="ti-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-layout-grid2"></i>--}}
{{--                        <span>App</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/app-chat.html"><i class="fa fa-circle-thin"></i>Chat app</a></li>--}}
{{--                        <li><a href="pages/app-contact.html"><i class="fa fa-circle-thin"></i>Contact / Employee</a></li>--}}
{{--                        <li><a href="pages/app-calendar.html"><i class="fa fa-circle-thin"></i>Calendar</a></li>--}}
{{--                        <li><a href="pages/app-profile.html"><i class="fa fa-circle-thin"></i>Profile</a></li>--}}
{{--                        <li><a href="pages/app-userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="pages/mailbox.html">--}}
{{--                        <i class="ti-email"></i> <span>Mailbox</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <small class="label pull-right bg-warning">12</small>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-layers"></i> <span>Pages</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/page-blank.html"><i class="fa fa-circle-thin"></i>Blank</a></li>--}}
{{--                        <li><a href="pages/page-coming-soon.html"><i class="fa fa-circle-thin"></i>Coming Soon</a></li>--}}
{{--                        <li><a href="pages/page-faq.html"><i class="fa fa-circle-thin"></i>FAQ</a></li>--}}
{{--                        <li><a href="pages/page-gallery.html"><i class="fa fa-circle-thin"></i>Gallery</a></li>--}}
{{--                        <li><a href="pages/page-invoice.html"><i class="fa fa-circle-thin"></i>Invoice</a></li>--}}
{{--                        <li><a href="pages/page-pace.html"><i class="fa fa-circle-thin"></i>Pace</a></li>--}}
{{--                        <li><a href="pages/page-pricing.html"><i class="fa fa-circle-thin"></i>Pricing</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-palette"></i>--}}
{{--                        <span>UI Elements</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/ui-border-utilities.html"><i class="fa fa-circle-thin"></i>Border</a></li>--}}
{{--                        <li><a href="pages/ui-buttons.html"><i class="fa fa-circle-thin"></i>Buttons</a></li>--}}
{{--                        <li><a href="pages/ui-color-utilities.html"><i class="fa fa-circle-thin"></i>Color</a></li>--}}
{{--                        <li><a href="pages/ui-dropdown.html"><i class="fa fa-circle-thin"></i>Dropdown</a></li>--}}
{{--                        <li><a href="pages/ui-general.html"><i class="fa fa-circle-thin"></i>General</a></li>--}}
{{--                        <li><a href="pages/ui-icons.html"><i class="fa fa-circle-thin"></i>Icons</a></li>--}}
{{--                        <li><a href="pages/ui-media-advanced.html"><i class="fa fa-circle-thin"></i>Advanced Medias</a></li>--}}
{{--                        <li><a href="pages/ui-modals.html"><i class="fa fa-circle-thin"></i>Modals</a></li>--}}
{{--                        <li><a href="pages/ui-notification.html"><i class="fa fa-circle-thin"></i>Notification</a></li>--}}
{{--                        <li><a href="pages/ui-portlet-draggable.html"><i class="fa fa-circle-thin"></i>Draggable Portlets</a></li>--}}
{{--                        <li><a href="pages/ui-ribbons.html"><i class="fa fa-circle-thin"></i>Ribbons</a></li>--}}
{{--                        <li><a href="pages/ui-sliders.html"><i class="fa fa-circle-thin"></i>Sliders</a></li>--}}
{{--                        <li><a href="pages/ui-sweatalert.html"><i class="fa fa-circle-thin"></i>Sweet Alert</a></li>--}}
{{--                        <li><a href="pages/ui-tab.html"><i class="fa fa-circle-thin"></i>Tabs</a></li>--}}
{{--                        <li><a href="pages/ui-timeline.html"><i class="fa fa-circle-thin"></i>Timeline</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-comment-alt"></i>--}}
{{--                        <span>Widgets</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/widgets.html"><i class="fa fa-circle-thin"></i>Widgets</a></li>--}}
{{--                        <li><a href="pages/widgets-chart.html"><i class="fa fa-circle-thin"></i>Chart</a></li>--}}
{{--                        <li><a href="pages/widgets-statistic.html"><i class="fa fa-circle-thin"></i>Statistic</a></li>--}}
{{--                        <li><a href="pages/widgets-weather.html"><i class="fa fa-circle-thin"></i>Weather</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-layout-tab-window"></i>--}}
{{--                        <span>Box</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/box-advanced.html"><i class="fa fa-circle-thin"></i>Advanced</a></li>--}}
{{--                        <li><a href="pages/box-basic.html"><i class="fa fa-circle-thin"></i>Basic</a></li>--}}
{{--                        <li><a href="pages/box-color.html"><i class="fa fa-circle-thin"></i>Color</a></li>--}}
{{--                        <li><a href="pages/box-group.html"><i class="fa fa-circle-thin"></i>Group</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-stats-up"></i>--}}
{{--                        <span>Charts</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/chart-chartjs.html"><i class="fa fa-circle-thin"></i>ChartJS</a></li>--}}
{{--                        <li><a href="pages/chart-flot.html"><i class="fa fa-circle-thin"></i>Flot</a></li>--}}
{{--                        <li><a href="pages/chart-inline.html"><i class="fa fa-circle-thin"></i>Inline charts</a></li>--}}
{{--                        <li><a href="pages/chart-morris.html"><i class="fa fa-circle-thin"></i>Morris</a></li>--}}
{{--                        <li><a href="pages/chart-peity.html"><i class="fa fa-circle-thin"></i>Peity</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class=" ti-clipboard"></i> <span>Forms</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/forms-advanced.html"><i class="fa fa-circle-thin"></i>Advanced Elements</a></li>--}}
{{--                        <li><a href="pages/forms-code-editor.html"><i class="fa fa-circle-thin"></i>Code Editor</a></li>--}}
{{--                        <li><a href="pages/forms-editors.html"><i class="fa fa-circle-thin"></i>Editors</a></li>--}}
{{--                        <li><a href="pages/forms-validation.html"><i class="fa fa-circle-thin"></i>Form Validation</a></li>--}}
{{--                        <li><a href="pages/forms-wizard.html"><i class="fa fa-circle-thin"></i>Form Wizard</a></li>--}}
{{--                        <li><a href="pages/forms-general.html"><i class="fa fa-circle-thin"></i>General Elements</a></li>--}}
{{--                        <li><a href="pages/forms-mask.html"><i class="fa fa-circle-thin"></i>Formatter</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                @can('crud-users')
                <li class="treeview {{ (request()->is('admin/users*')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="ti-layout-cta-btn-left"></i> <span>Users</span>
                        <span class="pull-right-container">
                        <i class="fa fa-caret-down pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('users.index')}}"><i class="fa fa-circle-thin"></i>Users list</a></li>
                        <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-thin"></i>Add user</a></li>
                    </ul>
                </li>
               @endcan

                <li class="treeview {{ (request()->is('admin/libraries*')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="ti-layout-cta-btn-left"></i> <span>Libraries</span>
                        <span class="pull-right-container">
                        <i class="fa fa-caret-down pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('libraries.index')}}"><i class="fa fa-circle-thin"></i>Libraries list</a></li>
{{--                        <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-thin"></i>Add user</a></li>--}}
                    </ul>
                </li>


{{--                <li class="treeview">--}}
{{--                    <a href="#"><i class="ti-signal"></i> <span>Authentication</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--			  <i class="fa fa-caret-down pull-right"></i>--}}
{{--			</span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/auth-login.html"><i class="fa fa-circle"></i>Login</a></li>--}}
{{--                        <li><a href="pages/auth-register.html"><i class="fa fa-circle"></i>Register</a></li>--}}
{{--                        <li><a href="pages/auth-lockscreen.html"><i class="fa fa-circle"></i>Lockscreen</a></li>--}}
{{--                        <li><a href="pages/auth-user-pass.html"><i class="fa fa-circle"></i>Recover password</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#"><i class="ti-alert"></i> <span>Error Pages</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--			  <i class="fa fa-caret-down pull-right"></i>--}}
{{--			</span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/error-404.html"><i class="fa fa-circle"></i>404</a></li>--}}
{{--                        <li><a href="pages/error-500.html"><i class="fa fa-circle"></i>500</a></li>--}}
{{--                        <li><a href="pages/error-maintenance.html"><i class="fa fa-circle"></i>Maintenance</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-map-alt"></i> <span>Map</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/map-google.html"><i class="fa fa-circle-thin"></i>Google Map</a></li>--}}
{{--                        <li><a href="pages/map-vector.html"><i class="fa fa-circle-thin"></i>Vector Map</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-plug"></i> <span>Extension</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="pages/extension-fullscreen.html"><i class="fa fa-circle-thin"></i>Fullscreen</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="ti-layout-accordion-separated"></i> <span>Multilevel</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href="#">Level One</a></li>--}}
{{--                        <li class="treeview">--}}
{{--                            <a href="#">Level One--}}
{{--                                <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                            </a>--}}
{{--                            <ul class="treeview-menu">--}}
{{--                                <li><a href="#">Level Two</a></li>--}}
{{--                                <li class="treeview">--}}
{{--                                    <a href="#">Level Two--}}
{{--                                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-caret-down pull-right"></i>--}}
{{--            </span>--}}
{{--                                    </a>--}}
{{--                                    <ul class="treeview-menu">--}}
{{--                                        <li><a href="#">Level Three</a></li>--}}
{{--                                        <li><a href="#">Level Three</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">Level One</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--            </ul>--}}
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.cores.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active"><i class="fa fa-home"></i></a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                                <p>Will be July 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-warning"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                                <p>New Email : jhone_doe@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-info"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                                <p>disha@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-success"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Code Change</h4>

                                <p>Execution time 15 Days</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Web Design
                                <span class="label label-danger pull-right">40%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Data
                                <span class="label label-success pull-right">75%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Order Process
                                <span class="label label-warning pull-right">89%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Development
                                <span class="label label-primary pull-right">72%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="report_panel" class="chk-col-grey" >
                        <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                        <p>
                            general settings information
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                        <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="expose_author" class="chk-col-grey" >
                        <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                        <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                        <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                            Delete chat history
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>

    <!-- fullscreen -->
    <script src="{{ asset('assets/vendor_components/screenfull/screenfull.js') }}"></script>

    <!-- jQuery ui -->
    <script src="{{asset('assets/vendor_components/jquery-ui/jquery-ui.js')}}"></script>

    <!-- popper -->
    <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- FastClick -->
    <script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

    <!-- peity -->
    <script src="{{asset('assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>

    <!-- ChartJS -->
    <script src="{{ asset('assets/vendor_components/chart.js-master/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/chart.js-master/utils.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

    <!-- weather for demo purposes -->
    <script src="{{ asset('assets/vendor_plugins/weather-icons/WeatherIcon.js') }}"></script>

    <!-- Bankio admin App -->
    <script src="{{ asset('js/js/template.js') }}"></script>

    <!-- Bankio admin dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/js/pages/dashboard.js') }}"></script>


</body>
</html>
