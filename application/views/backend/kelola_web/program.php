<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Program</h1>
		<div class="text-secondary lead fw-normal" id="curr_date_time"></div>
</div>

<!-- Content Row -->
<div class="row">

<div class="container-fluid">
<button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambah_program"><i class="fas fa-plus fa-sm"></i> Tambah program</button>
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
                <th>program</th>
				<th>sesi</th>
                <th colspan="3">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($program as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->nama_program ?></td>
				<td><?= $value->sesi ?></td>
                <td>
                <button class="btn btn-xs btn-success"data-toggle="modal" data-target="#edit_program<?= $value->id_program ?>"><i class="fa fa-edit"></i></button>
                <a href="<?= base_url('admin/program/delete/'.$value->id_program) ?>" onclick="return confirm('Apakah data ini Dihapus ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

</div>

</div>

<!-- Modal add-->
<div class="modal fade" id="tambah_program" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah program</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/program/add'; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>program</label>
                <input type="text" name="nama_program" placeholder="Program" class="form-control">
            </div>
			<div class="form-group">
                <label>sesi</label>
                <input type="text" name="sesi" placeholder="00.00 - 00.00" class="form-control">
            </div>
        
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit-->
<?php foreach ($program as $key => $value) { ?>
<div class="modal fade" id="edit_program<?= $value->id_program ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit program</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open('admin/program/edit/'. $value->id_program); ?>

            <div class="form-group">
                <label>program</label>
                <input type="text" name="nama_program" value="<?= $value->nama_program ?>" class="form-control">
            </div>
			<div class="form-group">
                <label>sesi</label>
                <input type="text" name="sesi" value="<?= $value->sesi ?>" class="form-control">
            </div>
        
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php } ?>
