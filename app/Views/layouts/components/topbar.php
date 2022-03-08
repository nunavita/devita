<nav class="navbar navbar-expand navbar-light bg-dark topbar md-4 static-top shadow">
    <!-- sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="tobar-divider d-none d-sm-block"></div>
        <!-- nav item - nav information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php //echo user()->username ?></span>
            <img class="img-profile rounded-circle"
                src ="<?= base_url('assets/img/undraw_provile.svg') ?>">
            </a>
            <!-- dropdown - user information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated-grow-in"
                aria labelledby="userDropdown">
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
                </a>
            </div>
        </li>   
    </ul>
</nav>