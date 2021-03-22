<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Selekt Chicken</title>
      <!--stylesheet-->
      <link rel="icon" type="image/png" href="favicon.png" />
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style/owl.carousel.css" type="text/css">
      <link rel="stylesheet" href="style/owl.theme.default.min.css" type="text/css">
       <link rel="stylesheet" href="style/app.min.css" type="text/css">
      <link rel="stylesheet" href="style/inner-page-css.css" type="text/css">
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <header>
        <?php if (isset($page) AND $page == "home") { ?>
         <div class="bg-top">
          <?php } else {?>
            <div class="bg-top inner-page-bg">
          <?php } ?>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <?php if (isset($page) AND $page == "home") { ?>
                     <div class="owl-carousel" id="banner-slider"  data-slider-id="1">
                        <div class="item">
                           <div class="selekt_banner">
                              <div class="pagination-number">
                                 <h2>01<span>/03</span></h2>
                              </div>
                              <div class="selekt_banner_heading">
                                 <h1><span>Taste Matters</span>Grilled <br>Chicken</h1>
                              </div>
                              <div class="selekt_banner_btn">
                                 <a href="#">Franchise <br>Info</a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="selekt_banner">
                              <div class="pagination-number">
                                 <h2>02<span>/03</span></h2>
                              </div>
                              <div class="selekt_banner_heading">
                                 <h1><span>Taste Matters</span>Grilled <br>Chicken</h1>
                              </div>
                              <div class="selekt_banner_btn">
                               <a href="#">Franchise <br>Info</a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="selekt_banner">
                              <div class="pagination-number">
                                 <h2>03<span>/03</span></h2>
                              </div>
                              <div class="selekt_banner_heading">
                                 <h1><span>Taste Matters</span>Grilled <br>Chicken</h1>
                              </div>
                              <div class="selekt_banner_btn">
                                <a href="#">Franchise <br>Info</a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <?php } elseif (isset($page) AND $page == "about-us") { ?>

                      <div class="inner-page-banner">
                        <h1>About</h1>

                      </div> 

                     <?php } elseif (isset($page) AND $page == "contact") { ?>

                      <div class="inner-page-banner">
                        <h1>Contact</h1>

                      </div> 

                        <?php } elseif (isset($page) AND $page == "menu") { ?>

                          <div class="inner-page-banner">
                        <h1>Menu</h1>

                      </div> 

                    <?php } elseif (isset($page) AND $page == "store") { ?>

                          <div class="inner-page-banner">
                        <h1>Stores</h1>

                      </div> 

                   <?php } else {?>
                      <div class="inner-page-banner">
                        <h1>Stores</h1>

                      </div> 

                     <?php } ?>
                  </div>
                  <?php if (isset($page) AND $page == "home") { ?>
                  <div class="col-12">
                    <div class="scroll-top">
              <a href="#sec-1">Scroll Down<img src="images/scroll-down.png" alt="" class="img-fluid"></a>
            </div>
                  </div>
                <?php } ?>
               </div>
            </div>
<?php if (isset($page) AND $page == "home") { ?>
            <div class="owl-thumbs" data-slider-id="1">
    <button class="owl-thumb-item"><img src="images/h-img-1.png" alt="" class="img-fluid"></button>
    <button class="owl-thumb-item"><img src="images/h-img-2.png" alt="" class="img-fluid"></button>
</div>
<?php } ?>
           
            <div class="bg-nav">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-2 col-md-3 col-sm-3 col-3 wow fadeInDown">
                        <a href="index.php"><img src="images/Logo.png" alt="" class="img-fluid"></a>
                     </div>
                     <div class="col-lg-8 col-md-3 col-sm-4 col-5">
                        <ul class="main-nav hidden-md-down">
                           <li><a href="index.php" class="<?php 
                              if (isset($page) AND $page == "home") 
                              { echo "active" ;} ?>">Home </a></li>
                           <li><a href="menu.php"  class="<?php 
                              if (isset($page) AND $page == "menu") 
                              { echo "active" ;} ?>">Menu </a></li>

                           <li><a href="store.php" class="<?php 
                              if (isset($page) AND $page == "store") 
                              { echo "active" ;} ?>">Stores   </a></li>

                           <li><a href="frenchisee.php" class="<?php 
                              if (isset($page) AND $page == "frenchisee") 
                              { echo "active" ;} ?>">Franchise</a></li>
                           <li><a href="about-us.php" class="<?php 
                              if (isset($page) AND $page == "about-us") 
                              { echo "active" ;} ?>"
                              > About Selekt</a></li>
                           <li><a href="contact.php" class="<?php 
                              if (isset($page) AND $page == "contact") 
                              { echo "active" ;} ?>">Contact  </a></li>
                        </ul>
                        <!-- <ul class="call-top">
                           <li><img src="images/clock.png" alt=""></li>
                           <li><span>Call for Order</span>
                              <a href="tel:02036024640">0203 602 4640</a>
                           </li>
                        </ul> -->
                     </div>
                     <div class="col-lg-2 col-sm-3 col-md-4 col-4 text-sm-right  wow fadeInDown">
                        <a href="frenchisee.php" class="franchise-btn">Franshise Info</a>
                     </div>

                  </div>
               </div>
            </div>

         </div>
         
         <?php if (isset($page) AND $page == "home") { ?>
      
         <?php } else { ?>




         <?php } ?>
      </header>

      <div class="hidden-lg-up menu-bg">
            <div class="menu-button">  </div>
         </div>
         <ul class="flexnav" data-breakpoint="800">
            <li><a href="index.php" class="<?php 
               if (isset($page) AND $page == "home") 
               { echo "active" ;} ?>">Home </a></li>
            <li><a href="products.php"  class="<?php 
               if (isset($page) AND $page == "products") 
               { echo "active" ;} ?>">Products </a></li>
            <li><a href="manufacturing.php" class="<?php 
               if (isset($page) AND $page == "manufacturing") 
               { echo "active" ;} ?>">Manufacturing   </a></li>
            <li><a href="private-label.php" class="<?php 
               if (isset($page) AND $page == "private-label") 
               { echo "active" ;} ?>">Private Label  </a></li>
            <li><a href="contact.php" class="<?php 
               if (isset($page) AND $page == "contact") 
               { echo "active" ;} ?>">Contact  </a></li>
            <li><a href="about-us.php" class="<?php 
               if (isset($page) AND $page == "about-us") 
               { echo "active" ;} ?>"
               > About Us</a></li>
         </ul>