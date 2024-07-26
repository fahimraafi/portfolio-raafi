<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dasho - Most Complete Bootstrap Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Dasho Bootstrap admin template made using bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 5, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Elite Able, Dasho bootstrap admin template">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('dashboard-assets') }}/images/favicon.svg" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/plugins/animation/css/animate.min.css">
    <!-- prism css -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/plugins/prism/css/prism.min.css">
    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/css/layouts/layout-horizontal.css">
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/css/layouts/layout-9.css">
    @livewireStyles
</head>

<body class="layout-9">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal container navbar-blue">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">

                    <img src="{{ asset('dashboard-assets') }}/images/logo-dark.svg" alt="" class="logo images">
                    <img src="{{ asset('dashboard-assets') }}/images/logo-icon-dark.svg" alt=""
                        class="logo-thumb images">
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <div class="layout9-nav">
                    <ul class="sidemenu nav" role="tablist">
                        <li class="#">
                            <a href="{{ route('home') }}" class="nav-link" data-cont="navigation">Dashboard</a>
                        </li>
                        <li class="">
                            <a href="{{ route('hero-section.create') }}" class="nav-link" data-cont="ui">Hero
                                Section</a>
                        </li>
                        <li class=""><a href="{{ route('counterup.create') }}" class="nav-link" data-cont="forms">Counter Up</a></li>
                        <li class=""><a class="nav-link" data-cont="datatable">Table</a></li>
                        <li class=""><a class="nav-link" data-cont="Chart">Chart</a></li>
                        <li class=""><a class="nav-link" data-cont="Pages">Pages</a></li>
                        <li class=""><a class="nav-link" data-cont="App">App</a></li>
                        <li class=""><a class="nav-link" data-cont="Extension">Extension</a></li>
                        <li class=""><a class="nav-link" data-cont="Other">Other</a></li>
                        <li class=""><a class="nav-link" data-cont="Support">Support</a></li>
                    </ul>
                    <div class="side-content">
                        <div class="sidelink navigation active">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Dashboard</label>
                                </li>
                                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="{{ route('home') }}" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-home"></i></span><span class="pcoded-mtext">Admin
                                            Dashboard</span></a>
                                    {{-- <ul class="pcoded-submenu">
                                        <li class=""><a href="index.html" class="">Analytics</a></li>
                                        <li class=""><a href="dashboard-sale.html" class="">Sales</a></li>
                                        <li class=""><a href="dashboard-crypto.html" class="">Crypto</a>
                                        </li>
                                        <li class=""><a href="dashboard-project.html"
                                                class="">Project</a></li>
                                        <li class=""><a href="dashboard-help.html" class="">Helpdesk<span
                                                    class="pcoded-badge label label-danger">NEW</span></a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li data-username="Vertical Horizontal Box Layout RTL fixed static Collapse menu color icon dark"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-layout"></i></span><span class="pcoded-mtext">Page
                                            layouts</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded-hasmenu"><a href="#!" class="">Vertical</a>
                                            <ul class="pcoded-submenu">
                                                <li class=""><a href="layout-static.html" class=""
                                                        target="_blank">Static</a></li>
                                                <li class=""><a href="layout-fixed.html" class=""
                                                        target="_blank">Fixed</a></li>
                                                <li class=""><a href="layout-menu-fixed.html" class=""
                                                        target="_blank">Navbar fixed</a></li>
                                                <li class=""><a href="layout-mini-menu.html" class=""
                                                        target="_blank">Collapse menu</a></li>
                                                <li class=""><a href="layout-navbg.html" class=""
                                                        target="_blank">Navbar
                                                        imagebg</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="layout-horizontal.html" class=""
                                                target="_blank">Horizontal</a></li>
                                        <li class=""><a href="layout-horizontal-1.html" class=""
                                                target="_blank">Horizontal v1</a></li>
                                        <li class=""><a href="layout-horizontal-2.html" class=""
                                                target="_blank">Horizontal v2</a></li>
                                        <li class=""><a href="layout-box.html" class=""
                                                target="_blank">Box layout</a>
                                        </li>
                                        <li class=""><a href="layout-rtl.html" class=""
                                                target="_blank">RTL</a></li>
                                        <li class=""><a href="layout-light.html" class=""
                                                target="_blank">Light
                                                layout</a></li>
                                        <li class=""><a href="layout-dark.html" class=""
                                                target="_blank">Dark layout
                                                <span class="pcoded-badge label label-danger">Hot</span></a></li>
                                        <li class=""><a href="layout-menu-icon.html" class=""
                                                target="_blank">Color
                                                icon</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li data-username="widget Statistic Data Table User card Chart"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-layers"></i></span><span
                                            class="pcoded-mtext">Widget</span><span
                                            class="pcoded-badge label label-info">100+</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="widget-statistic.html"
                                                class="">Statistic</a></li>
                                        <li class=""><a href="widget-data.html" class="">Data</a></li>
                                        <li class=""><a href="widget-chart.html" class="">Chart</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="sidelink navigation active">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Hero Section</label>
                                </li>
                                {{-- <li data-username="" class="nav-item pcoded-hasmenu">
                                    <a href="{{ route('hero-section.index') }}" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-home"></i></span><span class="pcoded-mtext">Hero Section</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="{{ route('hero-section.create') }}" class="">Add Conctent</a></li>
                                        <li class=""><a href="{{ route('hero-section.index') }}" class=""> View Contents </a></li>

                                    </ul>
                                </li> --}}

                            </ul>
                        </div>
                        <div class="sidelink forms">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption sidenav-inner">
                                    <label> Counter Up </label>
                                </li>

                            </ul>
                        </div>
                        <div class="sidelink datatable">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>table</label>
                                </li>
                                <li data-username="table basic sizing border styling" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-align-justify"></i></span><span
                                            class="pcoded-mtext">Bootstrap table</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="tbl_bootstrap.html" class="">Basic
                                                table</a></li>
                                        <li class=""><a href="tbl_sizing.html" class="">Sizing table</a>
                                        </li>
                                        <li class=""><a href="tbl_border.html" class="">Border table</a>
                                        </li>
                                        <li class=""><a href="tbl_styling.html" class="">Styling
                                                table</a></li>
                                    </ul>
                                </li>
                                <li data-username="table basic advance styling api ajax server plugin data sources"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-package"></i></span><span
                                            class="pcoded-mtext">Data
                                            table</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="dt_basic.html" class="">Basic
                                                initialization</a></li>
                                        <li class=""><a href="dt_advance.html" class="">Advance
                                                initialization</a></li>
                                        <li class=""><a href="dt_styling.html" class="">Styling</a></li>
                                        <li class=""><a href="dt_api.html" class="">API</a></li>
                                        <li class=""><a href="dt_ajax.html" class="">Ajax</a></li>
                                        <li class=""><a href="dt_serverside.html" class="">Server
                                                side</a></li>
                                        <li class=""><a href="dt_plugin.html" class="">Plug-in</a></li>
                                        <li class=""><a href="dt_sources.html" class="">Data sources</a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-username="table extensions autofill basic data export col reorder fixed columns header key responsive row scroller select"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-server"></i></span><span class="pcoded-mtext">DT
                                            extensions</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="dt_ext_autofill.html" class="">Autofill</a>
                                        </li>
                                        <li class="nav-item pcoded-hasmenu">
                                            <a href="#!" class="nav-link"><span
                                                    class="pcoded-mtext">Button</span></a>
                                            <ul class="pcoded-submenu">
                                                <li class=""><a href="dt_ext_basic_buttons.html"
                                                        class="">Basic
                                                        button</a></li>
                                                <li class=""><a href="dt_ext_export_buttons.html"
                                                        class="">Data
                                                        export</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="dt_ext_col_reorder.html" class="">Col
                                                reorder</a></li>
                                        <li class=""><a href="dt_ext_fixed_columns.html" class="">Fixed
                                                columns</a></li>
                                        <li class=""><a href="dt_ext_fixed_header.html" class="">Fixed
                                                header</a></li>
                                        <li class=""><a href="dt_ext_key_table.html" class="">Key
                                                table</a></li>
                                        <li class=""><a href="dt_ext_responsive.html"
                                                class="">Responsive</a></li>
                                        <li class=""><a href="dt_ext_row_reorder.html" class="">Row
                                                reorder</a></li>
                                        <li class=""><a href="dt_ext_scroller.html" class="">Scroller</a>
                                        </li>
                                        <li class=""><a href="dt_ext_select.html" class="">Select
                                                table</a></li>
                                    </ul>
                                </li>
                                <li data-username="table editable" class="nav-item"><a href="editable_table.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-grid"></i></span><span
                                            class="pcoded-mtext">Editable
                                            table</span></a></li>
                                <li data-username="table foo" class="nav-item"><a href="tbl_foo.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-list"></i></span><span class="pcoded-mtext">Foo
                                            table</span></a></li>
                            </ul>
                        </div>
                        <div class="sidelink Chart">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Chart &amp; Maps</label>
                                </li>
                                <li data-username="Charts AM Chart js Echart Google Highchart Knob Morris Nvd3 Peity Radial"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-pie-chart"></i></span><span
                                            class="pcoded-mtext">Chart</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="chart-am.html" class="">amChart 4</a></li>
                                        <li class=""><a href="chart-chartjs.html" class="">Chart js</a>
                                        </li>
                                        <li class=""><a href="chart-echart.html" class="">Echart</a></li>
                                        <li class=""><a href="chart-google.html" class="">Google</a></li>
                                        <li class=""><a href="chart-highchart.html"
                                                class="">Highchart</a></li>
                                        <li class=""><a href="chart-knob.html" class="">Knob</a></li>
                                        <li class=""><a href="chart-morris.html" class="">Morris</a></li>
                                        <li class=""><a href="chart-nvd3.html" class="">Nvd3</a></li>
                                        <li class=""><a href="chart-peity.html" class="">Peity</a></li>
                                        <li class=""><a href="chart-radial.html" class="">Radial</a></li>
                                    </ul>
                                </li>
                                <li data-username="Maps Google Vector Google Map Search API Location"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-map"></i></span><span
                                            class="pcoded-mtext">Maps</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="map-google.html" class="">Google</a></li>
                                        <li class=""><a href="map-vector.html" class="">Vector</a></li>
                                        <li class="active"><a href="map-api.html" class="">Gmap search API</a>
                                        </li>
                                        <li class=""><a href="map-location.html" class="">Location</a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-username="landing page" class="nav-item"><a
                                        href="extra-pages/landingpage/index.html" class="nav-link"
                                        target="_blank"><span class="pcoded-micon"><i
                                                class="feather icon-navigation-2"></i></span><span
                                            class="pcoded-mtext">Landing
                                            page</span></a></li>
                            </ul>
                        </div>
                        <div class="sidelink Pages">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Pages</label>
                                </li>
                                <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe"
                                    class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-lock"></i></span><span
                                            class="pcoded-mtext">Authentication</span><span
                                            class="pcoded-badge label label-danger">New</span></a>

                                </li>

                            </ul>
                        </div>
                        <div class="sidelink App">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>App</label>
                                </li>
                                <li data-username="message" class="nav-item"><a href="message.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-message-circle"></i></span><span
                                            class="pcoded-mtext">Message</span></a></li>
                                <li data-username="inbox read mail compose" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-mail"></i></span><span
                                            class="pcoded-mtext">Email</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="email_inbox.html" class="">Inbox</a></li>
                                        <li class=""><a href="email_read.html" class="">Read mail</a>
                                        </li>
                                        <li class=""><a href="email_compose.html" class="">Compose
                                                mail</a></li>
                                    </ul>
                                </li>
                                <li data-username="Task list board details" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-clipboard"></i></span><span
                                            class="pcoded-mtext">Task</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="task-list.html" class="">List</a></li>
                                        <li class=""><a href="task-board.html" class="">Board</a></li>
                                        <li class=""><a href="task-detail.html" class="">Detail</a></li>
                                    </ul>
                                </li>
                                <li data-username="To-Do notes" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-check-square"></i></span><span
                                            class="pcoded-mtext">To-Do</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class="active"><a href="todo.html" class="">To-Do</a></li>
                                        <li class=""><a href="notes.html" class="">Notes</a></li>
                                    </ul>
                                </li>
                                <li data-username="Gallery Grid Masonry Advance" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-image"></i></span><span
                                            class="pcoded-mtext">Gallery</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="gallery-grid.html" class="">Grid</a></li>
                                        <li class=""><a href="gallery-masonry.html" class="">Masonry</a>
                                        </li>
                                        <li class=""><a href="gallery-advance.html" class="">Advance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-username="search1 search2 search2" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-search"></i></span><span
                                            class="pcoded-mtext">Search<span
                                                class="pcoded-badge label label-info">NEW</span></span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="search1.html" class="">Search1</a></li>
                                        <li class=""><a href="search2.html" class="">Search2</a></li>
                                        <li class=""><a href="search3.html" class="">Search3</a></li>
                                    </ul>
                                </li>
                                <li data-username="search1 search2 search2" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-help-circle"></i></span><span
                                            class="pcoded-mtext">Helpdesk<span
                                                class="pcoded-badge label label-success">NEW</span></span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="hd-cust-list.html" class="">Customer
                                                list</a></li>
                                        <li class=""><a href="hd-dashboard.html" class="">Customer
                                                dashboard</a></li>
                                        <li class=""><a href="hd-detail.html" class="">Customer
                                                detail</a></li>
                                        <li class=""><a href="hd-help-desk.html" class="">Customer
                                                helpdesk</a></li>
                                        <li class=""><a href="hd-new-ticket.html" class="">Ticket</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="sidelink Extension">
                            <ul class="nav pcoded-inner-navbar sidenav-inner">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Extension</label>
                                </li>
                                <li data-username="Editor CK-Editor Tinemce" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-file-plus"></i></span><span
                                            class="pcoded-mtext">Editor</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded-hasmenu">
                                            <a href="#!" class="">CK editor</a>
                                            <ul class="pcoded-submenu">
                                                <li class=""><a href="editor-classic.html"
                                                        class="">Classic</a></li>
                                                <li class=""><a href="editor-balloon.html"
                                                        class="">Balloon</a></li>
                                                <li class=""><a href="editor-inline.html"
                                                        class="">Inline</a></li>
                                                <li class=""><a href="editor-document.html"
                                                        class="">Document</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="editor-tinymce.html" class="">Tinymce
                                                editor</a></li>
                                    </ul>
                                </li>
                                <li data-username="Invoice Summury List" class="nav-item pcoded-hasmenu">
                                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-file-minus"></i></span><span
                                            class="pcoded-mtext">Invoice</span></a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="invoice.html" class="">Invoice</a></li>
                                        <li class=""><a href="invoice-summary.html" class="">Invoice
                                                summary</a></li>
                                        <li class=""><a href="invoice-list.html" class="">Invoice
                                                list</a></li>
                                    </ul>
                                </li>
                                <li data-username="Full Calendar" class="nav-item"><a href="full-calendar.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-calendar"></i></span><span
                                            class="pcoded-mtext">Full
                                            calendar</span></a></li>
                                <li data-username="File Upload" class="nav-item"><a href="file-upload.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-upload-cloud"></i></span><span
                                            class="pcoded-mtext">File upload</span></a></li>
                                <li data-username="image cropper" class="nav-item"><a href="image_crop.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-scissors"></i></span><span
                                            class="pcoded-mtext">Image cropper</span></a></li>
                                <li data-username="grid animation" class="nav-item"><a href="grid-animation.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-globe"></i></span><span class="pcoded-mtext">Grid
                                            animation</span><span class="pcoded-badge label label-info">NEW</span></a>
                                </li>
                                <li data-username="minimal form" class="nav-item"><a href="minimal-form.html"
                                        class="nav-link"><span class="pcoded-micon"><i
                                                class="feather icon-book"></i></span><span
                                            class="pcoded-mtext">Minimal
                                            form</span><span class="pcoded-badge label label-danger">NEW</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="container">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
                <a href="index.html" class="b-brand">

                    <img src="{{ asset('dashboard-assets') }}/images/logo-dark.svg" alt=""
                        class="logo images">
                    <img src="{{ asset('dashboard-assets') }}/images/logo-icon-dark.svg" alt=""
                        class="logo-thumb images">
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="#!">
                <i class="feather icon-more-horizontal"></i>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <div class="main-search open">
                            <div class="input-group">
                                <input type="text" id="m-search" class="form-control"
                                    placeholder="Search . . .">
                                <a href="#!" class="input-group-append search-close">
                                    <i class="feather icon-x input-group-text"></i>
                                </a>
                                <span class="ms-1 input-group-append search-btn btn btn-primary">
                                    <i class="feather icon-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"><i
                                    class="icon feather icon-bell"></i></a>
                            <div class="dropdown-menu dropdown-menu-end notification">
                                <div class="noti-head">
                                    <h6 class="d-inline-block m-b-0">Notifications</h6>
                                    <div class="float-end">
                                        <a href="#!" class="m-r-10">mark as read</a>
                                        <a href="#!">clear all</a>
                                    </div>
                                </div>
                                <ul class="noti-body">
                                    <li class="n-title">
                                        <p class="m-b-0">NEW</p>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius"
                                                src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                <p>New ticket Added</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="n-title">
                                        <p class="m-b-0">EARLIER</p>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius"
                                                src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>10 min</span>
                                                </p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius"
                                                src="{{ asset('dashboard-assets') }}/images/user/avatar-3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>12 min</span>
                                                </p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius"
                                                src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span>
                                                </p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius"
                                                src="{{ asset('dashboard-assets') }}/images/user/avatar-3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>1 hour</span>
                                                </p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="d-flex">
                                            <img class="img-radius"
                                                src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>2 hour</span>
                                                </p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="noti-footer">
                                    <a href="#!">show all</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
                    <li>
                        <div class="dropdown drp-user">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="icon feather icon-settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-notification">
                                <div class="pro-head">
                                    <img src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        class="img-radius" alt="User-Profile-Image">
                                    <span> {{ Auth::user()->name }} </span>
                                    <a href="auth-signin.html" class="dud-logout" title="Logout">
                                        <i class="feather icon-log-out"></i>
                                    </a>
                                </div>
                                <ul class="pro-body">
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                            Settings</a></li>
                                    <li><a href="{{ route('profile') }}" class="dropdown-item"><i
                                                class="feather icon-user"></i>
                                            Profile</a>
                                    </li>
                                    <li><a href="message.html" class="dropdown-item"><i
                                                class="feather icon-mail"></i>
                                            My Messages</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ chat user list ] start -->
    <section class="header-user-list">
        <a href="#!" class="h-close-text"><i class="feather icon-x"></i></a>
        <ul class="nav nav-tabs" id="chatTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active text-uppercase" id="chat-tab" data-bs-toggle="tab" href="#chat"
                    role="tab" aria-controls="chat" aria-selected="true"><i
                        class="feather icon-message-circle me-2"></i>Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" id="user-tab" data-bs-toggle="tab" href="#user"
                    role="tab" aria-controls="user" aria-selected="false"><i
                        class="feather icon-users me-2"></i>User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" id="setting-tab" data-bs-toggle="tab" href="#setting"
                    role="tab" aria-controls="setting" aria-selected="false"><i
                        class="feather icon-settings me-2"></i>Setting</a>
            </li>
        </ul>
        <div class="tab-content" id="chatTabContent">
            <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                <div class="h-list-header">
                    <div class="input-group">
                        <input type="text" id="search-friends" class="form-control"
                            placeholder="Search Friend . . .">
                    </div>
                </div>
                <div class="h-list-body">
                    <div class="main-friend-cont scroll-div">
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        alt="Generic placeholder image ">
                                    <div class="live-status">3</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                            .
                                        </small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                        alt="Generic placeholder image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-3.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="offline"
                                data-username="Alia">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        alt="Generic placeholder image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="offline"
                                data-username="Suzen">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-4.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min
                                            ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        alt="Generic placeholder image ">
                                    <div class="live-status">3</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                            .
                                        </small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                        alt="Generic placeholder image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-3.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="offline"
                                data-username="Alia">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        alt="Generic placeholder image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="offline"
                                data-username="Suzen">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-4.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min
                                            ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        alt="Generic placeholder image ">
                                    <div class="live-status">3</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                            .
                                        </small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                        alt="Generic placeholder image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small
                                            class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-3.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
                <div class="h-list-body">
                    <div class="main-friend-cont scroll-div">
                        <div class="main-friend-list">
                            <div class="media px-3 d-flex align-items-center mt-3">
                                <a class="media-left m-r-15" href="#!">
                                    <div
                                        class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                        <i class="icon feather icon-users"></i>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <p class="chat-header f-w-600 mb-0">New Group</p>
                                </div>
                            </div>
                            <div class="media p-3 d-flex align-items-center">
                                <a class="media-left m-r-15" href="#!">
                                    <div
                                        class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                        <i class="icon feather icon-user-plus"></i>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <p class="chat-header f-w-600 mb-0">New Contact</p>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                        alt="Generic placeholder image "></a>
                                <div class="media-body">
                                    <p class="chat-header">Josephin Doe<small class="d-block">i am not what happened
                                            .
                                            .</small></p>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small class="d-block">Avalable</small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-3.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block">hear using Elite
                                            able</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="offline"
                                data-username="Alia">
                                <a class="media-left" href="#!">
                                    <div
                                        class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center">
                                        A</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alia<small class="d-block text-muted">Avalable</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="offline"
                                data-username="Suzen">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-4.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Suzen<small class="d-block text-muted">Avalable</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <div
                                        class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                        JD</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-muted">Don't send
                                            me
                                            image</small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small class="d-block text-muted">not send free
                                            msg</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                <div class="p-4 main-friend-cont scroll-div">
                    <h6 class="mt-2"><i class="feather icon-monitor me-2"></i>Desktop settings</h6>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-1" checked>
                            <label for="cn-p-1" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Allow desktop notification</label>
                    </div>
                    <p class="text-muted ms-5">You get latest content at a time when data will updated</p>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-5">
                            <label for="cn-p-5" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Store Cookie</label>
                    </div>
                    <h6 class="mb-0 mt-5"><i class="feather icon-layout me-2"></i>Application settings</h6>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-3" checked>
                            <label for="cn-p-3" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Backup Storage</label>
                    </div>
                    <p class="text-muted mb-0 ms-5">Automaticaly take backup as par schedule</p>
                    <div class="form-group mb-4">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-4" checked>
                            <label for="cn-p-4" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Allow guest to print file</label>
                    </div>
                    <h6 class="mb-0 mt-5"><i class="feather icon-globe me-2"></i>System settings</h6>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-2">
                            <label for="cn-p-2" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">View other user chat</label>
                    </div>
                    <p class="text-muted ms-5">Allow to show public user message</p>
                </div>
            </div>
        </div>
    </section>
    <!-- [ chat user list ] end -->

    <!-- [ chat message ] start -->
    <section class="header-chat">
        <div class="h-list-header">
            <h6>Josephin Doe</h6>
            <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
        </div>
        <div class="h-list-body">
            <div class="main-chat-cont scroll-div">
                <div class="main-friend-chat">
                    <div class="d-flex chat-messages">
                        <a class="media-left photo-table" href="#!"><img
                                class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                alt="Generic placeholder image"></a>
                        <div class="flex-grow-1 chat-menu-content">
                            <div class="">
                                <p class="chat-cont">hello tell me something</p>
                                <p class="chat-cont">about yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="d-flex chat-messages">
                        <div class="flex-grow-1 chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                        <a class="media-right photo-table" href="#!"><img
                                class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('dashboard-assets') }}/images/user/avatar-1.jpg"
                                alt="Generic placeholder image"></a>
                    </div>
                    <div class="d-flex chat-messages">
                        <a class="media-left photo-table" href="#!"><img
                                class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('dashboard-assets') }}/images/user/avatar-2.jpg"
                                alt="Generic placeholder image"></a>
                        <div class="flex-grow-1 chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you help me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-list-footer">
            <div class="input-group">
                <input type="file" class="chat-attach" style="display:none">
                <a href="#!" class="input-group-prepend btn btn-success btn-attach">
                    <i class="feather icon-paperclip"></i>
                </a>
                <input type="text" name="h-chat-text" class="form-control h-send-chat"
                    placeholder="Write hear . . ">
                <button type="submit" class="input-group-append btn-send btn btn-primary">
                    <i class="feather icon-message-circle"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- [ chat message ] end -->

    <!-- [ Main Content ] start -->

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-header">
                                <div class="page-block">

                                </div>
                            </div>
                            <!-- [ Main Content ] start -->
                            <div class="container">
                                <div class="row">
                                    @yield('content')
                                </div>
                            </div>

                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{ asset('dashboard-assets') }}/js/vendor-all.min.js"></script>
    <script src="{{ asset('dashboard-assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('dashboard-assets') }}/js/pcoded.min.js"></script>
    <!-- prism Js -->
    <script src="{{ asset('dashboard-assets') }}/plugins/prism/js/prism.min.js"></script>
    <script src="{{ asset('dashboard-assets') }}/js/horizontal-menu.js"></script>
    <script type="text/javascript">
        // Collapse menu
        (function() {
            if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                return;
            }
            try {
                window.layoutHelpers.setCollapsed(
                    localStorage.getItem('layoutCollapsed') === 'true',
                    false
                );
            } catch (e) {}
        })();
        $(function() {
            // Initialize sidenav
            $('#layout-sidenav').each(function() {
                new SideNav(this, {
                    orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
                });
            });

            // Initialize sidenav togglers
            $('body').on('click', '.layout-sidenav-toggle', function(e) {
                e.preventDefault();
                window.layoutHelpers.toggleCollapsed();
                if (!window.layoutHelpers.isSmallScreen()) {
                    try {
                        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));
                    } catch (e) {}
                }
            });
        });
        $(document).ready(function() {
            $("#pcoded").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
    </script>
    <script type="text/javascript">
        // layout types
        $('.layout-type > a').on('click', function() {
            var temp = $(this).attr('data-value');
            $('.layout-type > a').removeClass('active');
            $('.pcoded-navbar').removeClassPrefix('navbar-image-');
            $('.pcoded-navbar').removeClassPrefix('navbar-');
            $(this).addClass('active');
            $('head').append('<link rel="stylesheet" class="layout-css" href="">');
            if (temp == "menu-dark") {
                $('.pcoded-navbar').removeClassPrefix('menu-');
                $('.pcoded-navbar').removeClass('navbar-dark');
            }
            if (temp == "menu-light") {
                $('.pcoded-navbar').removeClassPrefix('menu-');
                $('.pcoded-navbar').removeClass('navbar-dark');
                $('.pcoded-navbar').addClass(temp);
            }
            if (temp == "reset") {
                location.reload();
            }
            if (temp == "dark") {
                $('.pcoded-navbar').removeClassPrefix('menu-');
                $('.pcoded-navbar').addClass('navbar-dark');
                $('.layout-css').attr("href", "{{ asset('dashboard-assets') }}/css/layouts/dark.css");
            } else {
                $('.layout-css').attr("href", "");
            }
        });
        // Header Color
        $('.header-color > a').on('click', function() {
            var temp = $(this).attr('data-value');
            $('.header-color > a').removeClass('active');
            $(this).addClass('active');
            if (temp == "header-default") {
                $('.pcoded-header').removeClassPrefix('header-');
            } else {
                $('.pcoded-header').removeClassPrefix('header-');
                $('.pcoded-header').addClass(temp);
            }
        });
        // rtl layouts
        $('#theme-rtl').change(function() {
            $('head').append('<link rel="stylesheet" class="rtl-css" href="">');
            if ($(this).is(":checked")) {
                $('.rtl-css').attr("href", "{{ asset('dashboard-assets') }}/css/layouts/rtl.css");
                $('html').attr("dir", "rtl");
            } else {
                $('.rtl-css').attr("href", "");
                $('html').removeAttr("dir");
            }
        });
        // Menu Color
        $('.navbar-color > a').on('click', function() {
            var temp = $(this).attr('data-value');
            $('.navbar-color > a').removeClass('active');
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').addClass('brand-dark');
            $(this).addClass('active');
            if (temp == "navbar-default") {
                $('.pcoded-navbar').removeClassPrefix('navbar-');
                $('.pcoded-navbar').removeClassPrefix('brand-dark');
            } else {
                $('.pcoded-navbar').removeClassPrefix('navbar-');
                $('.pcoded-navbar').addClass(temp);
            }
        });
        // Active Color
        $('.active-color > a').on('click', function() {
            var temp = $(this).attr('data-value');
            $('.active-color > a').removeClass('active');
            $(this).addClass('active');
            if (temp == "active-default") {
                $('.pcoded-navbar').removeClassPrefix('active-');
            } else {
                $('.pcoded-navbar').removeClassPrefix('active-');
                $('.pcoded-navbar').addClass(temp);
            }
        });

        // Menu Icon Color
        $('#icon-colored').change(function() {
            if ($(this).is(":checked")) {
                $('.pcoded-navbar').addClass('icon-colored');
            } else {
                $('.pcoded-navbar').removeClass('icon-colored');
            }
        });

        // foll menu
        $('#full-menu').change(function() {
            if ($(this).is(":checked")) {
                $('.pcoded-navbar').addClass('l9-full-menu');
            } else {
                $('.pcoded-navbar').removeClass('l9-full-menu');
            }
        });

        // title Color
        $('.title-color > a').on('click', function() {
            var temp = $(this).attr('data-value');
            $('.title-color > a').removeClass('active');
            $(this).addClass('active');
            if (temp == "title-default") {
                $('.pcoded-navbar').removeClassPrefix('title-');
            } else {
                $('.pcoded-navbar').removeClassPrefix('title-');
                $('.pcoded-navbar').addClass(temp);
            }
        });
        // Menu Dropdown icon
        function drpicon(temp) {
            if (temp == "style1") {
                $('.pcoded-navbar').removeClassPrefix('drp-icon-');
            } else {
                $('.pcoded-navbar').removeClassPrefix('drp-icon-');
                $('.pcoded-navbar').addClass('drp-icon-' + temp);
            }
        }
        // Menu subitem icon
        function menuitemicon(temp) {
            if (temp == "style1") {
                $('.pcoded-navbar').removeClassPrefix('menu-item-icon-');
            } else {
                $('.pcoded-navbar').removeClassPrefix('menu-item-icon-');
                $('.pcoded-navbar').addClass('menu-item-icon-' + temp);
            }
        }

        $.fn.removeClassPrefix = function(prefix) {
            this.each(function(i, it) {
                var classes = it.className.split(" ").map(function(item) {
                    return item.indexOf(prefix) === 0 ? "" : item;
                });
                it.className = classes.join(" ");
            });
            return this;
        };
    </script>



    <script src="{{ asset('dashboard-assets') }}/js/analytics.js"></script>

    @livewireScripts
</body>

</html>
