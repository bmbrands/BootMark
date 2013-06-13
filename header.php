<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $CFG->sitename; ?></title>
         <style>
         <?php
             $bootstrapcss = file_get_contents('css/bootstrap.css');
             echo bootmark_get_font($bootstrapcss);
         ?>
         </style>
         <link href="<?php echo $CFG->wwwroot; ?>/css/bootmark-sidenav.css" rel="stylesheet">
         <link href="<?php echo $CFG->wwwroot; ?>/css/custom.css" rel="stylesheet">
         <script src='<?php echo $CFG->wwwroot; ?>/javascript/jquery.js'></script>
         <script src='<?php echo $CFG->wwwroot; ?>/javascript/bootstrap.min.js'></script>
    </head>

    <body  data-spy="scroll" data-target=".bootmark-sidebar">
    <div class="fixedbackground">
        <img src="<?php echo $CFG->background;?>">
    </div>

    <!-- Navbar -->
    <?php echo render_navbar();?>


   <header>
      <div class="container">
      <h4 ><?php echo $CFG->sitename; ?></h4>
   </header>