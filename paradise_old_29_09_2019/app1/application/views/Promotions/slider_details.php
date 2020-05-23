 
 <?php foreach($slider as $r): ?>

    <div id="page_content">
        <br>
        <div id="page_heading">
            <h1><?php echo $r->img_name; ?></h1>
            <span class="uk-text-muted uk-text-upper uk-text-small"><?php echo $r->c_date;?></span>
        </div>
        <div id="page_content_inner">

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Photos
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="uk-margin-bottom uk-text-center">
                                <img src="<?php echo base_url().$r->img_path; ?>" alt="" class="img_medium" />
                            </div>
                            <ul class="uk-grid uk-grid-width-small-1-3 uk-text-center" data-uk-grid-margin>
                                <li>
                                    <img src="<?php echo base_url().$r->img_path; ?>" alt="" class="img_small"/>
                                </li>
                                <li>
                                    <img src="<?php echo base_url().$r->img_path; ?>" alt="" class="img_small"/>
                                </li>
                                <li>
                                    <img src="<?php echo base_url().$r->img_path; ?>" alt="" class="img_small"/>
                                </li>
                            </ul>
                            <br>
                        </div>
                    </div>
           
                </div>
                <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Details
                            </h3>
                        </div>
                        <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium">
                                <div class="uk-width-large-1-2">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Image Name</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><a href="#"><?php echo $r->img_name; ?></a></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Created Date</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $r->c_date; ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                     
                                     
                                    
                                    
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
<?php endforeach; ?>
    
 