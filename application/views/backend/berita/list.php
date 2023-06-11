<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita</h1>
	<div class="text-secondary lead fw-normal" id="curr_date_time"></div>
</div>

<!-- Content Row -->
<div class="row">

<div class="container-fluid">
    <a href="<?= base_url('admin/berita/add'); ?>" class="btn btn-sm btn-success mb-3" ><i class="fas fa-plus fa-sm"></i> Tambah Berita</a>
    <?php 
    if(isset($error_upload)){
        echo'<div class="alert alert-success alert-dismissible">
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo $this->session->flashdata('pesan');
        echo'</div>';
    }

    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Reporter</th>
                <th>Tanggal</th>
                <th>Gambar</th>
				<th>Sumber Berita
                <th>Keterangan</th>
                <th colspan="3">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($berita as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->judul_berita ?></td>
                <td><?= $value->nama_kategori ?></td>
                <td><?= $value->reporter ?></td>
                <td><?= $value->tgl ?></td>
                <td><img src="<?= base_url('gambar_berita/'.$value->gambar)  ?>" width="100px"></td>
				<td><?= $value->sumber_gambar ?></td>
                <td><?= substr(strip_tags($value->keterangan),0,210) ?>...</td>
                <td>
                    <a href="<?= base_url('admin/berita/edit/'.$value->id_berita) ?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                    <a href="<?= base_url('admin/berita/delete/'.$value->id_berita) ?>" onclick="return confirm('Apakah berita ini Dihapus ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        
</div>

</div>

</div>

