<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit video</h3>
    
    <?php 

    echo validation_errors('<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>','</div>');

    if(isset($error_upload)){
        echo'<div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'.$error_upload.'</div>';
    }

    echo form_open_multipart('admin/video/edit/'.$video->id_video);
    ?>  
    
            

            
                <div class="form-group">
                    <label>Judul video</label>
                    <input type="text" name="judul_video" value="<?= $video->judul_video ?>" placeholder="Judul video" class="form-control">
                </div>


             <div class="form-group">
                <img src="<?= base_url('thumbnail_video/'.$video->thumbnail) ?>" width="100px">
            </div>
            
            <div class="form-group">
                <label>thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" type="text">
            </div>   
           
            <div class="form-group">
                <label>Biro</label>
                <select name="id_biro" class="form-control">
                    <option value="<?= $video->id_biro ?> "><?= $video->biro ?></option>
                    <?php foreach ($biro as $key => $value) { ?>
                    <option value="<?= $value->id_biro ?>"><?= $value->biro ?></option>
                <?php } ?>
                </select>
            </div>

			<div class="form-group">
                <label>ID Youtube Video</label>
                <input type="text" name="link_video" value="<?= $video->link_video ?>" placeholder="Link Video" class="form-control">
            </div>   
           
          


            


            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
            <?php echo form_close(); ?>

            </div>

     

