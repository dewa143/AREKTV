	<?php
    
		if($this->session->flashdata('pesan')) {
			echo'<div class="alert alert-success alert-dismissible">
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

			echo $this->session->flashdata('pesan');
			echo '</div>';
	}

	?>
	<header class="bg-arek text-light text-center p-4 mb-5">
    <h1 class="display-5">Hubungi Kami</h1>
  </header>

  <!--Contact Details-->
  <section>
    <div class="container text-md-center text-light border-bottom border-light">
      <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
          <h4>Sales</h4>
          <p>sales@arek.tv</p>
          <p>admin@arek.tv</p>
        </div>
        <div class="col-md-4 mb-3">
          <h4>Kantor</h4>
          <p>Ruko Pondok Mutiara K2-A</p>
          <p>Sidoarjo 61226</p>
          <p>Telp. 031-99707789</p>
        </div>
      </div>
    </div>
  </section>

  <!--Contact Form-->
  <div class=" bg-dark container-md text-light my-5">
    <h4 class="display-6 w-130 text-center">Hubungi Kami</h4>
    <div class="row justify-content-center">
      <div class="col-lg-3">
        <form action="<?php echo base_url().'home/kirim_pesan'; ?>" method="post" enctype="multipart/form-data">
				<div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
						<div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
						<div class="mb-3">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control">
            </div>
						<div class="mb-3">
                <label>Pesan</label>
                <textarea type="text" name="pesan" class="form-control" style="height: 100px;"></textarea>
            </div>
          <button type="submit" class="btn btn-outline-success rounded-pill">Kirim</button>
        </form>
      </div>
    </div>
  </div>
