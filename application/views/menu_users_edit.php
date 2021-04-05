<?php get_header(); ?>

<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon">
            <img src="<?php echo asset_url( 'img/logo/logo.png' ); ?>">
            </div>
            <div class="sidebar-brand-text mx-3">BukaLapak</div>
        </a>
        <hr class="sidebar-divider my-0">

        <?php foreach( $menu as $key => $value ) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url($value['url']); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span><?php echo $value['label']; ?></span></a>
            </li>
        <?php endforeach; ?>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
            aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Manage Products</span>
            </a>
            <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Products</h6>
                <a class="collapse-item" href="#">Submenu 1</a>
                <a class="collapse-item" href="#">Submenu 2</a>
                <a class="collapse-item" href="#">Submenu 3</a>
                <a class="collapse-item" href="#">Submenu 4</a>
                <a class="collapse-item" href="#">Submenu 5</a>
            </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
            aria-expanded="true" aria-controls="collapseOrders">
            <i class="fas fa-fw fa-tags"></i>
            <span>Manage Orders</span>
            </a>
            <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Orders</h6>
                <a class="collapse-item" href="#">Submenu 1</a>
                <a class="collapse-item" href="#">Submenu 2</a>
                <a class="collapse-item" href="#">Submenu 3</a>
            </div>
            </div>
        </li>

        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-1 small" placeholder="Cari disini"
                        aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                    Notifikasi
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">March 30, 2021</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">March 29, 2021</div>
                        $290.29 has been deposited into your account!
                    </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">March 27, 2021</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan semua notifikasi</a>
                </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-warning badge-counter">2</span>
                </a>
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                    Pesan
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?php echo asset_url( 'img/man.png' ); ?>" style="max-width: 60px" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                        having.</div>
                        <div class="small text-gray-500">Udin Cilok · 58m</div>
                    </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?php echo asset_url( 'img/girl.png' ); ?>" style="max-width: 60px" alt="">
                        <div class="status-indicator bg-default"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                        say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Jaenab · 2w</div>
                    </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Baca semua pesan</a>
                </div>
                </li>
            
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle" src="<?php echo asset_url( 'img/boy.png' ); ?>" style="max-width: 60px">
                    <span class="ml-2 d-none d-lg-inline text-white small">Mimin Ganteng</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                    </a>
                    <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Pengaturan
                    </a>
                    <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Log Aktivitas
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                    </a>
                </div>
                </li>
            </ul>
            </nav>
            <!-- Topbar -->

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Users</h1>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item"><a href="./">Menu Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>

            <div class="row mb-3">
                <!-- Invoice Example -->
                <div class="col-xl-12 col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                    <a class="m-0 float-right btn btn-danger btn-sm" href="./">Back <i
                        class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="container">
                    <form action="<?php echo base_url('admin/user/update/'.$data_users[0]['id']); ?>" 
                        method="post">
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control"
                                    value="<?php echo $data_users[0]['username']; ?>">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                           <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control"
                                    value="<?php echo $data_users[0]['email']; ?>">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="pwd" class="form-control"
                                    placeholder="input jika ingin mengubah">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Tambah" class="btn btn-primary"/>
                        </div>
                    </form>
                    </div>
                    <div class="card-footer"></div>
                </div>
                </div>
                
            </div>
            <!--Row-->

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>Yakin ingin keluar?</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Kembali</button>
                    <a href="login.html" class="btn btn-primary">Keluar</a>
                    </div>
                </div>
                </div>
            </div>

            </div>
            <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
                <b><a href="https://github.com/ryanfoxee/" target="_blank">ryanfoxee</a></b>
                </span>
            </div>
            </div>
        </footer>
        <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
</body>

<?php get_footer(); ?>