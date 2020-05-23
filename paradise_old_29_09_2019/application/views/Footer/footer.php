<section class="top-brands">
         <div class="container">
            <div class="section-header">
               <h5 class="heading-design-h5">Top Brands <span class="badge badge-primary"></span></h5>
            </div>
            <div class="owl-carousel owl-carousel-brands">
               <?php foreach($top_brands as $r): ?>
               <div class="item">
                  <a href="#"><img class="img-responsive" src="<?php echo base_url().$r->img_path; ?>" width="70" height="62" alt=""></a>
               </div>
            <?php endforeach; ?>
               
   
            </div>
         </div>
      </section>
      <footer>
         <section class="footer-Content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3">
                     <div class="footer-widget">
                        <h3 class="block-title">About</h3>
                        <div class="textwidget">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est,  Sed ex est, consectetur eget consectetur, Lorem ipsum dolor sit amet...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                      
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                     
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                      
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <section class="services-block services-block-footer">
<h6 class="sr-only">Services List</h6>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-6 d-flex">
                  <div class="item d-flex align-items-center">
                     <div class="icon"><i class="fa fa-truck text-primary" aria-hidden="true"></i></div>
                     <div class="text"><span class="text-uppercase">Free shipping &amp; return</span><small>Free Shipping over $300</small></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 d-flex">
                  <div class="item d-flex align-items-center">
                     <div class="icon"><i class="fa fa-money text-primary" aria-hidden="true"></i></div>
                     <div class="text"><span class="text-uppercase">Money back guarantee</span><small>30 Days Money Back</small></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 d-flex">
                  <div class="item d-flex align-items-center">
                     <div class="icon"><i class="fa fa-headphones text-primary" aria-hidden="true"></i></div>
                     <div class="text"><span class="text-uppercase">020-800-456-747</span><small>24/7 Available Support</small></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 d-flex">
                  <div class="item d-flex align-items-center">
                     <div class="icon"><i class="fa fa-shield text-primary" aria-hidden="true"></i></div>
                     <div class="text"><span class="text-uppercase">Secure Payment</span><small>Secure Payment</small></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="footer">
<h6 class="sr-only">Services List</h6>
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="footer-logo pull-left hidden-xs">
                     <img alt="" src="<?php echo base_url('assets/images/par_logo.png'); ?>" width="129" height="30" class="img-responsive">
                  </div>
                  <div class="footer-links">
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        
                     </ul>
                  </div>
                  <div class="copyright">
                     <p>© Copyright 2019 Paradise
                         
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                  <div class="social-icon">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-linkedin"></i></a>
                     <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
       
      <!-- Bootstrap Core JavaScript -->
      <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
      <!-- Custom js -->
      <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
      <!-- Select2 -->
      <link href="<?php echo base_url('assets/js/select2.min.css'); ?>" rel="stylesheet" />
      <script src="<?php echo base_url('assets/js/select2.min.js'); ?>"></script>
      <!-- Owl Carousel -->
      <script src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>
   </body>
</html>