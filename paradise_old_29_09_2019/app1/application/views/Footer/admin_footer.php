 <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

     <!-- common functions -->
    <script src="<?php echo base_url('style_admin/js/common.min.js'); ?>"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url('style_admin/js/uikit_custom.min.js'); ?>"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url('style_admin/js/altair_admin_common.min.js'); ?>"></script>
    <script src="<?php echo base_url('style_admin/js/dropify.min.js'); ?>"></script>
    <script src="<?php echo base_url('style_admin/js/forms_file_input.min.js'); ?>"></script>
    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="<?php echo base_url('style_admin/js/jquery.dataTables.min.js'); ?>"></script>
    <!-- datatables colVis-->
    <script src="<?php echo base_url('style_admin/js/dataTables.colVis.js'); ?>"></script>
    <!-- datatables tableTools-->
    <script src="<?php echo base_url('style_admin/js/dataTables.tableTools.js'); ?>"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
        <script src="<?php echo base_url('style_admin/js/d3.min.js'); ?>"></script>
        <!-- metrics graphics (charts) -->
        <script src="<?php echo base_url('style_admin/js/metricsgraphics.min.js'); ?>"></script>
        <!-- chartist (charts) -->
        <script src="<?php echo base_url('style_admin/js/chartist.min.js'); ?>"></script>
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url('style_admin/js/maplace-0.1.3.js'); ?>"></script>
        <!-- peity (small charts) -->
        <script src="<?php echo base_url('style_admin/js/jquery.peity.min.js'); ?>"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="<?php echo base_url('style_admin/js/jquery.easypiechart.min.js'); ?>"></script>
        <!-- countUp -->
        <script src="<?php echo base_url('style_admin/js/countUp.min.js'); ?>"></script>
        <!-- handlebars.js -->
        <script src="<?php echo base_url('style_admin/js/handlebars.min.js'); ?>"></script>
        <script src="<?php echo base_url('style_admin/js/handlebars_helpers.min.js'); ?>"></script>
        <!-- CLNDR -->
        <script src="<?php echo base_url('style_admin/js/clndr.js'); ?>"></script>
        <!-- fitvids -->
        <script src="<?php echo base_url('style_admin/js/jquery.fitvids.js'); ?>"></script>

        <!--  dashbord functions -->
        <script src="<?php echo base_url('style_admin/js/dashboard.min.js'); ?>"></script>
        
         <!-- page specific plugins -->
          <!-- tablesorter -->
    <script src="<?php echo base_url('style_admin/js/jquery.tablesorter.min.js'); ?>"></script>
    <script src="<?php echo base_url('style_admin/js/jquery.tablesorter.widgets.min.js'); ?>"></script>
    <script src="<?php echo base_url('style_admin/js/widget-alignChar.min.js'); ?>"></script>
    <script src="<?php echo base_url('style_admin/js/jquery.tablesorter.pager.min.js'); ?>"></script>

    <!--  tablesorter functions -->
    <script src="<?php echo base_url('style_admin/js/plugins_tablesorter.min.js'); ?>"></script>
    <script src="<?php echo base_url('style_admin/js/page_invoices.min.js'); ?>"></script>
    <!-- parsley (validation) -->
    
    <!-- datatables buttons-->
    <script src="<?php echo base_url('export_buttons/dataTables.buttons.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/buttons.uikit.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/jszip.min.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/pdfmake.min.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/vfs_fonts.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/buttons.colVis.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/buttons.html5.js'); ?>"></script>
    <script src="<?php echo base_url('export_buttons/buttons.print.js'); ?>"></script>

    <!-- datatables custom integration -->
    <script src="<?php echo base_url('export_buttons/datatables.uikit.min.js'); ?>"></script>

    <!--  datatables functions -->
    <script src="<?php echo base_url('export_buttons/plugins_datatables.min.js'); ?>"></script>
     
    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>

 
</body>
</html>