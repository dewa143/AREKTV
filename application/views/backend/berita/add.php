
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">berita</h1>

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
    echo form_open_multipart('admin/berita/add');
    ?>
    
            <div class="form-group">
                <label>Reporter</label>
                <input type="text" name="reporter" placeholder="Reporter" class="form-control" required>
            </div>
            
            
                <div class="form-group">
                    <label>Judul Berita</label>
                    <input type="text" name="judul_berita" placeholder="Judul Berita" class="form-control" required>
                </div>
            <div class="form-group">
                    <label>Sumber Gambar</label>
                    <input type="text" name="sumber_gambar" placeholder="Sumber Gambar" class="form-control" required>
                </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" type="text" required>
            </div>    
            <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" class="form-control">
                    <option value="">>----Pilih Kategori----<</option>
                    <?php foreach ($kategori as $key => $value) { ?>
                    <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Keterangan berita</label>
                <textarea name="keterangan" id="editor"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
           

            </div>
 <?php echo form_close(); ?>
     

</div>
</div>
