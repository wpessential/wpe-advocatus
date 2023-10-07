<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<!-- bring style files from function.php -->


<!-- wp_head()  is used to output important information and resources that need to be included in the HTML <head> section of your webpage. -->
    <?php wp_head()?> 
    

  </head>

  <body>



  <header>
<div class="container">
<div class="header-wrapper">
<div class="logo-wrapper logo">
<h1><a href="index.html">advocatus<span>.</span></a></h1>
</div>
<div class="menu-wrapper">
<nav id="nav-links" style="right:-100%;">
<ul class="nav-menu">
<li class="mega-menu-wrapper"><a href="#">Home <i class="fa-solid fa-angle-down hidden-sm"></i></a>
<div class="mega-menu">
<div class="container">
<div class="row">
<div class="col">
<div class="mega-menu-item">
<h4>Home Style</h4>
<ul class="mega-menu-list">
<li><a href="index.html">Home</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="#">Courses</a></li>
<li><a href="#">About</a></li>
</ul>
</div>
</div>
<div class="col">
<div class="mega-menu-item">
<h4>Home Style</h4>
<ul class="mega-menu-list">
<li><a href="index-dark.html">Home Dark</a></li>
<li><a href="#">Home style 2</a></li>
<li><a href="#">Home style 3</a></li>
<li><a href="#">Home style 4</a></li>
</ul>
</div>
</div>
<div class="col">
<div class="mega-menu-item">
<h4>Home Style</h4>
<ul class="mega-menu-list">
<li><a href="#">Home style 5</a></li>
<li><a href="#">Home style 6</a></li>
<li><a href="#">Home style 7</a></li>
<li><a href="#">Home style 8</a></li>
</ul>
</div>
</div>
<div class="col">
<div class="mega-menu-item">
<h4>Home Style</h4>
<ul class="mega-menu-list">
<li><a href="#">Home style 9</a></li>
<li><a href="#">Home style 10</a></li>
<li><a href="#">Faq's</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</li>
<li id="has-children"><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a>
<ul class="has-children" id="nav-menu-toogle">
<li><a href="blog.html">Blog</a></li>
<li><a href="blog-detail.html">Blog Detail</a></li>
</ul>
</li>
<li><a href="index.html">Lawyers</a></li>
<li><a href="index.html">Publications</a></li>
<li><a href="index.html">FAQ</a></li>
<li><a href="index.html">Contact</a></li>
</ul>
<a href="#" class="res-menu-close d-none" onclick="if (!window.__cfRLUnblockHandlers) return false; hideMenu()">
<i class="fa-solid fa-xmark"></i></a>
</nav>
<div class="menu-toggle" id="bar">
<a class="responsive-menu-trigger d-inline-block" href="#"><i class="fas fa-bars"></i></a>
</div>
</div>
</div>
</div>

<?php
                    
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'div',
                        'container_class'      => '',
                        'container_id'         => '',
                          // Change this to match your HTML structure
                        'menu_class' => '',  // Adjust the class names as needed

                    ));
                
                ?>
</header>