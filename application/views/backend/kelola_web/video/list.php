<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Video</h1>
	<div class="text-secondary lead fw-normal" id="curr_date_time"></div>
</div>

<!-- Content Row -->
<div class="row">

<div class="container-fluid">
    <a href="<?= base_url('admin/video/add'); ?>" class="btn btn-sm btn-success mb-3" ><i class="fas fa-plus fa-sm"></i> Tambah video</a>
    <?php 
    if(isset($error_upload)){
        echo'<div class="alert alert-success alert-dismissible">
            <button type="button" class = "close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        echo $this->session->flashdata('pesan');
        echo'</div>';
    }

    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Biro</th>
                <th>Tanggal</th>
                <th>Thumbnail</th>
                <th>ID Youtube</th>
                <th colspan="3">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($video as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->judul_video ?></td>
                <td><?= $value->biro ?></td>
                <td><?= $value->tgl ?></td>
                <td><img src="<?= base_url('thumbnail_video/'.$value->thumbnail)  ?>" width="100px"></td>
				<td><?= $value->link_video ?></td>
                <td>
                    <a href="<?= base_url('admin/video/edit/'.$value->id_video) ?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                    <a href="<?= base_url('admin/video/delete/'.$value->id_video) ?>" onclick="return confirm('Apakah video ini Dihapus ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        
</div>

</div>

</div>

