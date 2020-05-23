
      <section class="map-contact padding-none">
         <h6 class="sr-only">validator.w3</h6>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501889.0795673826!2d73.15687918966267!3d31.00357561172526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964aa569e7355%3A0x8fbd263103a38861!2sPunjab!5e0!3m2!1sen!2sin!4v1503422781241" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
      <section class="about_page">
         <div class="container">
            <div class="section-header section-header-center text-center">
               <h3 class="heading-design-center-h3">
                  contact information
               </h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque<br> lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. </p>
               <br>
            </div>
            <?php foreach($contact as $r): ?>
            <div class="section-header section-header-center text-center">
               <h3 class="heading-design-center-h3">
                 <?php echo $r->city_name; ?>
               </h3>
            </div>
            <div class="row">

               <div class="col-lg-8 col-md-8 mx-auto">
                  <div class="row">
                     <div class="col-lg-4 col-md-4">
                        <div class="about_page_widget widget">
                           <i class="fa fa-iphone"></i>
                           <h5>Phone</h5>
                           <h2><?php echo $r->phone; ?></h2>
                            
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="about_page_widget widget">
                           <i class="fa fa-location"></i>
                           <h5>Address</h5>
                           <h2><?php echo $r->address; ?></h2>
                           
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="about_page_widget widget">
                           <i class="fa fa-email"></i>
                           <h5>Email</h5>
                           <h2><?php echo $r->email; ?></h2>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
         </div>
      </section>
      <section class="our-team-main">
         <div class="container">
            <div class="section-header section-header-center text-center">
               <h3 class="heading-design-center-h3">
                  Send us a message
               </h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque<br> lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. </p>
               <br>
            </div>
            <div class="row">
               <div class="col-lg-8 col-md-8 mx-auto">
                  <div class="widget">
                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <label class="control-label">Your Name <span class="required">*</span></label>
                                 <input class="form-control border-form-control" value="" placeholder="Enter Name" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label class="control-label">Email Address <span class="required">*</span></label>
                                 <input class="form-control border-form-control " value="" placeholder="ex@gmail.com" type="email">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label class="control-label">Phone <span class="required">*</span></label>
                                 <input class="form-control border-form-control" value="" placeholder="Enter Phone" type="number">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <label class="control-label">Your Message <span class="required">*</span></label>
                                 <textarea class="form-control border-form-control"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 text-right">
                              <button type="button" class="btn btn-outline-danger"> Cencel </button>
                              <button type="button" class="btn btn-outline-success"> Send Message </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
     