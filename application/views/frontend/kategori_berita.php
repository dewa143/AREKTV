<!--Feed-->
  <section class="bg-dark text-light">
    <div class="container">
			
		<?php foreach ($berita as $key => $value) { ?>
    <h2 class="text-light py-3 border-bottom"><?= $value->nama_kategori?></h2>
		<?php } ?>
      <div class="row">
        <div class="col-lg-9">
	<?php foreach ($berita as $key => $value) { ?>
          <div class="row align-items-top my-3 position-relative">
            <div class="col-5">
              <img src="<?= base_url('gambar_berita/'.$value->gambar); ?>" alt="" class="img-fluid feed-image d-inline-block">
            </div>
            <div class="col-7">
              <h1 class="h4"><?= $value->judul_berita?></h1>
              <p class="feed-text"><?= $value->tgl?> | <?= $value->nama_kategori?></p>
              <p class="d-none d-md-block"><?= substr(strip_tags($value->keterangan),0,300) ?>...</p>
              <a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>" class="stretched-link"></a>
            </div>
          </div>
					<?php } ?>
          <hr>

				<!--<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>-->



        </div>

		

        <!--Map-->
        <div class="col-lg-3">
          <aside class="trending mb-3">
            <div class="weather-thumbnail my-3 d-inline-block iklan text-dark bg-light">
              <div class="lead iklan-text">Iklan</div>
            </div>

            <div class="d-inline-block iklan text-dark bg-light">
              <div class="lead iklan-text">Iklan</div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
