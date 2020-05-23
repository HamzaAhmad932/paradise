<div class="osahan-breadcrumb">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Pages</a></li>
                     <li class="breadcrumb-item active">Page Name</li>
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
                        <?php foreach($images as $r) :?>
                        <div class="item"><img alt="" src="<?php echo base_url().$r->image_url; ?>" class="img-responsive img-center"></div>
                       <?php endforeach; ?> 
                     </div>
                  
                  
                     <div id="sync2" class="owl-carousel">
                        <?php foreach($images as $r) :?>
                        <div class="item"><img alt="" src="<?php echo base_url().$r->image_url; ?>" class="img-responsive img-center"></div>
                         
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
                           Quick Overview  
                           <span class="pull-right">Availability: <strong class="badge badge-success">In Stock</strong></span>
                        </h4>
                        <p><?php echo $r->pro_des; ?></p>
                     </div>
                      
                     <div class="product-variation">
                        <form action="#" method="post">
                           <span>Quantity : </span> 
                           <div class="input-group quantity-input">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-theme-round btn-number btn-lg" disabled="disabled" data-type="minus" data-field="quant[1]">
                              <span class="fa fa-minus"></span>
                              </button>
                              </span>
                              <input type="text" name="quant[1]" class="text-center form-control border-form-control form-control-sm input-number" value="0001">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-theme-round btn-number btn-lg" data-type="plus" data-field="quant[1]">
                              <span class="fa fa-plus"></span>
                              </button>
                              </span>
                           </div>
                        
                           <button type="button" class="btn btn-theme-round btn-lg"> <i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        </form>
                     </div>
                     
                  </div>
               </div>
            </div>
             <?php endforeach; ?>
         </div>
      </div>
      </section>
     