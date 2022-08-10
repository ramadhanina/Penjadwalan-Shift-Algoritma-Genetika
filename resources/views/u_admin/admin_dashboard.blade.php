<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <!-- BEGIN: Head-->
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>App calendar - Vuexy - Bootstrap HTML admin template</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/calendars/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-calendar.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
        </ul>
        <ul class="nav navbar-nav bookmark-icons">
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
            <div class="bookmark-input search-input">
              <div class="bookmark-input-icon"><i data-feather="search"></i></div>
              <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
              <ul class="search-list search-list-bookmark"></ul>
            </div>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
        </li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
          <div class="search-input">
            <div class="search-input-icon"><i data-feather="search"></i></div>
            <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
            <div class="search-input-close"><i data-feather="x"></i></div>
            <ul class="search-list search-list-main"></ul>
          </div>
        </li>
        
        <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge rounded-pill bg-danger badge-up">5</span></a>
          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
            <li class="dropdown-menu-header">
              <div class="dropdown-header d-flex">
                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                <div class="badge rounded-pill badge-light-primary">6 New</div>
              </div>
            </li>
            <li class="scrollable-container media-list"><a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                  </div>
                  <div class="list-item-body flex-grow-1">
                    <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                  </div>
                </div></a><a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                  </div>
                  <div class="list-item-body flex-grow-1">
                    <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                  </div>
                </div></a><a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar bg-light-danger">
                      <div class="avatar-content">MD</div>
                    </div>
                  </div>
                  <div class="list-item-body flex-grow-1">
                    <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                  </div>
                </div></a>
              <div class="list-item d-flex align-items-center">
                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                <div class="form-check form-check-primary form-switch">
                  <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                  <label class="form-check-label" for="systemNotification"></label>
                </div>
              </div><a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar bg-light-danger">
                      <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                    </div>
                  </div>
                  <div class="list-item-body flex-grow-1">
                    <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                  </div>
                </div></a><a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar bg-light-success">
                      <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                    </div>
                  </div>
                  <div class="list-item-body flex-grow-1">
                    <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                  </div>
                </div></a><a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar bg-light-warning">
                      <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                    </div>
                  </div>
                  <div class="list-item-body flex-grow-1">
                    <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                  </div>
                </div></a>
            </li>
            <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all notifications</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Jokowi Ganjar</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  
  <ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
        <h6 class="section-label mt-75 mb-0">Files</h6></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
        <div class="d-flex">
          <div class="me-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
          </div>
        </div><small class="search-data-size me-50 text-muted">&apos;17kb</small></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
        <div class="d-flex">
          <div class="me-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
          </div>
        </div><small class="search-data-size me-50 text-muted">&apos;11kb</small></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
        <div class="d-flex">
          <div class="me-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
          </div>
        </div><small class="search-data-size me-50 text-muted">&apos;150kb</small></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
        <div class="d-flex">
          <div class="me-75"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
          </div>
        </div><small class="search-data-size me-50 text-muted">&apos;256kb</small></a></li>
    <li class="d-flex align-items-center"><a href="#">
        <h6 class="section-label mt-75 mb-0">Members</h6></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
        <div class="d-flex align-items-center">
          <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
          </div>
        </div></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
        <div class="d-flex align-items-center">
          <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
          </div>
        </div></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
        <div class="d-flex align-items-center">
          <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
          </div>
        </div></a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
        <div class="d-flex align-items-center">
          <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
          </div>
        </div></a></li>
  </ul>
  <ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
        <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
  </ul>
  <!-- END: Header-->


  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item me-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
              <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                <defs>
                  <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                    <stop stop-color="#000000" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                  </lineargradient>
                  <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                  </lineargradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                    <g id="Group" transform="translate(400.000000, 178.000000)">
                      <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                      <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                      <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                      <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                      <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                    </g>
                  </g>
                </g>
              </svg></span>
            <h2 class="brand-text">Vuexy</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    {{-- MENU MENU MENU --}}
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="active nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
        </li>
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
        </li>
        <li class="nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Schedule</span></a>
          <ul class="menu-content">
          <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Create Schedule</span></a>
          </li>
          <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Schedule Request</span></a>
          </li>
        </ul>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">User</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/" target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate" data-i18n="Raise Support">Help</span></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body"><!-- Full calendar start -->
