

<main class="bg-dark">
    <div class="container text-light mt-5">
      <div class="row">
        <div class="col-lg-9 col-md-8">
          <h1><?=$berita->judul_berita?></h1>
          <div class="author text-secondary">
           <?=$berita->tgl?> 
          
          </div>

          <figure class="figure">
            <img src="<?= base_url('gambar_berita/'.$berita->gambar); ?>" alt="" class="figure-image img-fluid">
            <figcaption class="figure-caption mt-3"><?=$berita->sumber_gambar?></figcaption>
          </figure>

          <article>
            <p><?=$berita->keterangan?></p>
      
          </article>
        </div>

        <!-- Trending -->
        <div class="col-lg-3 col-md-4 justify-content-center mt-5">
          <aside class="trending">
            <div class="iklan-trending bg-light mb-3">
              <div class="lead iklan-text text-dark">Iklan</div>
            </div>
            <div class="iklan-trending bg-light mb-3">
              <div class="lead iklan-text text-dark">Iklan</div>
            </div>
            <h4 class="text-light text-center py-2 border-bottom border-secondary">Berita Terbaru</h4>
						<?php foreach ($berita_terbaru as $key => $value){?>
            <div class="news-portal position-relative d-inline-block my-3">
              <img src="<?= base_url('gambar_berita/'.$value->gambar); ?>" alt="" class="img-fluid d-inline-block portal-image">
              <h6 class="d-inline-block portal-text ps-2"><?= substr (strip_tags($value->judul_berita),0,73)?>...</h6>
              <a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>" class="stretched-link"></a>
            </div>
            <hr>
  <?php } ?>
          </aside>
        </div>
      </div>
    </div>
  </main>

