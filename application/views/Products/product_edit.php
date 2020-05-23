

<div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">Product Information</h2>

            <div class="md-card uk-margin-large-bottom">
                <div class="md-card-content">
                    <form class="uk-form-stacked" method="post" action="<?php echo site_url('Admin_products/update_products'); ?>" id="wizard_advanced_form" enctype="multipart/form-data">

                        <?php foreach($row as $r): ?>
                            <input type="hidden" name="hidden" value="<?php echo $r->id; ?>">
                        <div id="wizard_advanced" data-uk-observe>

                            <!-- first section -->
                            <h3>Product information</h3>
                            <section>
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <div class="parsley-row">
                                    <label for="val_select" class="uk-form-label">Select Category</label>
                                    <select id="val_select" name="cat_name" required data-md-selectize>
                                        <option value="<?php echo $r->cat_name; ?>"><?php echo $r->cat_name; ?></option>
                                         
                                         
                                    </select>
                                </div>
                                    </div>
                                     
                                </div>
                                 
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_fullname">Product Title<span class="req">*</span></label>
                                        <input type="text" name="pro_title" id="wizard_fullname" required class="md-input" value="<?php echo $r->pro_title; ?>" />
                                    </div>
                                    <br>
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <br>
                                        <label for="wizard_fullname">Product Orignal Price<span class="req">*</span></label>
                                        <input type="text" name="pro_oprice" id="wizard_fullname" class="md-input" value="<?php echo $r->pro_oprice; ?>" />
                                    </div>
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <br>
                                        <label for="wizard_fullname">Product After Discount Price<span class="req">*</span></label>
                                        <input type="text" name="pro_dprice" id="wizard_fullname" class="md-input" value="<?php echo $r->pro_dprice; ?>" />
                                    </div>
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <br>
                                        <label for="wizard_fullname">Product % Sale Price<span class="req">*</span></label>
                                        <input type="text" name="pro_sprice" id="wizard_fullname" class="md-input" value="<?php echo $r->pro_sprice; ?>" />
                                    </div>
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <br>
                                        <label for="wizard_fullname">Product Monthly Installment<span class="req">*</span></label>
                                        <input type="text" name="pro_monthly_instal" id="wizard_fullname" class="md-input" value="<?php echo $r->pro_monthly_instal; ?>" />
                                    </div>
                                     
                                </div>
                                <br>
                                <?php 
                                    $added_sections = explode(', ', $r->section_id);
                                
                                ?>
                                <h3>Display section:</h3>
                                <span>
                                        <input 
                                            type="checkbox" 
                                            name="section_id[]" 
                                            id="wizard_fullname" 
                                            value="1"
                                            <?php if(in_array('1', $added_sections)){ echo 'checked="checked"';} ?>
                                            />
                                        <label for="wizard_fullname">Latest Products<span class="req"></span></label>
                                </span>
                                &emsp;&emsp;&emsp;&emsp;
                                <span style="display: inline;">
                                        <input 
                                            type="checkbox" 
                                            name="section_id[]" 
                                            id="wizard_fullname" 
                                            value="2"
                                            <?php if(in_array('2', $added_sections)){ echo 'checked="checked"';} ?> 
                                            />
                                        <label for="wizard_fullname">Best Saller Products<span class="req"></span></label>
                                </span>
                                &emsp;&emsp;&emsp;&emsp;
                                <span style="display: inline;">
                                        <input 
                                            type="checkbox" 
                                            name="section_id[]" 
                                            id="wizard_fullname" 
                                            value="3"
                                            <?php if(in_array('3', $added_sections)){ echo 'checked="checked"';} ?> 
                                            />
                                        <label for="wizard_fullname">Hot Products<span class="req"></span></label>
                                </span>
                                 <div class="uk-width-medium-1-1">
                             <div class="md-input-wrapper md-input-wrapper-count"> 
                                Description
                             <div class="grid-container">
            <div class="grid-width-100">
        <textarea id="editor" name="pro_des"><?php echo $r->pro_des; ?></textarea>
 
                
            </div>
        </div>
<script>
    initSample();
</script>

        </div>
                            
                        </div>
                        
                                 <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Image
                            </h3>
                            <input type="file" name="image" id="input-file-a" class="dropify" />
                        </div>
                    </div>
                </div>
                
            </div>

                               
                      
                            </section>

                             
                            

       
                        </div>
                    <?php endforeach; ?>
                        <br><br>
                        <center> <input type="submit" name="submit" value="Submit" class="md-btn md-btn-primary"></center>
                    </form>
                </div>
            </div>
 

        </div>
    </div>

     

 