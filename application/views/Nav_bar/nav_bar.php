<nav class="navbar navbar-expand-lg navbar-light bg-light osahan-menu osahan-menu-2 pad-none-mobile">
         <div class="container">
            <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   <li class="nav-item dropdown mega-dropdown-main <?php if(strpos(current_url(), 'Home')){ echo 'active';}?>">
                     <a class="nav-link" href="<?php echo site_url('Home'); ?>">
                     <i class="fa fa-home" aria-hidden="true"></i> Home
                     </a>
                     
                  </li>
                  
                  <li class="nav-item <?php if(strpos(current_url(), 'Promotions_page')){ echo 'active';}?>">
                     <a class="nav-link" href="<?php echo site_url('Promotions_page'); ?>">Promotions</a>
                  </li>
                  <li class="sale-nav nav-item dropdown mega-dropdown-main">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Home Appliances
                     </a>
                     <div class="dropdown-menu mega-dropdown">
                        <div class="row">
 
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <span class="mega-menu-img hidden-sm"> <a class="mega-title href="#"><img src="<?php echo base_url('assets/images/home_appliance/DOSMETIC_APPLIANCES.png'); ?>" style="width: 36px;height: auto;">Domestic Appliances <span class="badge badge-primary">NEW</span> </a> </span> 
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/WASHING_MACHINES">Washing Machines</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/WASHER_DRYERS">Washer Dryers</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/DRYERS">Dryers </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/DISHWASHERS">Dishwashers </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/BUILT_IN_OVENS_COOKERS">Built-In-Oven & Cookers</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/HOBS_HOODS">Hobs & Hoods</a>
                                  
                                  
                              </div>
                           </div>
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Refrigeration <span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Fridges">Fridges</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Freezers">Freezers</a>                              
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Water_Dispensers">Water Dispensers</a>
                                  
                              </div>
                           </div>
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Small Appliances  <span class="badge badge-danger">60%</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Vacuum_Cleaners">Vacuum Cleaners</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Irons">Irons</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Water_Heater">Water Heater</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Sewing_Machine">Sewing Machine</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Microwave_Oven">Microwave Oven</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Electric_Ovens">Electric Ovens</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Electric_Cooking">Electric Cooking</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Food_Preparation">Food Preparation</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Kettle_Airpot">Kettle & Airpot</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Coffee_Machine">Coffee Machine</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Cookware">Cookware</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/UPS">UPS</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Stabilizers">Stabilizers</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Gheezars">Gheezars </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Genrators">Genrators</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Safe_Almaris">Safe Almaris</a>
                                 
                              </div>
                           </div>
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Cooling and Air Care <span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Air_Conditioners">Air Conditioners</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Air_Coolers">Air Coolers</a>                              
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Fans">Fans</a>
                                  
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown mega-dropdown-main">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     TV & Entertainment
                     </a>
                     <div class="dropdown-menu mega-dropdown">
                        <div class="row">
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Television/Led’s <span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/All_Television_Led">All Television/Led’s</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/32_inch_Below">32 inch & Below</a>                           
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/39_inch_to_46_Inch">39 inch to 46 Inch</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/47_inch_to_50_inch">47 inch to 50 inch</a>                       
                              </div>
                           </div>
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Home Audio/Players <span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Home_Audio_system">Home Audio system</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Home_Theater">Home Theater </a>                           
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Blue_Ray_DVD_players">Blue-Ray & DVD players</a>                  
                              </div>
                           </div>
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">TV Accessories<span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/TV_Trolley">TV Trolley</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/TV_Boxes">TV Boxes</a>                           
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/TV_Brackets">TV Brackets</a>                     
                              </div>
                           </div>                        
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown mega-dropdown-main">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     COMPUTING & MOBILE
                     </a>
                     <div class="dropdown-menu mega-dropdown">
                        <div class="row">
                           <div class="col-lg-2 col-sm-2 col-xs-2 col-md-2">
                              <div class="mega-list"><a class="mega-title" href="#">Laptops </a>
                                 <a href="shop-grid-full.html">All Laptops </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Windows_Laptop">Windows Laptop</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Macbook">Macbook</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Microsoft_Surface">Microsoft Surface </a>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-2 col-xs-2 col-md-2">
                              <div class="mega-list"><a class="mega-title" href="#">Monitors & Projectors </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Monitors">Monitors</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Projectors">Projectors</a>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-2 col-xs-2 col-md-2">
                              <div class="mega-list"><a class="mega-title" href="#">  Tablets </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/All_Tablets">All Tablets </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/IPAD">IPAD</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Samsung_Galaxy_Tab">Samsung Galaxy Tab</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Android_Tablets">Android Tablets</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Windows_Tablets">Windows Tablets</a>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-2 col-xs-2 col-md-2">
                              <div class="mega-list"><a class="mega-title" href="#">Smart Phones </a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/All_Smart_Phones">All Smart Phones</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Iphones">Iphones</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Samsung">Samsung</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Huawei">Huawei</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Oppo">Oppo</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/IM">IM </a>
                              </div>
                           </div>
                             
                        </div>
                         
                     </div>
                  </li>
                  <li class="nav-item dropdown mega-dropdown-main">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Bikes
                     </a>
                     <div class="dropdown-menu mega-dropdown mega-list-arrow-none">
                        <div class="row">
                           <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Motor Bikes<span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/70_cc_Bikes">70 cc Bikes</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/100_cc_Bikes">100 cc Bikes</a>                           
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/125_cc_Bikes">125 cc Bikes</a>  
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/150_cc_Bikes">150 cc Bikes</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/200_cc_Bikes">200 cc Bikes</a>                           
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Heavy_Bikes">Heavy Bikes</a>                     
                              </div>
                           </div>
                          <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3">
                              <div class="mega-list">
                                 <a class="mega-title" href="#">Rikshaw<span class="badge badge-default">HOT</span></a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Passenger">Passenger</a>
                                 <a href="<?php echo site_url('Products/Products_data'); ?>/Loader">Loader</a>                                
                              </div>
                           </div>
                            
                        </div>
                     </div>
                  </li>
                  <li class="nav-item <?php if(strpos(current_url(), 'About')){ echo 'active';}?>">
                     <a class="nav-link" href="<?php echo site_url('About'); ?>">About Us</a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Cars
                     </a>
                     <div class="dropdown-menu">
                        <?php foreach($brands as $r): ?>
                        <a class="dropdown-item" href="<?php echo site_url('Products/Brands_data'); ; ?>/<?php echo $r->id; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $r->brand_name; ?> </a>
                     <?php endforeach; ?>
 
                     </div>
                  </li> -->
                  <li class="nav-item <?php if(strpos(current_url(), 'Contact')){ echo 'active';}?>">
                     <a class="nav-link" href="<?php echo site_url('Contact'); ?>">Contact</a>
                  </li>
                 <!--  <li class="nav-item">
                     <a class="nav-link" href="contact.html">BEDDING & MATTRESS</a>
                  </li> 
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">CLEARANCE</a>
                  </li> -->
               </ul>
               
            </div>
         </div>
      </nav>