<section>
<div class="app-calendar overflow-hidden border">
  <div class="row g-0">
    <!-- Sidebar -->
    <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column" id="app-calendar-sidebar">
      <div class="sidebar-wrapper">
        <div class="card-body d-flex justify-content-center">
          <button
            class="btn btn-primary btn-toggle-sidebar w-100"
            data-bs-toggle="modal"
            data-bs-target="#add-new-sidebar"
          >
            <span class="align-middle">Add Event</span>
          </button>
        </div>
        <div class="card-body pb-0">
          <h5 class="section-label mb-1">
            <span class="align-middle">Team Filter</span>
          </h5>
          <div class="form-check mb-1">
            <input type="checkbox" class="form-check-input select-all" id="select-all" checked />
            <label class="form-check-label" for="select-all">View All</label>
          </div>
          <div class="calendar-events-filter">
            <div class="form-check form-check-danger mb-1">
              <input
                type="checkbox"
                class="form-check-input input-filter"
                id="personal"
                data-value="personal"
                checked
              />
              <label class="form-check-label" for="personal">Tim A</label>
            </div>
            <div class="form-check form-check-primary mb-1">
              <input
                type="checkbox"
                class="form-check-input input-filter"
                id="business"
                data-value="business"
                checked
              />
              <label class="form-check-label" for="business">Tim B</label>
            </div>
            <div class="form-check form-check-warning mb-1">
              <input type="checkbox" class="form-check-input input-filter" id="family" data-value="family" checked />
              <label class="form-check-label" for="family">Tim C</label>
            </div>
            <div class="form-check form-check-success mb-1">
              <input
                type="checkbox"
                class="form-check-input input-filter"
                id="holiday"
                data-value="holiday"
                checked
              />
              <label class="form-check-label" for="holiday">Tim D</label>
            </div>
            <div class="form-check form-check-info">
              <input type="checkbox" class="form-check-input input-filter" id="etc" data-value="etc" checked />
              <label class="form-check-label" for="etc">Tim E</label>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-auto">
        <img
          src="../../../app-assets/images/pages/calendar-illustration.png"
          alt="Calendar illustration"
          class="img-fluid"
        />
      </div>
    </div>
    <!-- /Sidebar -->

    <!-- Calendar -->
    <div class="col position-relative">
      <div class="card shadow-none border-0 mb-0 rounded-0">
        <div class="card-body pb-0">
          <div id="calendar"></div>
        </div>
      </div>
    </div>
    <!-- /Calendar -->
    <div class="body-content-overlay"></div>
  </div>
</div>
<!-- Calendar Add/Update/Delete event modal-->
<div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title">Add Event</h5>
      </div>
      <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
        <form class="event-form needs-validation" data-ajax="false" novalidate>
          <div class="mb-1">
            <label for="title" class="form-label">Agenda</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Description" required />
          </div>
          <div class="mb-1">
            <label for="select-label" class="form-label">Under Team</label>
            <select class="select2 select-label form-select w-100" id="select-label" name="select-label">
              <option data-label="primary" value="Business" selected>Tim A</option>
              <option data-label="danger" value="Personal">Tim B</option>
              <option data-label="warning" value="Family">Tim C</option>
              <option data-label="success" value="Holiday">Tim D</option>
              <option data-label="info" value="ETC">Tim E</option>
            </select>
          </div>
          <div class="mb-1 position-relative">
            <label for="start-date" class="form-label">Start Date</label>
            <input type="text" class="form-control" id="start-date" name="start-date" placeholder="Start Date" />
          </div>
          <div class="mb-1 position-relative">
            <label for="end-date" class="form-label">End Date</label>
            <input type="text" class="form-control" id="end-date" name="end-date" placeholder="End Date" />
          </div>
          <div class="mb-1">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input allDay-switch" id="customSwitch3" />
              <label class="form-check-label" for="customSwitch3">All Day</label>
            </div>
          </div>
          <div class="mb-1">
            <label for="event-url" class="form-label">Event URL</label>
            <input type="url" class="form-control" id="event-url" placeholder="https://www.google.com" />
          </div>
          <div class="mb-1 select2-primary">
            <label for="event-guests" class="form-label">Add Person</label>
            <select class="select2 select-add-guests form-select w-100" id="event-guests" multiple>
              <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
              <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
              <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
              <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
              <option data-avatar="9-small.png" value="Sandy Vega">Sandy Vega</option>
              <option data-avatar="11-small.png" value="Cheryl May">Cheryl May</option>
            </select>
          </div>
          <div class="mb-1">
            <label for="event-location" class="form-label">Location</label>
            <input type="text" class="form-control" id="event-location" placeholder="Enter Location" />
          </div>
          <div class="mb-1">
            <label class="form-label">Description</label>
            <textarea name="event-description-editor" id="event-description-editor" class="form-control"></textarea>
          </div>
          <div class="mb-1 d-flex">
            <button type="submit" class="btn btn-primary add-event-btn me-1">Add</button>
            <button type="button" class="btn btn-outline-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary update-event-btn d-none me-1">Update</button>
            <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Calendar Add/Update/Delete event modal-->
