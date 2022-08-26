<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/prism.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.css') }}">
    <!-- App css-->


    {{-- <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"> --}}
    <!-- Responsive css-->
    {{-- <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css"> --}}


    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/color-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">


    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body>
    <!-- Loader starts-->
    {{-- <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div> --}}
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" :src="'storage/image/logo/logo.png'" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="storage/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="storage/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="storage/assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="storage/assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <nav>
            <div class="main-navbar">
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="../theme/index.html" target="_blank"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="anchor"></i><span>Starter kit</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a class="submenu-title" href="javascript:void(0)">color version<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="index.html">Layout Light</a></li>
                          <li><a href="layout-dark.html">Layout Dark</a></li>
                        </ul>
                      </li>
                      <li>     <a class="submenu-title" href="javascript:void(0)">Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="boxed.html">Boxed</a></li>
                          <li><a href="layout-rtl.html">RTL             </a></li>
                        </ul>
                      </li>
                      <li>     <a class="submenu-title" href="javascript:void(0)">Footers<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="footer-light.html">Footer Light</a></li>
                          <li><a href="footer-dark.html">Footer Dark</a></li>
                          <li><a href="footer-fixed.html">Footer Fixed</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="http://support.pixelstrap.com/help-center" target="_blank"><i data-feather="headphones"></i><span>Raise Support</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="https://docs.pixelstrap.com/viho/document/" target="_blank"><i data-feather="file-text"></i><span>Documentation                                    </span></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Layout Light</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
                    <li class="breadcrumb-item">Starter Kit</li>
                    <li class="breadcrumb-item">Color Version</li>
                    <li class="breadcrumb-item active">Layout Light</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Kick start your project development !</h5>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, viho Admin provides useful features to kick start your project development with no efforts !</p>
                    <ul>
                      <li>
                        <p>viho Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.</p>
                      </li>
                      <li>
                        <p>Every components in viho Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.</p>
                      </li>
                      <li>
                        <p>It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.</p>
                      </li>
                    </ul>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, viho Admin provides useful features to kick start your project development with no efforts !&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;viho Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Every components in viho Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>What is starter kit ?</h5>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <p>Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time.</p>
                    <ul>
                      <li>
                        <p>Each layout includes basic components only.</p>
                      </li>
                      <li>
                        <p>Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.</p>
                      </li>
                      <li>
                        <p>Using template engine to generate whole template quickly with your selected layout and other custom changes. </p>
                      </li>
                    </ul>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time. &lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;Each layout includes basic components only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Using template engine to generate whole template quickly with your selected layout and other custom changes.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>How to use starter kit ?</h5>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <p><span class="f-w-600">HTML</span></p>
                    <p>If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.</p>
                    <p><span class="f-w-600">PUG</span></p>
                    <p>To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.</p>
                    <div class="alert alert-primary inverse" role="alert"><i class="icon-info-alt"></i>
                      <h5>Tips!</h5>
                      <p>Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.</p>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;HTML&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;PUG&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.&lt;/p&gt;
&lt;div class="alert alert-primary inverse" role="alert"&gt;
&lt;i class="icon-info-alt"&gt;&lt;/i&gt;
&lt;h5&gt;Tips!&lt;/h5&gt;
&lt;p&gt;Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.&lt;/p&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Simple Card</h5>
                  </div>
                  <div class="card-body">
                    <h6>HTML Ipsum Presents</h6>
                    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                                          semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean
                                                          fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
                    </p>
                    <h6>Header Level 2</h6>
                    <ol>
                      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>
                    <div class="figure d-block">
                      <blockquote class="blockquote">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                          tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                        </p>
                      </blockquote>
                    </div>
                    <h4>Header Level<span> 3</span></h4>
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                      <li>Aliquam tincidunt mauris eu risus.</li>
                    </ul>
                    <pre>#header h1 a {
  display: block;
  width: 300px;
  height: 80px;
}</pre>
                    <dl>
                      <dt>Definition list</dt>
                      <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                      <dt>Lorem ipsum dolor sit amet</dt>
                      <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>With Header</h5>
                  </div>
                  <div class="card-body">
                    <h5>Content title</h5>
                    <p>Add a heading to card with <code>.card-header.pb-0</code> class</p>
                    <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header.pb-0 </code> & <code>.card-title</code> class to add heading.</p>
                    <p>Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h5>With Header & No Border</h5>
                  </div>
                  <div class="card-body">
                    <h5>Content title</h5>
                    <p>Add a heading to card with <code>.card-header.pb-0 </code> class & without header border<code>.border-bottom-0</code> class.</p>
                    <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header.pb-0 </code> & <code>.card-title</code> class to add heading.</p>
                    <p>Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->


    <script src="{{ asset('backend/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('backend/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('backend/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tooltip-init.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
    <script src="{{ asset('backend/assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
