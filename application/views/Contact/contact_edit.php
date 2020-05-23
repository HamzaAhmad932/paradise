
<div id="page_content">
    <br>
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">Contact Information Edit</h2>

            <div class="md-card uk-margin-large-bottom">
                <div class="md-card-content">
                    <form class="uk-form-stacked" method="post" action="<?php echo site_url('Admin_contact/update_contact'); ?>" id="wizard_advanced_form" enctype="multipart/form-data">
                        <div id="wizard_advanced" data-uk-observe>

                            <!-- first section -->
                            <h3>Contact information Edit</h3>
                            <section>
                                 <?php foreach($row as $r): ?>
                                <input type="hidden" name="hidden" value="<?php echo $r->id; ?>">
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_fullname">City Name<span class="req">*</span></label>
                                        <input type="text" name="city_name" id="wizard_fullname" required class="md-input" value="<?php echo $r->city_name; ?>" />
                                    </div>
                                    <br>
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <br>
                                        <label for="wizard_fullname">Phone<span class="req">*</span></label>
                                        <input type="text" name="phone" id="wizard_fullname" required class="md-input" value="<?php echo $r->phone; ?>" />
                                    </div>
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <br>
                                        <label for="wizard_fullname">E-mail<span class="req">*</span></label>
                                        <input type="text" name="email" id="wizard_fullname" class="md-input" value="<?php echo $r->email; ?>" />
                                    </div>
                                     
                                     
                                </div>
                                  <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="parsley-row">
                                    <label for="message">Address</label>
                                    <textarea class="md-input" name="address" cols="10" rows="8" data-parsley-trigger="keyup"  data-parsley-minlength-message = "Come on! You need to enter at least a 20 caracters long comment.."><?php echo $r->address; ?></textarea>
                                </div>
                            </div>
                        </div>

                        
                                 

                               
                      <?php endforeach; ?>
                            </section>

                             
                            

       
                        </div>
                        <br><br>
                        <center> <input type="submit" name="submit" value="Submit" class="md-btn md-btn-primary"></center>
                    </form>
                </div>
            </div>
 

        </div>
    </div>

     

 