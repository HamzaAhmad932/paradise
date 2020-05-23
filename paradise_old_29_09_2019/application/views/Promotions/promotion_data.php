
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

               <div class="col-md-12">
 
                  <div class="row products_page_list">
                     <div class="clearfix"></div>
         <?php foreach($promotion as $r): ?>
                     <div class="col-md-6">
                        <div class="item">
                           <div class="h-100">
                              <div class="product-item">
                                   
                                 <div class="product-item-image">
                                     
                                    <a href="#"><img class="card-img-top img-fluid" src="<?php echo base_url().$r->img_path; ?>" alt=""></a>
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
      