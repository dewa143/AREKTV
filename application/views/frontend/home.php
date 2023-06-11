

    <!--Featured video-->
    <section class="bg-dark pb-0 mb-3">
        <div class="container-fluid p-0">
            <div class="row bg-dark g-5">
                <div class="stream-thumbnail d-none d-lg-block col-lg-6 pb-0">
                    <video id="featured" class="featured">
            <source src="https://ams.juraganstreaming.com:5443/LiveApp/streams/arektv.m3u8" type="application/x-mpegURL">
            Browser tidak mendukung video
          </video>
                </div>
                <!-- <button type="button" id="close-button" class="btn-close btn-close-white d-none" aria-label="Close picture-in-picture"></button> -->

                <!--Jadwal tayang-->
                <div class="col-lg-6">
                    <div class="table-acara">
                        <table id="acara" class="table table-striped table-secondary table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Sesi</th>
                                    <th>acara</th>
                                </tr>
                            </thead>
														
                            <tbody><?php foreach ($program as $key => $value){?>
                                <tr>
                                    <td><?= $value->sesi?></td>
                                    <td><?= $value->nama_program?></td>
                                </tr>
<?php } ?>
                    
                            </tbody>
														
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Promo Acara-->
    <!-- <section class="bg-dark text-light">

    <h2 class="text-light text-center py-3 border-bottom border-light">Program</h2>
    <div class="text-center py-3 promoAcaraContainer">    
      <img src="<?php echo base_url(); ?>assets/acara klasika.jpeg" alt="Acara Klasika" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="<?php echo base_url(); ?>assets/promo klasika.mp4">
    
      <img src="<?php echo base_url(); ?>assets/acara wakul.jpeg" alt="Acara Wakul" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="https://youtu.be/Pt7_0Bn7dn0">
    
      <img src="<?php echo base_url(); ?>assets/acara mata indonesia.jpg" alt="Acara Mata Indonesia" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="<?php echo base_url(); ?>assets/promo mata indonesia.mp4">
    
      <img src="<?php echo base_url(); ?>assets/acara fenomenal.jpeg" alt="Acara Fenomenal" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="">
    
      <img src="<?php echo base_url(); ?>assets/acara aura muslimah.jpeg" alt="Acara Aura Muslimah" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="">
    </div>-->

    <!--Modal video-->
    <!--<div class="modal fade" id="promoAcara" tabindex="-1" aria-labelledby="promoAcaraLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
          <div class="modal-header p-1">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-0">
            <video id="promo" class="promo" height="auto" width="100%" controls>
              <source src="" type="video/mp4">
              Browser tidak mendukung audio
            </video>
          </div>
        </div>
      </div>
    </div>
  </section> -->


    <!--Promo Acara-->
    <section class="bg-dark">

        <h2 class="text-light text-center py-3 mb-3 border-bottom border-light">Program</h2>

        <!--Swiper-->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo base_url(); ?>assets/acara klasika.jpeg" alt="Acara Klasika" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="<?php echo base_url(); ?>assets/promo klasika.mp4">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url(); ?>assets/acara wakul.jpeg" alt="Acara Wakul" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="<?php echo base_url(); ?>assets/promo wakul.mp4">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url(); ?>assets/acara mata indonesia.jpg" alt="Acara Mata Indonesia" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="<?php echo base_url(); ?>assets/promo mata indonesia.mp4">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url(); ?>assets/acara fenomenal.jpeg" alt="Acara Fenomenal" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url(); ?>assets/acara aura muslimah.jpeg" alt="Acara Aura Muslimah" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url(); ?>assets/acara mata indonesia.jpg" alt="Acara Mata Indonesia" class="promoAcara img-fluid" data-bs-toggle="modal" data-bs-target="#promoAcara" data-bs-source="assets/promo mata indonesia.mp4">
                </div>
								
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!--Modal video-->
        <div class="modal fade" id="promoAcara" tabindex="-1" aria-labelledby="promoAcaraLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark">
                    <div class="modal-header p-1">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <video id="promo" class="promo" height="auto" width="100%" controls>
              <source src="" type="video/mp4">
              Browser tidak mendukung audio
            </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Feed-->
  <section class="bg-dark text-light">
    <h2 class="text-light text-center py-3 border-bottom border-light">Berita Terbaru</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
				
          <div class="row align-items-top my-3 position-relative">
						<?php foreach ($berita_terbaru as $key => $value){?>
            <div class="col-5">
              <img src="<?= base_url('gambar_berita/'.$value->gambar); ?>" class="img-fluid feed-image d-inline-block">
            </div>
            <div class="col-7">
              <h1 class="h4"><?= $value->judul_berita?></h1>
              <p class="feed-text"><?= $value->tgl?> | <?= $value->nama_kategori?></p>
              <p class="d-none d-md-block"><?= substr(strip_tags($value->keterangan),0,300) ?>...</p>
              <a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>" class="stretched-link"></a>
            </div>
						<?php } ?>
          </div>
          <hr>
          <div class="view-more row my-3 text-center">
            <a href="<?php echo base_url('home/berita')?>" class="text-light">View More</a>
          </div>

        </div>

        <!--Map-->
        <div class="col-lg-3">
          <aside class="trending mb-3">
            <div class="weather-thumbnail my-3 d-inline-block iklan text-dark bg-light">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9913.879860697836!2d112.70009471982385!3d-7.44868521054978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e15cb9a7e18f%3A0x2a7d6470ae3175b5!2sArek%20Televisi!5e0!3m2!1sen!2sid!4v1653030020120!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map-location" aria-label="Lokasi Arek TV"></iframe> -->
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
 
 