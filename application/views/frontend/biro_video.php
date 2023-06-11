  
  <main class="bg-dark">
    

    <section class="giro-secondary">
		<?php foreach ($video as $key => $value) { ?>
			  <h2 class="text-light py-3 border-bottom"><?=$value->biro?></h2>
		<?php } ?>
      <div class="container text-light">
        <div class="row">

				<div class="col-md-4 my-3">
				<?php foreach ($video as $key => $value) { ?>
					<a href="<?php echo base_url('home/view/'.$value->slug_video)?>"</a> 
            <div class="biro-container-secondary">
              <img src="<?= base_url('thumbnail_video/'.$value->thumbnail); ?>" alt="biro-thumbnail" class="img-fluid biro-thumbnail">
							<div class="biro-caption-secondary">
                <h4 class="biro-title-secondary m-0"><?= $value->judul_video?></h4>
                <p class="biro-date-secondary text-secondary"><?= $value->tgl?> | <?= $value->biro?>  </p>
              </div>
            </div>
						<?php } ?>
        </div>

				

        </div>
      </div>
    </section>
  </main>
