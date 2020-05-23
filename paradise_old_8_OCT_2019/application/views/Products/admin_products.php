

    <div id="page_content">
        <div id="page_content_inner">

         <div class="md-card uk-margin-medium-bottom">
            <br>
            &nbsp;&nbsp; <a class="md-btn md-btn-primary uk-margin-bottom" href="<?php echo site_url('Admin_products/Addnew_product'); ?>">Add New Products</a>
         
         <center><h2 class="heading_a uk-margin-bottom">All Product Data</h2></center>
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">

                        <thead>

                        <tr>
                            <th>Sr.No.</th>
                            <th>Product Title</th>
                            <th>Product Orignal Price</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Product Title</th>
                            <th>Product Orignal Price</th>
                            <th>Created Date</th>
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
                            <td><?php echo $r->pro_title; ?></td> 
                            <td><?php echo $r->pro_oprice; ?></td> 
                            <td><?php echo $r->c_date; ?></td>                      
                            <td>
                                <a href="<?php echo site_url("Admin_products/Addimage_gallery");?>/<?php echo $r->id;?>" title="Upload Image">
      <i style="color:#aaa" class="fa fa-upload"></i>
</a>
                                <a href="<?php echo site_url("Admin_products/Product_edit");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-warning">Edit</a>
                                <a href="<?php echo site_url("Admin_products/Product_detail");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-primary">View</a>
                                <a href="<?php echo site_url("Admin_products/Product_delete");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-danger">Delete</a>
                            </td>
                        </tr>
                         <?php endforeach;
                }else { ?>
                <tr>
                  <td></td>
                  <td></td>
                <td>No Record Found</td>
               
                <td></td>
              </tr>

                <?php } ?>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

 
    
     