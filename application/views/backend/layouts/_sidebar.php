<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
<img src="<?php echo base_url(); ?>assets/logoarek.png" alt="Logo Arek TV" class="img-fluid" width="40em">
    <div class="sidebar-brand-text mx-3">AREK TV</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Kelola Berita dan Video</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="<?php echo base_url('admin/kategori')?>">Kategori</a>
            <a class="collapse-item" href="<?php echo base_url('admin/berita') ?>">Berita</a>
			<a class="collapse-item" href="<?php echo base_url('admin/biro')?>">Biro</a>
            <a class="collapse-item" href="<?php echo base_url('admin/video') ?>">Video</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Kelola Web</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/program')?>">Program</a>
            <a class="collapse-item" href="<?php echo base_url('admin/contact')?>">Contact</a>
        </div>
    </div>
</li>

<!-- Nav Item - web -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/login/logout') ?>">
        <i class="fa fa-sign-out-alt"></i>
        <span>Log Out</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->
