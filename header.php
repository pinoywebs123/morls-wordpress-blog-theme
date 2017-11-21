<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <div class="container">
  	<div class="row">
  		<header>
  			<nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" height="30px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
             <?php 
                wp_nav_menu(array(
                  'theme_location'=> 'primary',
                  'container'=> false,
                  'menu_class'=> 'nav navbar-nav'
                )); 
              ?>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="fa fa-facebook-official"></span></a></li>
                <li><a href="#"><span class="fa fa-github"></span></a></li>
                <li><a href="#"><span class="fa fa-google"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
  		</header>
  	</div>

  	<div id="banner" class="row">
  		
  	</div>
    <nav class="navbar navbar-default row">
          
          <?php 
            wp_nav_menu(array(
              'theme_location'=> 'secondary',
              'container'=> false,
              'menu_class'=> 'nav navbar-nav'
            )); 
          ?>

           <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php get_search_form();?></a></li>
              
              </ul>
    </nav>
  	
  		
  	