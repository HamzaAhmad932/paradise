
      <div class="osahan-breadcrumb">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url('Home'); ?>"><i class="fa fa-home"></i> Home</a></li>
 
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <section class="products_page">
         <h6 class="sr-only">validator.w3</h6>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-4">
                  <div class="widget">
                     <div class="category_sidebar">
                        <aside class="sidebar_widget">
                           <div class="widget_title">
                              <h5 class="heading-design-h5"><i class="fa fa-filter"></i> Brands</h5>
                           </div>
                           <div id="accordion" role="tablist" aria-multiselectable="true">
                           <?php foreach($brands as $r): ?>
                              <div class="card">
                                 <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                       <a href="<?php echo site_url('Products/Brands_data'); ?>/<?php echo $r->id; ?>" aria-expanded="true" aria-controls="collapseOne">
                                       <?php echo $r->brand_name; ?>
                                       <span><i class="fa fa-plus-square-o"></i></span>
                                       </a>
                                    </h6>
                                 </div>
                                 
                              </div>
                           <?php endforeach; ?> 
                           </div>
                        </aside>
                        <hr>
                        
                        <aside class="sidebar_widget">
                           <div class="widget_title">
                              <h5 class="heading-design-h5">Price</h5>
                           </div>
                           <div class="card">
                              <div class="collapse show">
                                 <div class="card-block">
                                    <ul class="trends">
                                       <li><label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                          <input type="checkbox" class="custom-control-input">
                                          
                                          <a href="<?php echo site_url('Products/product_price'); ?>"><span class="custom-control-description">$68 to $659 <span class="item-numbers">365548</span></span></a>
                                          </label>  
                                       </li>
                                        
                                        
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </aside>
                        <hr>
                         
                        
                        
                        
                     </div>
                  </div>
                 
                  
               </div>
               <div class="col-lg-9 col-md-8">
                  <div class="osahan-inner-slider">
                     <div class="owl-carousel owl-carousel-slider">
                        <div class="item">
                           <a href="#"><img class="d-block img-fluid" src="<?php echo base_url('assets/images/slider/slider1.jpg'); ?>" alt="First slide"></a>
                        </div>
                        <div class="item">
                           <a href="#"><img class="d-block img-fluid" src="<?php echo base_url('assets/images/slider/slider2.jpg'); ?>" alt="First slide"></a>
                        </div>
                        <div class="item">
                           <a href="#"><img class="d-block img-fluid" src="<?php echo base_url('assets/images/slider/slider3.jpg'); ?>" alt="First slide"></a>
                        </div>
                     </div>
                  </div>
                  <div class="osahan_products_top_filter row">
                     <div class="col-lg-6 col-md-6 tags-action">
                        <span>4 GB RAM <a href="#"><i class="fa fa-close-line-circled"></i></a></span>
                        <span>5.5 Inch <a href="#"><i class="fa fa-close-line-circled"></i></a></span>
                        <span>128 GB <a href="#"><i class="fa fa-close-line-circled"></i></a></span>
                     </div>
                     <div class="col-lg-6 col-md-6 sort-by-btn pull-right">
                        <div class="view-mode pull-right">
                           <a class="active" href="shop-grid-left-sidebar.html"> <i class="fa fa-th-large"></i> </a><a href="shop-list-left-sidebar.html"> <i class="fa fa-th-list"></i> </a>
                        </div>
                        <div class="dropdown pull-right">
                           <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-filter"></i> Sort by 
                           </button>
                           <div class="dropdown-menu pull-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Popularity </a>
                              <a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> New </a>
                              <a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Discount </a>
                              <a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Price: Low to High </a>
                              <a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Price: High to Low </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row products_page_list">
                     <div class="clearfix"></div>
         <?php foreach($row as $r): ?>
                     <div class="col-lg-3 col-md-6">
                        <div class="item">
                           <div class="h-100">
                              <div class="product-item">
                                 <span class="badge badge-danger offer-badge">HOT</span>  
                                 <div class="product-item-image">
                                    <span class="like-icon"><a href="#"> <i class="fa fa-heart"></i></a></span>
                                    <a href="#"><img class="card-img-top img-fluid" src="<?php echo base_url().$r->img_path; ?>" alt=""></a>
                                 </div>
                                 <div class="product-item-body">
                                    <div class="product-item-action">
                                       <a data-toggle="tooltip" data-placement="top" title="" class="btn btn-theme-round btn-sm" href="#" data-original-title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                       <a data-toggle="tooltip" data-placement="top" title="" class="btn btn-theme-round btn-sm" href="<?php echo site_url('Products/Products_detail'); ?>/<?php echo $r->id; ?>" data-original-title="View Detail"><i class="fa fa-search"></i></a>
                                    </div>
                                    <p class="card-title"><a href="#"><?php echo $r->pro_title; ?></a></p>
                                    <p>
                                       <!-- <span class="product-desc-price"><?php //echo $r->pro_oprice; ?></span> -->
                                       <span class="product-price"><?php echo $r->pro_oprice; ?></span>
                                       <!-- <span class="product-discount"><?php //echo $r->pro_sprice; ?></span> -->
                                    </p>
                                    <p><b style="color: #901E78;">Monthly Instalments:</b> <b style="font-weight: normal;color: #6D30F4"><?php echo $r->pro_monthly_instal; ?></b></p>
                                 </div>
                                 <div class="product-item-footer">
                                    
                                    <div class="stars-rating">
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star active"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i> <span>(415)</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
      <?php endforeach; ?>   
                    
                  </div>
                  <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      