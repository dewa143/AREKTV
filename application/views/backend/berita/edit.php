<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit berita</h3>
    
    <?php 

    echo validation_errors('<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>','</div>');

    if(isset($error_upload)){
        echo'<div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'.$error_upload.'</div>';
    }

    echo form_open_multipart('admin/berita/edit/'.$berita->id_berita);
    ?>  
    
            <div class="form-group">
                <label>Reporter</label>
                <input type="text" name="reporter" value="<?= $berita->reporter ?>"  placeholder="Reporter" class="form-control">
            </div>

            
                <div class="form-group">
                    <label>Judul Berita</label>
                    <input type="text" name="judul_berita" value="<?= $berita->judul_berita ?>" placeholder="Judul Berita" class="form-control">
                </div>

			 <div class="form-group">
                    <label>Sumber Gambar</label>
                    <input type="text" name="sumber_gambar" value="<?= $berita->sumber_gambar ?>" placeholder="Sumber Gambar" class="form-control">
                </div>
					
            

             <div class="form-group">
                <img src="<?= base_url('gambar_berita/'.$berita->gambar) ?>" width="100px">
            </div>
            
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" type="text">
            </div>   
           
            <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" class="form-control">
                    <option value="<?= $berita->id_kategori ?> "><?= $berita->nama_kategori ?></option>
                    <?php foreach ($kategori as $key => $value) { ?>
                    <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                <?php } ?>
                </select>
            </div>

           
            <div class="form-group">
                <label>Keterangan</label>
                <textarea id="editor" name="keterangan" required><?= $berita->keterangan ?></textarea>
            </div>
          


            


            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
            <?php echo form_close(); ?>

            </div>

     

