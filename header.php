<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/bootstrap/css/leaflet.css" />
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/bootstrap/css/leaflet.ie.css" />
    <![endif]-->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- fav icon -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/bootstrap/img/favicon.ico">
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/bootstrap/img/lodum-logo-s.png' ?>" class="logo-navbar" /></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <ul class="nav">

                <?php wp_list_pages(array('title_li' => '', 'exclude' => '187,112')); ?>
                
                <li class="page_item"><a href="http://data.uni-muenster.de/">Data</a></li>
                <li class="page_item"><a href="http://data.uni-muenster.de/sparql">SPARQL Endpoint</a></li>                
              </ul>              
            </ul>  
            <a href="#" class="pull-right" id="search-button" data-html='true' data-content='<form class="form" id="popup-search" action="<?php echo site_url('/'); ?>"><div class="input-append"><input type="text" class="span2" name="s" id="s"><button type="submit" class="btn">Search</button></div></form>' data-placement='left'><i class="icon-search"> </i></a>
          </div><!--/.nav-collapse -->          
        </div>        
      </div>
    </div>

    <div class="container main">