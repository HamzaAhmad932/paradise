

    <div id="page_content">
        <div id="page_content_inner">

         <div class="md-card uk-margin-medium-bottom">
            <br>
            &nbsp;&nbsp; <a class="md-btn md-btn-primary uk-margin-bottom" href="<?php echo site_url('Brands/Addnew_brand'); ?>">Add New Brand</a>
         
         <center><h2 class="heading_a uk-margin-bottom">All Brand Data</h2></center>
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">

                        <thead>

                        <tr>
                            <th>Sr.No.</th>
                            <th>Brand Name</th>
                            <th>Logo</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Brand Name</th>
                            <th>Logo</th>
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
                            <td><?php echo $r->brand_name; ?></td> 
                            <td><img src="<?php echo base_url().$r->img_path; ?>" alt="" width="30" height="20" /></td>
                            <td><?php echo $r->c_date; ?></td>                      
                            <td>
                                <a href="<?php echo site_url("Brands/Brand_edit");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-warning">Edit</a>
                                <a href="<?php echo site_url("Brands/Brand_detail");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-primary">View</a>
                                <a href="<?php echo site_url("Brands/Brand_delete");?>/<?php echo $r->id;?>" class="uk-badge uk-badge-danger">Delete</a>
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

 
    
     