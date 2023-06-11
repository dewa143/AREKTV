 
<main class="bg-dark">
    

    <section class="giro-secondary">
			  
      <div class="container text-light">
        <div class="row">

          <div class="col-md-7 my-6">
            <div class="biro-container-secondary">
				<div class="biro-caption-secondary">
                  <h2 class="biro-title-secondary m-0"><?=$video->judul_video?></h2>
                   <p class="biro-date-secondary text-secondary"><?=$video->tgl?></p>
                </div>
								
  				  <iframe alt="biro-thumbnail" class="img-fluid biro-thumbnail"  src='https://www.youtube.com/embed/<?=$video->link_video ?>' frameborder="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p class="biro-title-secondary m-0">Video Berita Arek Televisi dapat juga disaksikan melalui Youtube Channel Arek TV - BERITA </p>
					<hr>
            </div>
		
			
          </div>
        </div>
      
    </section>
  </main>
