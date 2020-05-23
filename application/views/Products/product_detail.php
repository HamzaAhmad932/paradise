<div class="osahan-breadcrumb">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Product Detail</a></li>                     
                  </ol>
               </div>
            </div>
         </div>
      </div>
      
      <section class="products_page">
         <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-5">
               <div class="shop-detail-left">
                  <div class="item-img-grid">
                     <div class="favourite-icon">
                        <a class="fav-btn" title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Save Ad">115 <i class="fa fa-heart"></i></a>
                     </div>
                     
                     <div id="sync1" class="owl-carousel">
                        <?php foreach($row as $r) :?>
                        <div class="item"><img alt="" src="<?php echo base_url().$r->img_path; ?>" class="img-responsive img-center"></div>
                       <?php endforeach; ?> 
                     </div>
                  
                  
                     <div id="sync2" class="owl-carousel">
                        <?php foreach($row as $r) :?>
                        <div class="item"><img alt="" src="<?php echo base_url().$r->img_path; ?>" class="img-responsive img-center"></div>
                         
                         <?php endforeach; ?>
                     </div>
                      
                  </div>
               </div>
            </div>
            <?php foreach($row as $r): ?>
            <div class="col-lg-7 col-md-7">
               <div class="shop-detail-right">
                  <div class="widget">
                     <div class="product-name">
                        <p class="text-danger text-uppercase"><i class="fa fa-cart-plus"></i>
                           <?php echo $r->cat_name; ?> 
                        </p>
                        <h1><?php echo $r->pro_title; ?></h1>
                         <span>Product Monthly Installments: <b><?php echo $r->pro_monthly_instal;?></b></span>
                     </div>
                     <div class="price-box">
                        <h5>
                           <span class="product-price">Price : <?php echo $r->pro_oprice; ?></span>
                        </h5>
                     </div>
                     <div class="ratings">
                        <div class="stars-rating">
                           <i class="fa fa-star active"></i>
                           <i class="fa fa-star active"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i> <span>(613)</span>
                           <span class="rating-links pull-right"> <a href="#">1 Review(s)</a> <span class="separator"> </span> <a href="#"><i class="icofont icofont-comment"></i> Add Your Review</a> </span>
                        </div>
                     </div>
                     <div class="short-description">
                        <h4>
                           Installment Calculator
                           <span class="pull-right">Availability: <strong class="badge badge-success">In Stock</strong></span>
                        </h4>
                        <p><?php echo $r->pro_des; ?></p>
                        <input value="<?php echo $r->pro_oprice; ?>" type="hidden" id="product_price">
                     </div>
                      
                     <div class="product-variation">
                        <div class="row">
                            <div class="col-sm-12">
                               <div class="form-group">
                                  <label class="control-label">Leasing Amount</label>
                                  <input class="form-control border-form-control" value="<?php echo $r->pro_oprice; ?>" type="text" name="leasing_amount" id="leasing_amount" disabled>
                               </div>
                            </div>
                            <div class="col-sm-12">
                               <div class="form-group">
                                  <label class="control-label">Down Payment (%)</label>
                                  <input class="form-control border-form-control" value="20" min="20" type="number" name="down_payment" id="down_payment_percentage">
                               </div>
                            </div>
                         </div>

                         <div class="row">
                            <div class="col-sm-12">
                               <div class="radio">
                                <label><input type="radio" name="optradio" month="3" class="installment_plan" value="18"> 3 months installment plan</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="optradio" month="6" class="installment_plan" value="28"> 6 months installment plan</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="optradio" month="12" class="installment_plan" value="38"> 12 months installment plan</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="optradio" month="18" class="installment_plan" value="45"> 18 months installment plan</label>
                              </div>
                            </div>
                         </div>
                         <br>
                         <div class="row" style="display: none;" id="monthly_installment_box">
                            <div class="col-sm-12">
                               <h4>Monthly installment (Rs.)</h4>
                               <h5 id="monthly_installment"></h5>
                            </div>
                         </div>
                         <br>
                        <form action="<?php echo base_url('index.php/Home/inquiry/'.$r->id)?>" method="POST" id="form" style="display: none;">
                           <input type="hidden" name="leasing_amount" id="leasing_amount_hidden">
                           <input type="hidden" name="installment_plan" id="installment_plan_hidden">
                           <input type="hidden" name="monthly_installment" id="monthly_installment_hidden">
                           <button class="btn btn-theme-round btn-lg"><i class="fa fa-shopping-cart"></i> Submit Inquiry</button>
                        </form>
                     </div>
                     
                  </div>
               </div>
            </div>
             <?php endforeach; ?>
         </div>
      </div>
      </section>
     