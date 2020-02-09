<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url('css/admin_css/images/icon/logo.png') ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                      <li class="has-sub">
                            <a class="js-arrow" href="">
                                <i class="fas fa-tachometer-alt"></i>Member Manager</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="<?php echo site_url('Admin') ?>">ข้อมูลผู้ใช้งาน</a>
                              </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/edit_password/')?><?php echo $_SESSION['m_id'] ?> ">แก้ไขรหัสผ่าน</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/edit_img/')?><?php echo $_SESSION['m_id'] ?>">แก้ไขรูปโปรไฟล์</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/edit_data/') ?><?php echo $_SESSION['m_id'] ?>">แก้ไขข้อมูลUser</a>
                                </li>
                                <li>
                                    <a href="index4.html">แก้ไขสิทธิ์การใช้งาน</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin/blog') ;?>">
                                <i class="fas fa-chart-bar"></i>Blog Manager</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="index.html">แก้ไขรหัสผ่าน</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">แก้ไขรูปโปรไฟล์</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">แก้ไขข้อมูลUser</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">แก้ไขสิทธิ์การใช้งาน</a>
                                    </li>
                                </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('css/admin_css/images/icon/logo.png') ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Member Manager</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="<?php echo site_url('Admin') ?>">ข้อมูลผู้ใช้งาน</a>
                              </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/edit_password/')?><?php echo $_SESSION['m_id'] ?> ">แก้ไขรหัสผ่าน</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/edit_img/')?><?php echo $_SESSION['m_id'] ?>">แก้ไขรูปโปรไฟล์</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/edit_data/') ?><?php echo $_SESSION['m_id'] ?>">แก้ไขข้อมูลUser</a>
                                </li>
                                <li>
                                    <a href="index4.html">แก้ไขสิทธิ์การใช้งาน</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin/blog') ;?>">
                                <i class="fas fa-chart-bar"></i>Blog Manager</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input hidden class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit" hidden>
                                    <i class="zmdi zmdi-search" hidden></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url('img/profile/'.$_SESSION['m_img']); ?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['m_name']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url('img/profile/'.$_SESSION['m_img']); ?>" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['m_name']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['m_email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                              <div class="account-dropdown__item">
                                                  <a href="<?php echo site_url('Admin') ?>">
                                                      <i class="zmdi zmdi-account"></i>Admin Section</a>
                                              </div>
                                              <div class="account-dropdown__item">
                                                  <a href="<?php echo site_url('Mainpage/admin') ?>">
                                                      <i class="zmdi zmdi-settings"></i>Main Page</a>
                                              </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo site_url('Member/logout') ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
