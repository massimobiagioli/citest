<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PrimeUI</title>	
        
        <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bower_components/jqueryui/jquery-ui.min.js"></script>        
        <script src="<?php echo base_url(); ?>assets/components/primeui/primeui-2.1-min.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/jqueryui/themes/redmond/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/jqueryui/themes/redmond/theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/primeui/primeui-2.1-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/resources/font-awesome-4.4.0/css/font-awesome.min.css" />
        
        <script type="text/javascript">
            $(function() {
                $('#dataGridSogg').puidatatable({
                    lazy: true,
                    caption: 'Soggetti',
                    paginator: {
                        rows: 10,
                        totalRecords: 200
                    },
                    columns: [
                        {field:'progsogg', headerText: 'ID', sortable:true},
                        {field:'ragsoc', headerText: 'Ragione sociale', sortable:true},
                        {field:'codfiscale', headerText: 'Cod. fiscale', sortable:true}
                    ],
                    datasource: function(callback, ui) {
                        var uri = '<?php echo base_url(); ?>' + 'Dummy/load/' + ui.first;
                        if(ui.sortField) {
                            uri += '/' + ui.sortField + '/' + ui.sortOrder;
                        }

                        $.ajax({
                            type: "GET",
                            url: uri,
                            dataType: "json",
                            context: this,
                            success: function(response) {
                                callback.call(this, response);
                            }
                        });
                    }
                });
            });
        </script>
    </head>
    <body>
        <h1>PrimeUI test</h1>        
        <div id="dataGridSogg"></div>        
    </body>
</html>