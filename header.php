<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <!-- bring style files from function.php -->


  <!-- wp_head()  is used to output important information and resources that need to be included in the HTML <head> section of your webpage. -->
  <?php wp_head() ?>


</head>

<body>




  <header>
    <div class="container">
      <div class="header-wrapper">
        <div class="logo-wrapper logo">
          <h1><a href="index.html">advocatus<span>.</span></a></h1>
        </div>
        <div class="menu-wrapper">
          <!-- <nav id="nav-links" style="right:-100%;"> -->
            <!-- <ul class="nav-menu"> -->
              <?php
            wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'nav',
                            'container_class'      => 'nav-links',
                            // 'container_id'         => 'navbarResponsive',
                              // Change this to match your HTML structure
                            'menu_class' => 'nav-menu',  // Adjust the class names as needed

                        ));
                ?>
              <!-- <li><a href="index.html">Publications</a></li> -->
            <!-- </ul>
            <a href="#" class="res-menu-close d-none"
              onclick="if (!window.__cfRLUnblockHandlers) return false; hideMenu()">
              <i class="fa-solid fa-xmark"></i></a>
          </nav> -->
          <!-- <div class="menu-toggle" id="bar">
            <a class="responsive-menu-trigger d-inline-block" href="#"><i class="fas fa-bars"></i></a>
          </div> -->
        </div>
      </div>
    </div>
  </header>