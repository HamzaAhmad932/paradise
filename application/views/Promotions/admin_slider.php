

    <div id="page_content">
        <br>
        <div id="page_content_inner">

         <div class="md-card uk-margin-medium-bottom">
            <br>
            &nbsp;&nbsp; <a class="md-btn md-btn-primary uk-margin-bottom" href="<?php echo site_url('Promotions/Addnew_image'); ?>">Add New Image</a>
         
         <center><h2 class="heading_a uk-margin-bottom">All Slider Images</h2></center>
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">

                        <thead>

                        <tr>
                            <th>Sr.No.</th>
                            <th>Image Name</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Image Name</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>

                        <tbody>
                         <?php $serial=0;
                              if($row > 0){
                                foreach($row as $r):                                     
                                    $serial++;
                                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $r->img_name; ?></td> 
                            <td><img class="" width="60px" height="60px" src="<?php echo base_url().$r->img_path; ?>" alt=""/></td> 
                            <td><?php echo $r->c_date; ?></td>                      
                            <td>
                                <a href="<?php echo site_url("Promotions/Slider_edit");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-warning">Edit</a>
                                <a href="<?php echo site_url("Promotions/Slider_detail");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-primary">View</a>
                                <a href="<?php echo site_url("Promotions/Slider_delete");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-danger">Delete</a>
                            </td>
                        </tr>
                         <?php endforeach;
                }else { ?>
                <tr>
                  <td></td>
                  <td></td>
                <td>No Record Found</td>
                <td></td>
                <td></td>
              </tr>

                <?php } ?>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

 
    
     