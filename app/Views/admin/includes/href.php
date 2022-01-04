<html>
    <head>
        <title>Admin</title>

        <link href="<?php echo base_url(); ?>assets/materialize/materialize.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/materialize/materialize-social.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/materialize/iconfont/material-icons.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/datatable/datatables.min.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/admin.css" rel="stylesheet" /> 
        
        <script src="<?php echo base_url(); ?>assets/jquery/js/jquery.min.js" type="text/javascript"> </script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"> </script>
        <script src="<?php echo base_url(); ?>assets/materialize/materialize.min.js" type="text/javascript"> </script>
        <script src="<?php echo base_url(); ?>assets/datatable/datatables.min.js" type="text/javascript"> </script>

    </head>

    <script>
        $(document).ready(function(){            
            $('body').toggleClass('loaded');
            $('#datatable').DataTable();
            $("select").formSelect();
            
            M.AutoInit();
            // $('.scrollspy').scrollSpy();
            $('.notification-button, .profile-button, .dropdown-settings').dropdown({
                inDuration: 300,
                outDuration: 225,
                condtrainWidth: false,
                hover: true,
                gutter: 0,
                belowOrigin: true,
                alignment: 'right',
                stopPropagation: false
            });

            $('.dropdown-button, .translation-button, .dropdown-menu, .profile-btn').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrainWidth: false,
                hover: true,
                gutter: 0,
                belowOrigin: true,
                alignment: 'left',
                stopPropagation: false
            });

            $(window).on('load', function() {
                setTimeout(function() {
                $('body').addClass('loaded');
                }, 200);
            });

        });
    </script>

  <body>