<!doctype html>
<html lang="en">

    <head>
        <title>:: Lucid :: Home</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
        <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css')}}">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" href="{{ asset('css/color_skins.css')}}">
    </head>
    <body class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{ asset('images/logo-icon.svg')}}" width="48" height="48" alt="Lucid"></div>
                <p>Please wait...</p>        
            </div>
        </div>
        <!-- Overlay For Sidebars -->

        <div id="wrapper">

            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>

                    <div class="navbar-brand">
                        <a href="index.html"><img src="{{ asset('images/logo.svg')}}" alt="Lucid Logo" class="img-responsive logo"></a>                
                    </div>

                    <div class="navbar-right">
                        <form id="navbar-search" class="navbar-form search-form">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        </form>                

                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="file-dashboard.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-folder-open-o"></i></a>
                                </li>
                                <li>
                                    <a href="app-calendar.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
                                </li>
                                <li>
                                    <a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                                </li>
                                <li>
                                    <a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="icon-bell"></i>
                                        <span class="notification-dot"></span>
                                    </a>
                                    <ul class="dropdown-menu notifications">
                                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-warning"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                        <span class="timestamp">10:00 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>                               
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-like text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                        <span class="timestamp">11:30 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-pie-chart text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                        <span class="timestamp">04:00 PM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Error on website analytics configurations</p>
                                                        <span class="timestamp">Yesterday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                                    <ul class="dropdown-menu user-menu menu-icon">
                                        <li class="menu-heading">ACCOUNT SETTINGS</li>
                                        <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
                                        <li class="menu-heading">BILLING</li>
                                        <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>                                
                                        <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page-login.html" class="icon-menu"><i class="icon-login"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div id="left-sidebar" class="sidebar">
                <div class="sidebar-scroll">
                    <div class="user-account">
                        <img src="{{ asset('images/user.png')}}" class="rounded-circle user-photo" alt="User Profile Picture">
                        <div class="dropdown">
                            <span>Welcome,</span>
                            <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alizee Thomas</strong></a>
                            <ul class="dropdown-menu dropdown-menu-right account">
                                <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                            </ul>
                        </div>
                        <hr>
                        <ul class="row list-unstyled">
                            <li class="col-4">
                                <small>Sales</small>
                                <h6>456</h6>
                            </li>
                            <li class="col-4">
                                <small>Order</small>
                                <h6>1350</h6>
                            </li>
                            <li class="col-4">
                                <small>Revenue</small>
                                <h6>$2.13B</h6>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-l-0 p-r-0">
                        <div class="tab-pane active" id="menu">
                            <nav id="left-sidebar-nav" class="sidebar-nav">
                                <ul id="main-menu" class="metismenu">                            
                                    <li class="active">
                                        <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
                                        <ul>
                                            <li class="active"><a href="index.html">Analytical</a></li>                                    
                                            <li><a href="index2.html">Demographic</a></li>
                                            <li><a href="index3.html">Hospital</a></li>
                                            <li><a href="index4.html">University</a></li>
                                            <li><a href="index5.html">Real Estate</a></li>
                                            <li><a href="index6.html">Project</a></li>
                                            <li><a href="index7.html">Cryptocurrency</a></li>
                                            <li><a href="index8.html">eCommerce</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#App" class="has-arrow"><i class="icon-grid"></i> <span>App</span></a>
                                        <ul>
                                            <li><a href="app-inbox.html">Inbox</a></li>
                                            <li><a href="app-chat.html">Chat</a></li>
                                            <li><a href="app-calendar.html">Calendar</a></li>                                    
                                            <li><a href="app-contact.html">Contact list</a></li>
                                            <li><a href="app-contact-grid.html">Contact Card <span class="badge badge-warning float-right">New</span></a></li>
                                            <li><a href="app-taskboard.html">Taskboard</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#FileManager" class="has-arrow"><i class="icon-folder"></i> <span>File Manager</span></a>
                                        <ul>                                    
                                            <li><a href="file-dashboard.html">Dashboard</a></li>
                                            <li><a href="file-documents.html">Documents</a></li>
                                            <li><a href="file-media.html">Media</a></li>
                                            <li><a href="file-images.html">Images</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
                                        <ul>                                    
                                            <li><a href="blog-dashboard.html">Dashboard</a></li>
                                            <li><a href="blog-post.html">New Post</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI Elements</span></a>
                                        <ul>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-tabs.html">Tabs</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                            <li><a href="ui-icons.html">Icons</a></li>
                                            <li><a href="ui-notifications.html">Notifications</a></li>
                                            <li><a href="ui-colors.html">Colors</a></li>
                                            <li><a href="ui-dialogs.html">Dialogs</a></li>                                    
                                            <li><a href="ui-list-group.html">List Group</a></li>
                                            <li><a href="ui-media-object.html">Media Object</a></li>
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-nestable.html">Nestable</a></li>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                            <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                            <li><a href="ui-treeview.html">Treeview</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i> <span>Widgets</span></a>
                                        <ul>                                    
                                            <li><a href="widgets-statistics.html">Statistics</a></li>
                                            <li><a href="widgets-data.html">Data</a></li>
                                            <li><a href="widgets-chart.html">Chart</a></li>
                                            <li><a href="widgets-weather.html">Weather</a></li>
                                            <li><a href="widgets-social.html">Social</a></li>
                                            <li><a href="widgets-blog.html">Blog</a></li>
                                            <li><a href="widgets-ecommerce.html">eCommerce</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i> <span>Authentication</span></a>
                                        <ul>                                    
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                            <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                            <li><a href="page-404.html">Page 404</a></li>
                                            <li><a href="page-403.html">Page 403</a></li>
                                            <li><a href="page-500.html">Page 500</a></li>
                                            <li><a href="page-503.html">Page 503</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Pages" class="has-arrow"><i class="icon-docs"></i> <span>Pages</span></a>
                                        <ul>
                                            <li><a href="page-blank.html">Blank Page</a> </li>
                                            <li><a href="page-profile.html">Profile <span class="badge badge-default float-right">v1</span></a></li>
                                            <li><a href="page-profile2.html">Profile <span class="badge badge-warning float-right">v2</span></a></li>
                                            <li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                            <li><a href="page-gallery2.html">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                            <li><a href="page-timeline.html">Timeline</a></li>
                                            <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                            <li><a href="page-pricing.html">Pricing</a></li>
                                            <li><a href="page-invoices.html">Invoices</a></li>
                                            <li><a href="page-invoices2.html">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                            <li><a href="page-search-results.html">Search Results</a></li>
                                            <li><a href="page-helper-class.html">Helper Classes</a></li>
                                            <li><a href="page-teams-board.html">Teams Board</a></li>
                                            <li><a href="page-projects-list.html">Projects List</a></li>
                                            <li><a href="page-maintenance.html">Maintenance</a></li>
                                            <li><a href="page-testimonials.html">Testimonials</a></li>
                                            <li><a href="page-faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
                                        <ul>
                                            <li><a href="forms-validation.html">Form Validation</a></li>
                                            <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                            <li><a href="forms-basic.html">Basic Elements</a></li>
                                            <li><a href="forms-wizard.html">Form Wizard</a></li>

                                            <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>

                                            <li><a href="forms-cropping.html">Image Cropping</a></li>
                                            <li><a href="forms-summernote.html">Summernote</a></li>
                                            <li><a href="forms-editors.html">CKEditor</a></li>
                                            <li><a href="forms-markdown.html">Markdown</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
                                        <ul>
                                            <li><a href="table-basic.html">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                            <li><a href="table-normal.html">Normal Tables</a> </li>
                                            <li><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
                                            <li><a href="table-editable.html">Editable Tables</a> </li>
                                            <li><a href="table-color.html">Tables Color</a> </li>
                                            <li><a href="table-filter.html">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                            <li><a href="table-dragger.html">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                                        <ul>
                                            <li><a href="chart-morris.html">Morris</a> </li>
                                            <li><a href="chart-flot.html">Flot</a> </li>
                                            <li><a href="chart-chartjs.html">ChartJS</a> </li>                                    
                                            <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>

                                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                            <li><a href="chart-peity.html">Peity</a></li>
                                            <li><a href="chart-c3.html">C3 Charts</a></li>
                                            <li><a href="chart-gauges.html">Gauges</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                                        <ul>
                                            <li><a href="map-google.html">Google Map</a></li>
                                            <li><a href="map-yandex.html">Yandex Map</a></li>
                                            <li><a href="map-jvectormap.html">jVector Map</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane p-l-15 p-r-15" id="Chat">
                            <form>
                                <div class="input-group m-b-20">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            <ul class="right_chat list-unstyled">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{ asset('images/xs/avatar4.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{ asset('images/xs/avatar5.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{ asset('images/xs/avatar2.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{ asset('images/xs/avatar1.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">Art director, Movie Cut</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{ asset('images/xs/avatar3.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>
                        </div>
                        <div class="tab-pane p-l-15 p-r-15" id="setting">
                            <h6>Choose Skin</h6>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                    <span>Purple</span>
                                </li>                   
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                    <span>Blue</span>
                                </li>
                                <li data-theme="cyan" class="active">
                                    <div class="cyan"></div>
                                    <span>Cyan</span>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                    <span>Green</span>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                    <span>Orange</span>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                    <span>Blush</span>
                                </li>
                            </ul>
                            <hr>
                            <h6>General Settings</h6>
                            <ul class="setting-list list-unstyled">
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Report Panel Usag</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Email Redirect</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Notifications</span>
                                    </label>                      
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Auto Updates</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Offline</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Location Permission</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane p-l-15 p-r-15" id="question">
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            <ul class="list-unstyled question">
                                <li class="menu-heading">HOW-TO</li>
                                <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                                <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                                <li><a href="javascript:void(0);">Website Analytics</a></li>
                                <li class="menu-heading">ACCOUNT</li>
                                <li><a href="javascript:void(0);">Cearet New Account</a></li>
                                <li><a href="javascript:void(0);">Change Password?</a></li>
                                <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                                <li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);">Payment info</a></li>
                                <li><a href="javascript:void(0);">Auto-Renewal</a></li>                        
                                <li class="menu-button m-t-30">
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                                </li>
                            </ul>
                        </div>                
                    </div>          
                </div>
            </div>

            <div id="main-content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 col-sm-12">                        
                                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>            
                            <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                         data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                                    <span>Visitors</span>
                                </div>
                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                         data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                    <span>Visits</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card overflowhidden number-chart">
                                <div class="body">
                                    <div class="number">
                                        <h6>EARNINGS</h6>
                                        <span>$22,500</span>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                                     data-line-Width="1" data-line-Color="#f79647" data-fill-Color="#fac091">1,4,1,3,7,1</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card overflowhidden number-chart">
                                <div class="body">
                                    <div class="number">
                                        <h6>SALES</h6>
                                        <span>$500</span>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                                     data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">1,4,2,3,6,2</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card overflowhidden number-chart">
                                <div class="body">
                                    <div class="number">
                                        <h6>VISITS</h6>
                                        <span>$21,215</span>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                                     data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card overflowhidden number-chart">
                                <div class="body">
                                    <div class="number">
                                        <h6>LIKES</h6>
                                        <span>$421,215</span>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                                     data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Top Products</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div id="chart-top-products" class="chartist"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Referrals</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled list-referrals">
                                        <li>
                                            <p><span class="value">2301</span><span class="text-muted float-right">visits from Facebook</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-blue">
                                                <div class="progress-bar" data-transitiongoal="87"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p><span class="value">2107</span><span class="text-muted float-right">visits from Twitter</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-purple">
                                                <div class="progress-bar" data-transitiongoal="34"></div>
                                            </div>
                                        </li>                                
                                        <li>
                                            <p><span class="value">2308</span><span class="text-muted float-right">visits from Search</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-yellow">
                                                <div class="progress-bar" data-transitiongoal="54"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p><span class="value">1024</span><span class="text-muted float-right">visits from Affiliates</span></p>
                                            <div class="progress progress-xs progress-transparent custom-color-green">
                                                <div class="progress-bar" data-transitiongoal="67"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Total Revenue</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body text-center">
                                    <h4 class="margin-0">Total Sale</h4>
                                    <h6 class="m-b-20">2,45,124</h6>
                                    <input type="text" class="knob" value="63" data-width="100" data-height="100" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125" data-fgColor="#212121" readonly>                            
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="6" data-bar-Spacing="6" data-bar-Color="#7460ee">2,5,4,8,3,9,1,5</div>
                                    <h6 class="p-b-15">Weekly Earnings</h6>
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="4" data-bar-Color="#11a0f8">3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2</div>
                                    <h6>Monthly Earnings</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Resent Chat</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body text-center">
                                    <div class="cwidget-scroll">
                                        <ul class="chat-widget m-r-5 clearfix">
                                            <li class="left float-left">
                                                <img src="{{ asset('images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">
                                                <div class="chat-info">       
                                                    <span class="message">Hello, John<br>What is the update on Project X?</span>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <img src="{{ asset('images/xs/avatar1.jpg')}}" class="rounded-circle" alt="">
                                                <div class="chat-info">
                                                    <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                                                </div>
                                            </li>
                                            <li class="left float-left">
                                                <img src="{{ asset('images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">
                                                <div class="chat-info">
                                                    <span class="message">That's great. Will catch you in evening.</span>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <img src="{{ asset('images/xs/avatar1.jpg')}}" class="rounded-circle" alt="">
                                                <div class="chat-info">
                                                    <span class="message">Sure we'will have a blast today.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input-group p-t-15">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" ><i class="icon-paper-plane"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter text here...">                                    
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Data Managed</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>1,523</h2>
                                            <p>External Records</p>                                    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="60px" data-bar-Width="3" data-bar-Spacing="8" data-bar-Color="#00ced1">2,-1,5,6,4,8,7,-5,6,2,3,5,6,2,-3,4,-2</div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <tbody>
                                                <tr>
                                                    <th><i class="fa fa-circle text-success"></i></th>
                                                    <td>Twitter</td>
                                                    <td><span>862 Records</span></td>
                                                    <td>35% <i class="fa fa-caret-up "></i></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-circle text-info"></i></th>
                                                    <td>Facebook</td>
                                                    <td><span>451 Records</span></td>
                                                    <td>15% <i class="fa fa-caret-up "></i></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-circle text-warning"></i></th>
                                                    <td>Mailchimp</td>
                                                    <td><span>502 Records</span></td>
                                                    <td>20% <i class="fa fa-caret-down"></i></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-circle text-danger"></i></th>
                                                    <td>Google</td>
                                                    <td><span>502 Records</span></td>
                                                    <td>20% <i class="fa fa-caret-up "></i></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="fa fa-circle "></i></th>
                                                    <td>Other</td>
                                                    <td><span>237 Records</span></td>
                                                    <td>10% <i class="fa fa-caret-down"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Lucid Feeds</h2>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Twitter Feed</h2>
                                </div>
                                <div class="body">
                                    <form>
                                        <div class="form-group">
                                            <textarea rows="3" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                        </div>
                                        <button class="btn btn-primary">Tweet</button>
                                        <a href="javascript:void(0);">13K users active</a>
                                    </form>
                                    <hr>
                                    <ul class="right_chat list-unstyled mb-0">
                                        <li class="offline">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{ asset('images/xs/avatar2.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">@Isabella <small class="float-right">1 hours ago</small></span>
                                                        <span class="message">Contrary to popular belief not simply text</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>                            
                                        </li>                                
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{ asset('images/xs/avatar3.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">@Alexander <small class="float-right">2 hours ago</small></span>
                                                        <span class="message">Contrary to popular belief not simply text</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>                            
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{ asset('images/xs/avatar4.jpg')}}" alt="">
                                                    <div class="media-body">
                                                        <span class="name">@Alexander <small class="float-right">1 day ago</small></span>
                                                        <span class="message">Contrary to popular belief not simply text</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>                        
                                    </ul>                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card overflowhidden">
                                <div class="body top_counter bg-success">
                                    <div class="icon bg-transparent">
                                        <img src="{{ asset('images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">
                                    </div>
                                    <div class="content text-light">
                                        <div>Team Leader</div>
                                        <h6>Maryam Amiri</h6>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="list-group list-widget">
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <span class="badge badge-success">654</span>
                                            <i class="fa fa-envelope text-muted"></i>Inbox</a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <span class="badge badge-info">364</span>
                                            <i class="fa fa-eye text-muted"></i> Profile visits</a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <span class="badge badge-warning">19</span>
                                            <i class="fa fa-bookmark text-muted"></i> Bookmarks</a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <span class="badge badge-warning">12</span>
                                            <i class="fa fa-phone text-muted"></i> Call</a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <span class="badge badge-danger">54</span>
                                            <i class="fa fa-comments-o text-muted"></i> Messages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Lucid Activities</h2>
                                </div>
                                <div class="body">
                                    <div class="timeline-item green" date-is="20-04-2018 - Today">
                                        <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                                        <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA</span>
                                        <div class="msg">
                                            <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                            <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                            <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-bubbles"></i> Comment</a>
                                            <div class="collapse m-t-10" id="collapseExample">
                                                <div class="well">
                                                    <form>
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>                                
                                    </div>

                                    <div class="timeline-item blue" date-is="19-04-2018 - Yesterday">
                                        <h5>Oeehhh, that's awesome.. Me too!</h5>
                                        <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                                        <div class="msg">
                                            <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                            <div class="timeline_img m-b-20">
                                                <img class="w-25" src="{{ asset('images/blog/blog-page-4.jpg')}}" alt="Awesome Image">
                                                <img class="w-25" src="{{ asset('images/blog/blog-page-2.jpg')}}" alt="Awesome Image">
                                            </div>
                                            <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                            <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="icon-bubbles"></i> Comment</a>
                                            <div class="collapse m-t-10" id="collapseExample1">
                                                <div class="well">
                                                    <form>
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-item warning" date-is="21-02-2018">
                                        <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                                        <span><a href="javascript:void(0);" title="">Gary Camara</a> San Francisco, CA</span>
                                        <div class="msg">
                                            <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                            <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                            <a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="icon-bubbles"></i> Comment</a>
                                            <div class="collapse m-t-10" id="collapseExample2">
                                                <div class="well">
                                                    <form>
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Javascript -->
        <script src="{{ asset('bundles/libscripts.bundle.js')}}"></script>    
        <script src="{{ asset('bundles/vendorscripts.bundle.js')}}"></script>

        <script src="{{ asset('bundles/chartist.bundle.js')}}"></script>
        <script src="{{ asset('bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
        <script src="{{ asset('vendor/toastr/toastr.js')}}"></script>

        <script src="{{ asset('bundles/mainscripts.bundle.js')}}"></script>
        <script src="{{ asset('js/index.js')}}"></script>
    </body>
</html>