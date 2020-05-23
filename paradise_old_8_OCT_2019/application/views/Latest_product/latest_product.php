      <section class="categories-list">
         <div class="container">
            <div class="section-header">
               <h5 class="heading-design-h5">
                  Latest Products 
               </h5>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="single-categorie">
                     <div class="owl-carousel categories-list-page">
                        <?php foreach($latest_products as $product):?>
                        <div class="item">
                           <div class="h-100">
                              <div class="product-item">
                                 <span class="badge badge-info offer-badge">NEW</span> 
                                 <div class="product-item-image">
                                    <span class="like-icon"><a class="active" href="#"> <i class="fa fa-heart" aria-hidden="true"></i></a></span>
                                    <a href="<?php echo base_url('index.php/Products/Products_detail/'.$product->id)?>"><img class="card-img-top img-fluid" src="<?php echo base_url($product->img_path); ?>" alt=""></a>
                                 </div>
                                 <div class="product-item-body">
                                    <div class="product-item-action">
                                       <a data-toggle="tooltip" data-placement="top" title="Add To Cart" class="btn btn-theme-round btn-sm" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                       <a data-toggle="tooltip" data-placement="top" title="View Detail" class="btn btn-theme-round btn-sm" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                    <p class="card-title"><a href="<?php echo base_url('index.php/Products/Products_detail/'.$product->id)?>"><?php echo character_limiter($product->pro_title, 20, '..')?></a></p>
                                    <p>
                                       <!-- <span class="product-desc-price">$529.99</span> -->
                                       <span class="product-price">Rs. <?php echo $product->pro_monthly_instal?></span>
                                       <!-- <span class="product-discount">30% Off</span> -->
                                       <span class="product-discount">monthly installment</span>
                                    </p>
                                 </div>
                                 <div class="product-item-footer">
                                    <div class="product-item-size">
                                       <strong>Size</strong> <span>S</span> <span>M</span> <span>L</span> <span> XL</span> <span> 2XL</span>
                                    </div>
                                    <!-- <div class="stars-rating">
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star"></i> <span>(613)</span>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php endforeach;?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>