<?php

/* Vice One
** - default Stum CMS Theme
** version: 0.0.1
*/

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Content manager complementation for Cockpit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stum CMS</title>

    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/assets/components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/assets/components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/assets/css/style.css">
    <script src="<?php echo THEME_PATH; ?>/assets/components/modernizr/modernizr.js"></script>

    <?php include 'head.php'; ?>

  </head>
  <body>
    <header class="header container">
      <div class="row">
        <div class="col-md-3">
          <h3 class="text-muted">Stum CMS</h3>
        </div>
        <div class="col-md-9">
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>
