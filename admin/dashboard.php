<?php
    include '../core/dbe.inc.php';
    include '../core/core.inc.php';
    session_start(); 
    checkManager(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nafi Computer | ADMIN</title>

    <!-- Bootstrap -->
    <link href="../public/theme/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../public/theme/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="../public/theme/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- Datatables -->
    <link href="../public/theme/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../public/theme/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="../public/theme/admin/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../public/theme/admin/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../public/theme/admin/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../public/theme/admin/vendors/starrr/dist/starrr.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../public/theme/admin/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php

        // <!-- sidebar -->
        include '../components/adminuser/sidebar.php';
        // <!-- /sidebar -->

        // <!-- top navigation -->
        include '../components/adminuser/topNavbar.php'; 
        // <!-- /top navigation -->

        // <!-- page content -->

        $link = isset($_GET['page']) ? $_GET['page'] : ''; 

        if ($link == '') {
           include '../components/adminuser/pageContent.php';
        }
        //Category 
        if ($link == 'addCategory') {
           include '../components/adminuser/addCategory.php';
        }
        if ($link == 'delCategory') {
           include '../components/adminuser/delCategory.php';
        }
        //Slide 
        if ($link == 'addSlide') {
           include '../components/adminuser/addSlide.php';
        }
        if ($link == 'editSlide') {
           include '../components/adminuser/editSlide.php';
        }
        if ($link == 'delSlide') {
           include '../components/adminuser/delSlide.php';
        }
        //Product Image 
        if ($link == 'addProductImage') {
           include '../components/adminuser/addProductImage.php';
        }
        if ($link == 'editProductImage') {
           include '../components/adminuser/editProductImage.php';
        }
        if ($link == 'delProductImage') {
           include '../components/adminuser/delProductImage.php';
        }
        //Logout
        if ($link == 'logOut') {
           include '../components/adminuser/logOut.php';
        }
        else {
            $_GET['page'] = '';
        }
         
        // <!-- /page content -->

        // <!-- footer content -->
        include '../components/adminuser/footer.php'; 
        // <!-- /footer content -->
        ?>
      </div>
    </div>

    <!-- JS FILE -->
      <!-- jQuery -->
      <script src="../public/theme/admin/vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="../public/theme/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="../public/theme/admin/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="../public/theme/admin/vendors/nprogress/nprogress.js"></script>
      
      <!-- Datatables -->
      <script src="../public/theme/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="../public/theme/admin/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
      <script src="../public/theme/admin/vendors/jszip/dist/jszip.min.js"></script>
      <script src="../public/theme/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
      <script src="../public/theme/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

      <!-- FORM -->
      <!-- bootstrap-progressbar -->
      <script src="../public/theme/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- iCheck -->
      <script src="../public/theme/admin/vendors/iCheck/icheck.min.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="../public/theme/admin/js/moment/moment.min.js"></script>
      <script src="../public/theme/admin/js/datepicker/daterangepicker.js"></script>
      <!-- bootstrap-wysiwyg -->
      <script src="../public/theme/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
      <script src="../public/theme/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
      <script src="../public/theme/admin/vendors/google-code-prettify/src/prettify.js"></script>
      <!-- jQuery Tags Input -->
      <script src="../public/theme/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
      <!-- Switchery -->
      <script src="../public/theme/admin/vendors/switchery/dist/switchery.min.js"></script>
      <!-- Select2 -->
      <script src="../public/theme/admin/vendors/select2/dist/js/select2.full.min.js"></script>
      <!-- Parsley -->
      <script src="../public/theme/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
      <!-- Autosize -->
      <script src="../public/theme/admin/vendors/autosize/dist/autosize.min.js"></script>
      <!-- jQuery autocomplete -->
      <script src="../public/theme/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
      <!-- starrr -->
      <script src="../public/theme/admin/vendors/starrr/dist/starrr.js"></script>
      <!-- /FROM -->

      <!-- validator -->
      <script src="../public/theme/admin/vendors/validator/validator.min.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="../public/theme/admin/js/custom.js"></script>


      <!-- themeCustomJS -->
      <script src="../public/js/theme.js"></script>
    <!-- /JS FILE -->
    
  </body>
</html>