
<div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">Product Information</h2>

            <div class="md-card uk-margin-large-bottom">
                <div class="md-card-content">
<form action="<?php echo site_url() ;?>/Admin_products/addimage_gallery_validate" enctype="multipart/form-data" id="have_Form" method="post"> 
    <br><br>
 <div class="row"> <!--here is dropozone area-->
    
    <input type="hidden" name="hidden" value="<?php print_r($id); ?>">
                        <div class="col-md-12">
                            <div class="col-md-3"></div>
                            <div class="col-md-8">
                            <div class="form-group" style="margin-bottom:-35px;">
                                <label for="files">Image Gallery: (.jpg, .png and .gif files are allowed &amp Maximum 8 files upload) </label>
                                <div id="errormsg"></div>

                                <div id="dropzonePreview" class="dropzone-previews form-control dropzone dz-clickable">
                                    <div class="dz-message">Drop files here or click to upload.</div>
                                </div>

                                <br>
                                <br>

                            </div>
                        </div>
                         </div>

                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-8">
                      <div class="md-card">
                <div class="md-card-content">
       <div class="uk-grid" data-uk-grid-margin="">
         <div class="uk-width-medium-1-2 uk-grid-margin">
                             <input class="md-btn md-btn-primary md-btn-block" type="submit" value="Add" name="submit"> 
                             
                        </div>
                        <div class="uk-width-medium-1-2 uk-grid-margin">
                             <a href="<?php echo site_url('Admin_products'); ?>" class="md-btn md-btn-primary md-btn-block">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                 </form>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>style_admin/js/dropzone.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
        <script>
    $(document).ready(function () {

        var photoDropzone = new Dropzone("#have_Form", {
            url: $('#have_Form').attr("action"),
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 10,
            maxFiles: 10,
            previewsContainer: '#dropzonePreview',
            clickable: '#dropzonePreview',

            // The setting up of the dropzone
            init: function () {
                var myDropzone = this;

                var submitButton = document.querySelector('input[type=submit]');
                myDropzone = this; // closure

                submitButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if (myDropzone.getQueuedFiles().length === 0) {
                        // $('#newExhibitForm').submit();

                        $("#have_Form").addnews_images_validate({
                            rules: {
                                'Exhibit_Name': {
                                    required: true,
                                }
                            },
                            submitHandler: function () {
                                // myDropzone.processQueue();
                            }
                        });
                    }
                    else {
                        myDropzone.processQueue();
                    }
                });
            }
        });

    });
</script>
                </div>
            </div>
 

        </div>
    </div>

     

 