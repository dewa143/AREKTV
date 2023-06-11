<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Biro</h1>
		<div class="text-secondary lead fw-normal" id="curr_date_time"></div>
</div>

<!-- Content Row -->
<div class="row">

<div class="container-fluid">
<button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambah_biro"><i class="fas fa-plus fa-sm"></i> Tambah biro</button>
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
                <th>biro</th>
                <th colspan="3">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($biro as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->biro ?></td>
                <td>
                <button class="btn btn-xs btn-success"data-toggle="modal" data-target="#edit_biro<?= $value->id_biro ?>"><i class="fa fa-edit"></i></button>
                <a href="<?= base_url('admin/biro/delete/'.$value->id_biro) ?>" onclick="return confirm('Apakah data ini Dihapus ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

</div>

</div>

<!-- Modal add-->
<div class="modal fade" id="tambah_biro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah biro</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/biro/add'; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>biro</label>
                <input type="text" name="biro" class="form-control">
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
<?php foreach ($biro as $key => $value) { ?>
<div class="modal fade" id="edit_biro<?= $value->id_biro ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit biro</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open('admin/biro/edit/'. $value->id_biro); ?>

            <div class="form-group">
                <label>biro</label>
                <input type="text" name="biro" value="<?= $value->biro ?>" class="form-control">
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
