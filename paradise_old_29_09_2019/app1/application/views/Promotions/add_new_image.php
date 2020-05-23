<div id="page_content">
    <br>
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">
                Upload Promotions Image
                <span class="sub-heading">Image for Promotions</span>
            </h2>
            <form method="post" action="<?php echo site_url('Promotions/addnew_slider_validate'); ?>" enctype="multipart/form-data">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Image
                            </h3>
                            <input type="file" name="image" id="input-file-a" class="dropify" required="" />
                        </div>
                    </div>
                </div>
                
            </div>
             <div class="uk-margin-medium-top">
                        <input type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large" value="Submit"> 
                        <br> <br> <br>
                    </div>

            </form>

            

        </div>
    </div>
 