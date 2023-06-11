<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Contact</h1>
		<div class="text-secondary lead fw-normal" id="curr_date_time"></div>
</div>

<!-- Content Row -->
<div class="row">

<div class="container-fluid">
    <?php
    
      if($this->session->flashdata('pesan')) {
        echo'<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>';

        echo $this->session->flashdata('pesan');
        echo '</div>';
    }

    ?>
    <table class="table table-striped table-bordered" id="dataTable-eXample" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Pesan</th>
                <th colspan="3">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($hubungi_kami as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->nama ?></td>
				<td><?= $value->email ?></td>
				<td><?= $value->subject ?></td>
				<td><?= $value->pesan ?></td>
                <td>
                <button class="btn btn-xs btn-success"data-toggle="modal" data-target="#balas_email<?= $value->id_hubungi_kami?>"><i class="fa fa-paper-plane"></i></button>
                <a href="<?= base_url('admin/contact/delete/'.$value->id_hubungi_kami) ?>" onclick="return confirm('Apakah data ini Dihapus ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

</div>

</div>

<!-- Modal edit-->
<?php foreach ($hubungi_kami as $key => $value) { ?>
<div class="modal fade" id="balas_email<?= $value->id_hubungi_kami ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Balas Email</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open('admin/contact/balas_email_aksi'); ?>

			     <div class="form-group">
                <label>Email</label>
								<input type="hidden" name="id_hubungi_kami" value="<?= $value->id_hubungi_kami?>">
                <input type="text" name="email" value="<?= $value->email ?>" class="form-control" readonly>
            </div>
						<div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" value="<?= $value->subject ?>" class="form-control" readonly>
            </div>
						<div class="form-group">
                <label>Pesan</label>
                <textarea  type="text" name="pesan" value="" class="form-control"></textarea>
							</div>

        
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php } ?>
