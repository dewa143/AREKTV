<!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0 border-bottom">
    <div class="container-fluid pe-0">

      <a class="navbar-brand logoarek py-2 py-lg-0" href="<?php echo base_url('home')?>">
        <img src="<?php echo base_url(); ?>assets/logoarek.png" alt="Logo Arek TV" class="img-fluid" width="40em">
        <p class="navbar-text d-inline  logoarek-text text-light fw-bold" >Arek TV</p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--offcanvas-->
      <div class="offcanvas offcanvas-start bg-dark lead" id="sidebar" tabindex="-1" aria-labelledby="sidebar-label">
        <!-- <div class="collapse navbar-collapse mb-3 mb-lg-0" id="navbarSupportedContent"> -->
          <div class="offcanvas-header">
            <div class="offcanvas-title">
              <img src="<?php echo base_url(); ?>assets/logoarek.png" alt="Logo Arek TV" class="img-fluid" width="40em">
              <p class="d-inline text-light text-start text-decoration-none bg-dark fw-bold logoarek-text " >Arek TV</p>
              <button type="button" class="btn-close btn-close-white" id="close-sidebar" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
          </div>
          
          <ul class="navbar-nav nav-fill mb-3 mb-lg-0 w-100">
            <!-- <li class="nav-item my-3 my-lg-0 d-lg-none">
              <a class="nav-link" href="#">
                <img src="assets/logoarek.png" alt="Logo Arek TV" class="img-fluid" width="40em">
                <p class="navbar-text d-inline logoarek-text text-light fw-bold" >Arek TV</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link py-4 pt-lg-2 pb-lg-3 active" aria-current="page" href="<?php echo base_url('home')?>">Home</a>
            </li>
            <li class="nav-item dropdown">
							
						<?php $kategori = $this->m_home->data_kategori(); ?>
              <a class="nav-link dropdown-toggle py-4 pt-lg-2 pb-lg-3" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
              </a>
              <ul class="dropdown-menu" aria-labelledby="kategori">
								<?php foreach ($kategori as $key => $value) { ?>
                <li><a href="<?= base_url('home/kategori/'.$value->id_kategori)?>" class="dropdown-item"> <?= $value->nama_kategori ?></a></li>
                <?php } ?>
								
              </ul>
							
            </li>

						<li class="nav-item dropdown">
							
							<?php $biro = $this->M_home->data_biro(); ?>
								<a class="nav-link dropdown-toggle py-4 pt-lg-2 pb-lg-3" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Biro
								</a>
								<ul class="dropdown-menu" aria-labelledby="biro">
									<?php foreach ($biro as $key => $value) { ?>
									<li><a href="<?= base_url('home/biro/'.$value->id_biro)?>" class="dropdown-item"> <?= $value->biro ?></a></li>
									<?php } ?>
									
								</ul>
								
							</li>
						
            <li class="nav-item">
              <a class="nav-link py-4 pt-lg-2 pb-lg-3" href="<?php echo base_url('home/about')?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link py-4 pt-lg-2 pb-lg-3" href="<?php echo base_url('home/contact')?>">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link py-4 pt-lg-2 pb-lg-3" href="<?= base_url('admin/login') ?>"><i class="bi bi-box-arrow-in-right"></i></a>
            </li>
          </ul>
          <!-- <form class="navbar-text" role="search">
            <input type="search" class="form-control" placeholder="Search" aria-label="Search content" aria-describedby="search-button">
            <button class="btn btn-secondary" type="button" id="search-button"><i class="bi bi-search"></i></button>
          </form><br> -->
        <!-- </div> -->
      </div>

    </div>
  </nav>

