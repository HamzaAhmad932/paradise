
<div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">Edit Category</h2>

            <div class="md-card uk-margin-large-bottom">
                <div class="md-card-content">
                    <form class="uk-form-stacked" method="post" action="<?php echo site_url('Category/Update_edit_category'); ?>" id="wizard_advanced_form" enctype="multipart/form-data">
                        <div id="wizard_advanced" data-uk-observe>
                            <?php foreach($row as $r) :?>
                                <input type="hidden" name="hidden" value="<?php echo $r->id; ?>">
                            <!-- first section -->
                            <h3>Edit Category</h3>
                            <section>
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_fullname">Category Name<span class="req">*</span></label>
                                        <input type="text" name="cat_name" id="wizard_fullname" required class="md-input" value="<?php echo $r->cat_name; ?>" />
                                    </div>
                                    <br>
                                     
                                     
                                </div>
                                  

                               
                      
                            </section>

                             
                            <?php endforeach; ?>

       
                        </div>
                        <br><br>
                        <center> <input type="submit" name="submit" value="Submit" class="md-btn md-btn-primary"></center>
                    </form>
                </div>
            </div>
 

        </div>
    </div>

     

 