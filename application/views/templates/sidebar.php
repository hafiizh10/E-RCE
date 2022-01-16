<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?= base_url('user/dashboard') ?>"><div class="main-logo" style="color: #006DF0; font-size: 43px; font-family: Roboto Condensed, sans-serif; cursor: pointer;"><?= $aplikasi['logo_menu']; ?></div></a>
            </div>
            <!-- QUERY MENU -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` JOIN `user_access_menu`
            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
            WHERE `user_access_menu`.`role_id` = ?
            ORDER BY `user_access_menu`.`menu_id` ASC ";
            $menu = $this->db->query($queryMenu, array($role_id))->result_array();
            ?>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                    <!-- LOOPING MENU -->
                    <?php foreach ($menu as $m) : ?>
                    <div style="background-color: #006DF0;"><p style="text-align: center; margin: auto;padding: 10px;"><?= $m['menu']; ?></p></div>
                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                    FROM `user_sub_menu` JOIN `user_menu` 
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                    WHERE `user_sub_menu`.`menu_id` = $menuId
                    AND `user_sub_menu`.`is_active` = 1";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>
                        <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                        <li style="background-color: #d4e8ff;">
                        <?php else : ?>
                        <li>
                        <?php endif; ?>
                            <a title="<?= $sm['title'] ?>" href="<?= base_url($sm['url']); ?>" aria-expanded="false"><span class="mini-click-non"><?= $sm['title'] ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <li>
                        <a title="Log Out" href="<?= base_url('auth/logout'); ?>" aria-expanded="false"><span class="mini-click-non">Keluar Aplikasi</span></a>
                    </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?= base_url('user/dashboard') ?>"><div class="main-logo" style="color: #006DF0; font-size: 45px; font-family: Roboto Condensed, sans-serif; cursor: pointer;"><?= $aplikasi['logo_menu']; ?></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" style="width: 28px; height: 28px;" />
                                                    <span class="admin-name"><?= $user['nama'] ?></span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i></a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span><strong>Level : <?= $user['level'] ?></strong></a>
                                                        </li>
                                                        <li><a href="<?= base_url('user'); ?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>Profil Saya</a>
                                                        </li>
                                                        <li><a href="<?= base_url('auth/logout'); ?>"><span class="edu-icon edu-locked author-log-ic"></span>Keluar Aplikasi</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- QUERY MENU -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` JOIN `user_access_menu`
            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
            WHERE `user_access_menu`.`role_id` = ?
            ORDER BY `user_access_menu`.`menu_id` ASC ";
            $menu = $this->db->query($queryMenu, array($role_id))->result_array();
            ?>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                    <!-- LOOPING MENU -->
                                    <?php foreach ($menu as $m) : ?>
                                        <li style="background-color: #006DF0; text-align: center; margin: auto; padding-top: 10px; padding-bottom: 10px; color: white; font-size: 18px;"><?= $m['menu']; ?></li>
                                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                                    <?php
                                        $menuId = $m['id'];
                                        $querySubMenu = "SELECT *
                                        FROM `user_sub_menu` JOIN `user_menu` 
                                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                        WHERE `user_sub_menu`.`menu_id` = $menuId
                                        AND `user_sub_menu`.`is_active` = 1";
                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                                        ?>

                                        <?php foreach ($subMenu as $sm) : ?>
                                        <?php if ($title == $sm['title']) : ?>
                                        <li class="nav-item active">
                                        <?php else : ?>
                                        <li class="nav-item">
                                        <?php endif; ?>
                                        <a href="<?= base_url($sm['url']); ?>"><?= $sm['title'] ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                    <li><a href="<?= base_url('auth/logout'); ?>">Keluar Aplikasi</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->