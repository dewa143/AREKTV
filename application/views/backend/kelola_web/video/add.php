
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">video</h1>

</div>
<!-- Content Row -->
<div class="row">

<div class="container-fluid">

    <?php 
    if(isset($error_upload)){
        echo'<div class="alert alert-success alert-dismissible">
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'.$error_upload.'</div>';
    }
    echo validation_errors('<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>','</div>');
    echo form_open_multipart('admin/video/add');
    ?>
    
                <div class="form-group">
                    <label>Judul video</label>
                    <input type="text" name="judul_video" placeholder="Judul video" class="form-control" required>
                </div>
           

            <div class="form-group">
                <label>Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" type="text" required>
            </div>    
            <div class="form-group">
                <label>Biro</label>
                <select name="id_biro" class="form-control">
                    <option value="">>----Pilih biro----<</option>
                    <?php foreach ($biro as $key => $value) { ?>
                    <option value="<?= $value->id_biro ?>"><?= $value->biro ?></option>
                <?php } ?>
                </select>
            </div>

			<div class="form-group">
                    <label>ID Youtube</label>
                    <input type="text" name="link_video" placeholder="Link Video" class="form-control" required>
                </div>
           

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
           

            </div>
 <?php echo form_close(); ?>
     

</div>
</div>
