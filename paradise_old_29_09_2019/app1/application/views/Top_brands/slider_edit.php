<div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">
                Edit Slider Image
                <span class="sub-heading">Image for website slider</span>
            </h2>
            <form method="post" action="<?php echo site_url('Top_brands/Update_edit_slider'); ?>" enctype="multipart/form-data">
                <?php foreach($slider as $r):?>
                     <input type="hidden" name="hidden" value="<?php echo $r->id; ?>">
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
             <div class="uk-margin-medium-top">
                        <input type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large" value="Submit"> 
                        <br> <br> <br>
                    </div>

            <?php endforeach; ?>
            </form>

            

        </div>
    </div>
 