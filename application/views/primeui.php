<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PrimeUI</title>	
        
        <script src="<?php echo base_url(); ?>assets/components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/components/jqueryui/jquery-ui.min.js"></script>        
        <script src="<?php echo base_url(); ?>assets/components/primeui/primeui-2.1-min.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/jqueryui/themes/redmond/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/jqueryui/themes/redmond/theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/primeui/primeui-2.1-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/resources/font-awesome-4.4.0/css/font-awesome.min.css" />
        
        <script type="text/javascript">
            $(function() {
               alert("it works!!!"); 
            });
        </script>
    </head>
    <body>
        <h1>PrimeUI test</h1>
        <div id="main"></div>
        <?php echo base_url(); ?>
    </body>
</html>