   <div class="owl-carousel owl-carousel-slider">
      <?php foreach($slider as $r): ?>
         <div class="item">
            <a href="#"><img class="d-block img-fluid" src="<?php echo base_url().$r->img_path; ?>" alt="First slide"></a>
         </div>
      <?php endforeach; ?>
          
      </div>