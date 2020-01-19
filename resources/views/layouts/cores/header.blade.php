<header class="main-header">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
            <span class="light-logo"><img src="{{ asset('templates/images/logo-light.png') }}" alt="logo"></span>
            <span class="dark-logo"><img src="{{ asset('templates/images/logo-dark.png') }}" alt="logo"></span>
        </b>
        <!-- logo-->
        <span class="logo-lg">
		  <img src="{{ asset('templates/images/logo-light-text.png') }}" alt="logo" class="light-logo">
	  	  <img src="{{asset('templates/images/logo-dark-text.png')}}" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="ml-10 app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="nav-link rounded" data-provide="fullscreen" title="Full Screen">
                        <i class="mdi mdi-crop-free"></i>
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="#" class="nav-link rounded" data-toggle="dropdown" aria-expanded="false">
                        <i class="nav-link-icon mdi mdi-view-dashboard text-white mx-5"> </i>
                        Mega Menu
                        <i class="fa fa-angle-down ml-2"></i>
                    </a>
                    <div class="dropdown-menu dropdown-grid">
                        <div class="dropdown-mega-menu">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">
                                            Overview
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="nav-link-icon fa fa-inbox">
                                                </i>
                                                <span>
												Contacts
											</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="nav-link-icon fa fa-book">
                                                </i>
                                                <span>
												Incidents
											</span>
                                                <div class="ml-auto badge badge-pill badge-danger">5
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="nav-link-icon fa fa-picture-o">
                                                </i>
                                                <span>
												Companies
											</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link disabled">
                                                <i class="nav-link-icon fa fa-dashboard">
                                                </i>
                                                <span>
												Dashboards
											</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-12 bx-1">
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">
                                            Favourites
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Reports Conversions
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Quick Start
                                                <div class="ml-auto badge badge-success">New</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Users &amp; Groups</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Proprieties</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">
                                            Sales & Marketing
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Queues
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Resource Groups
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Goal Metrics
                                                <div class="ml-auto badge badge-warning">3
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Campaigns
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="btn-group nav-item">
                    <a href="#" class="nav-link rounded" data-toggle="dropdown" aria-expanded="false">
                        <span class="badge badge-pill badge-danger ml-0 mr-2">4</span>
                        Settings
                        <i class="fa fa-angle-down ml-2"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-header-inner bg-img" style="background-image: url('../images/gallery/landscape1.jpg');" data-overlay="5">
                            <div class="px-10 py-20 w-250 text-center">
                                <h5 class="text-white">Overview</h5>
                                <h6 class="text-white mb-0">Dropdown menus for everyone</h6>
                            </div>
                        </div>
                        <div>
                            <h4 class="dropdown-header py-15 text-gray font-size-18">Key Figures</h4>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Service Calendar</button>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Knowledge Base</button>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Accounts</button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Products</button>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Rollup Queries</button>
                        </div>
                        <ul class="nav flex-column p-20">
                            <li class="nav-item-divider nav-item"></li>
                            <li class="nav-item-btn nav-item">
                                <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" aria-haspopup="true"  data-toggle="dropdown" class="nav-link rounded" aria-expanded="false">
                        <i class="nav-link-icon fa fa-cogs mx-5 text-white"></i>
                        Projects
                        <i class="fa fa-angle-down ml-2"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-header-inner bg-img" style="background-image: url('../images/gallery/landscape1.jpg');" data-overlay="5">
                            <div class="p-30 text-left w-250">
                                <h5 class="text-white">Overview</h5>
                                <h6 class="text-white">Unlimited options</h6>
                                <div class="menu-header-btn-pane">
                                    <button class="mr-2 btn btn-success btn-sm">Settings</button>
                                    <button class="btn-icon btn-icon-only btn btn-info btn-sm">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-10">
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Graphic Design</button>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left"><i class="fa fa-folder mr-10"> </i>App Development</button>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Icon Design</button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Miscellaneous</button>
                            <button type="button" class="btn btn-flat btn-light w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Frontend Dev</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="search-box">
                    <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search" style="display: none;">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a class="control-btn" href="#" data-toggle="control-sidebar"><i class="ti-settings"></i></a>
                </li>
                <!-- Messages -->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-email"></i><span class="label label-success">5</span>
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <li class="header">You have 5 messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu inner-content-div">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{ asset('templates/images/user2-160x160.jpg') }}" class="rounded-circle">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Lorem Ipsum
                                                <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                            </h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Nullam tempor
                                                <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                            </h4>
                                            <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Proin venenatis
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{ asset('templates/images/user3-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Praesent suscipit
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{ asset('templates/images/user4-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Donec tempor
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See all e-Mails</a></li>
                    </ul>
                </li>
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('templates/images/user5-128x128.jpg') }}" class="user-image rounded-circle b-2" alt="User Image">
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <!-- Menu Body -->
                        <li class="user-body bt-0">
                            <div class="row no-gutters">
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ti-settings"></i> Account</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
