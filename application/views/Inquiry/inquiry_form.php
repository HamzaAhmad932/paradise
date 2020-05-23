<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12"><br></div>
		<div class="col-lg-8 col-md-8 mx-auto">
          <div class="widget">
             <div class="section-header section-header-center text-center">
                <h3 class="heading-design-center-h3">
                   Please fill up your Inquiry details
                </h3>
             </div>
             <!-- <div class="heading-part">
                <h3 class="sub-heading">Shipping Address</h3>
             </div> -->
             <hr>
             <p style="color: red;"><?php echo validation_errors(); ?></p>
             <form action="<?php echo base_url('index.php/Home/submit_inquiry')?>" method="post">
                <div class="row">
                   <div class="col-sm-6">
                      <div class="form-group">
                         <label class="control-label">First Name <span class="required">*</span></label>
                         <input class="form-control border-form-control" value="" placeholder="first name" type="text" name="first_name">
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="form-group">
                         <label class="control-label">Last Name <span class="required">*</span></label>
                         <input class="form-control border-form-control" value="" placeholder="last name" type="text" name="last_name">
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-sm-6">
                      <div class="form-group">
                         <label class="control-label">Phone <span class="required">*</span></label>
                         <input class="form-control border-form-control" value="" placeholder="phone no." type="number" name="phone">
                      </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="form-group">
                         <label class="control-label">Email Address <span class="required">*</span></label>
                         <input class="form-control border-form-control " value="" placeholder="your email" type="email" name="email">
                      </div>
                   </div>
                </div>
                <div class="row">
                	<div class="col-sm-12">
                		<div class="form-group">
                			<label class="control-label">Product: &nbsp;&nbsp;</label>
                			<span><?php echo $product['pro_title'];?></span>
                		</div>
                	</div>
                </div>
                <div class="row">
                	<div class="col-sm-12">
                		<div class="form-group">
                			<label class="control-label">Product Code: &nbsp;&nbsp;</label>
                			<span>150</span>
                			<input type="hidden" value="<?php echo $product['id'];?>" name="product_id">
                		</div>
                	</div>
                </div>
                <div class="row">
                   <div class="col-sm-12">
                      <div class="form-group">
                         <label class="control-label">Inquiry Description <span class="required">*</span></label>
                         <textarea class="form-control border-form-control" name="description"></textarea>
                         <small class="text-danger">Please provide your inquiry about the product you selected.</small>
                      </div>
                   </div>
                </div>
                <button type="submit" href="cart_order.html" class="btn btn-theme-round btn-lg pull-right">NEXT</button>
             </form>
          </div>
       </div>
	</div>
</div>	