  
  <main class="bg-dark">
    

    <section class="giro-secondary">
			  <h2 class="text-light py-3 border-bottom">Video Terbaru</h2>
      <div class="container text-light">
        <div class="row">

				<div class="col-md-4 my-3">
				<?php foreach ($video as $key => $value) { ?>
					<a href="<?= $value->link_video?>"</a> 
            <div class="biro-container-secondary">
						<img src="<?= base_url('thumbnail_video/'.$value->thumbnail); ?>" alt="biro-thumbnail" class="img-fluid biro-thumbnail">
							<div class="biro-caption-secondary">
                <h4 class="biro-title-secondary m-0"><?= $value->judul_video?></h4>
                <p class="biro-date-secondary text-secondary"><?= $value->tgl?> | <?= $value->biro?></p>
              </div>
            </div>
						<?php } ?>
        </div>

				

        </div>
      </div>
    </section>
  </main>
