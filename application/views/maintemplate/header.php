
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('/assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url('/assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('/assets/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('/assets/ico/apple-touch-icon-114-precomposed.png'); ?>">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('/assets/ico/apple-touch-icon-72-precomposed.png'); ?>">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/assets/ico/apple-touch-icon-57-precomposed.png'); ?>">
                                   <link rel="shortcut icon" href="<?php echo base_url('/assets/ico/favicon.png'); ?>">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Lorem Ispsum</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo index_page(); ?>">Home</a></li>
              <li><a href="<?php  echo base_url("logout"); ?>">Logout</a></li>
              <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