</section>
<!-- Full calendar end -->

      </div>
    </div>
  </div>
  <!-- END: Content-->


  <!-- BEGIN: Customizer-->
  <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
<!-- Customizer header -->
<div class="customizer-header px-2 pt-1 pb-0 position-relative">
  <h4 class="mb-0">Theme Customizer</h4>
  <p class="m-0">Customize & Preview in Real Time</p>

  <a class="customizer-close" href="#"><i data-feather="x"></i></a>
</div>

<hr />

<!-- Styling & Text Direction -->
<div class="customizer-styling-direction px-2">
  <p class="fw-bold">Skin</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input
        type="radio"
        id="skinlight"
        name="skinradio"
        class="form-check-input layout-name"
        checked
        data-layout=""
      />
      <label class="form-check-label" for="skinlight">Light</label>
    </div>
    <div class="form-check me-1">
      <input
        type="radio"
        id="skinbordered"
        name="skinradio"
        class="form-check-input layout-name"
        data-layout="bordered-layout"
      />
      <label class="form-check-label" for="skinbordered">Bordered</label>
    </div>
    <div class="form-check me-1">
      <input
        type="radio"
        id="skindark"
        name="skinradio"
        class="form-check-input layout-name"
        data-layout="dark-layout"
      />
      <label class="form-check-label" for="skindark">Dark</label>
    </div>
    <div class="form-check">
      <input
        type="radio"
        id="skinsemidark"
        name="skinradio"
        class="form-check-input layout-name"
        data-layout="semi-dark-layout"
      />
      <label class="form-check-label" for="skinsemidark">Semi Dark</label>
    </div>
  </div>
</div>

<hr />

<!-- Menu -->
<div class="customizer-menu px-2">
  <div id="customizer-menu-collapsible" class="d-flex">
    <p class="fw-bold me-auto m-0">Menu Collapsed</p>
    <div class="form-check form-check-primary form-switch">
      <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
      <label class="form-check-label" for="collapse-sidebar-switch"></label>
    </div>
  </div>
</div>
<hr />

<!-- Layout Width -->
<div class="customizer-footer px-2">
  <p class="fw-bold">Layout Width</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
      <label class="form-check-label" for="layout-width-full">Full Width</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
      <label class="form-check-label" for="layout-width-boxed">Boxed</label>
    </div>
  </div>
</div>
<hr />

<!-- Navbar -->
<div class="customizer-navbar px-2">
  <div id="customizer-navbar-colors">
    <p class="fw-bold">Navbar Color</p>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-white border selected" data-navbar-default=""></li>
      <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
      <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
      <li class="color-box bg-success" data-navbar-color="bg-success"></li>
      <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
      <li class="color-box bg-info" data-navbar-color="bg-info"></li>
      <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
      <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
    </ul>
  </div>

  <p class="navbar-type-text fw-bold">Navbar Type</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
      <label class="form-check-label" for="nav-type-floating">Floating</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
      <label class="form-check-label" for="nav-type-sticky">Sticky</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
      <label class="form-check-label" for="nav-type-static">Static</label>
    </div>
    <div class="form-check">
      <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
      <label class="form-check-label" for="nav-type-hidden">Hidden</label>
    </div>
  </div>
</div>
<hr />

<!-- Footer -->
<div class="customizer-footer px-2">
  <p class="fw-bold">Footer Type</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
      <label class="form-check-label" for="footer-type-sticky">Sticky</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
      <label class="form-check-label" for="footer-type-static">Static</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
      <label class="form-check-label" for="footer-type-hidden">Hidden</label>
    </div>
  </div>
</div>
</div>

  </div>
  <!-- End: Customizer-->

  <!-- Buynow Button-->
  {{-- <div class="buy-now"><a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy Now</a> --}}

  </div>
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <!-- BEGIN: Footer-->
  <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
  </footer>
  <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
  <!-- END: Footer-->


  <!-- BEGIN: Vendor JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="../../../app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
  <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
  <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
  <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../../../app-assets/js/core/app-menu.min.js"></script>
  <script src="../../../app-assets/js/core/app.min.js"></script>
  <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="../../../app-assets/js/scripts/pages/app-calendar-events.min.js"></script>
  <script src="../../../app-assets/js/scripts/pages/app-calendar.min.js"></script>
  <!-- END: Page JS-->

  <script>
    $(window).on('load',  function(){
      if (feather) {
        feather.replace({ width: 14, height: 14 });
      }
    })
  </script>
</body>
</html>
