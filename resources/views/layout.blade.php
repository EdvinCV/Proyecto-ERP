<!DOCTYPE html>
<html lang="es">

<head>
    <title>ADAM/INCOFIN</title>
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
    <meta name="author" content="Codedthemes" />
    
    <!-- <link rel="stylesheet" href="css/app.css"> -->
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- data tables css -->
    <link rel="stylesheet" href="assets/plugins/data-tables/css/datatables.min.css">
    <!-- vandor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div id="app">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->

        <!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Menu</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Categoria</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a @click="menu=0">Categoria 1</a></li>
                            <li class=""><a @click="menu=0">Categoria 2<span
                                        class="pcoded-badge label label-danger">NEW</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigati

        <!-- [ Header ] start -->
        <header class="navbar pcoded-header navbar-expand-lg navbar-light">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Datta Able</span>
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="#!">
                <i class="feather icon-more-horizontal"></i>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                                class="feather icon-maximize"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!">Action</a></li>
                            <li><a class="dropdown-item" href="#!">Another action</a></li>
                            <li><a class="dropdown-item" href="#!">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="main-search">
                            <div class="input-group">
                                <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                                <a href="#!" class="input-group-append search-close">
                                    <i class="feather icon-x input-group-text"></i>
                                </a>
                                <span class="input-group-append search-btn btn btn-primary">
                                    <i class="feather icon-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="icon feather icon-bell"></i></a>
                            <div class="dropdown-menu dropdown-menu-right notification">
                                <div class="noti-head">
                                    <h6 class="d-inline-block m-b-0">Notifications</h6>
                                    <div class="float-right">
                                        <a href="#!" class="m-r-10">mark as read</a>
                                        <a href="#!">clear all</a>
                                    </div>
                                </div>
                                <ul class="noti-body">
                                    <li class="n-title">
                                        <p class="m-b-0">NEW</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>New ticket Added</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="n-title">
                                        <p class="m-b-0">EARLIER</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                            class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>currently login</p>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon feather icon-settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-notification">
                                <div class="pro-head">
                                    <img src="assets/images/user/avatar-1.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <a href="auth-signin.html" class="dud-logout" title="Logout">
                                        <i class="feather icon-log-out"></i>
                                    </a>
                                </div>
                                <ul class="pro-body">
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                            Settings</a></li>
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a>
                                    </li>
                                    <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i>
                                            My Messages</a></li>
                                    <li><a href="auth-signin.html" class="dropdown-item"><i
                                                class="feather icon-lock"></i> Lock Screen</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <!-- [ Header ] end -->

        <!-- [ chat user list ] start -->
        <section class="header-user-list">
            <div class="h-list-header">
                <div class="input-group">
                    <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
                </div>
            </div>
            <div class="h-list-body">
                <a href="#!" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
                <div class="main-friend-cont scroll-div">
                    <div class="main-friend-list">
                        <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                <div class="live-status">3</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
                                    </small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                <div class="live-status">3</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
                                    </small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                <div class="live-status">3</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
                                    </small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image ">
                                <div class="live-status">3</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
                                    </small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="live-status">1</div>
                            </a>
                            <div class="media-body">
                                <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                            </div>
                        </div>
                        <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                            <a class="media-left" href="#!"><img class="media-object img-radius"
                                    src="assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                            </div>
                        </div>
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
                        <div class="media chat-messages">
                            <a class="media-left photo-table" href="#!"><img
                                    class="media-object img-radius img-radius m-t-5"
                                    src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body chat-menu-content">
                                <div class="">
                                    <p class="chat-cont">hello Datta! Will you tell me something</p>
                                    <p class="chat-cont">about yourself?</p>
                                </div>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media chat-messages">
                            <div class="media-body chat-menu-reply">
                                <div class="">
                                    <p class="chat-cont">Ohh! very nice</p>
                                </div>
                                <p class="chat-time">8:22 a.m.</p>
                            </div>
                        </div>
                        <div class="media chat-messages">
                            <a class="media-left photo-table" href="#!"><img
                                    class="media-object img-radius img-radius m-t-5"
                                    src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body chat-menu-content">
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
        <section class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Data Tables</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Table</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Data Tables</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <v-app>
                        @yield('content')
                        </v-app>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <!-- datatable Js -->
    <script src="js/app.js"></script>
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>


   
</body>

</html>