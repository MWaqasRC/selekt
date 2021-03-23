<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-md-12 wow fadeInUp">
            <div class="d-flex">
               <div class="footer-logo"><a href="index.php"><img src="images/footer-logo.png" alt="" class="img-fluid"></a></div>
               <div class="footer-txt">
                  <h4>Connect With Us</h4>
                  <p>Selekt Chicken was created as a brand in 2015 and the first store opened in Harrow UK in 2016 is now revolution in the fast food industry.</p>
                  <div class="social-footer-icons">
                     <a href="https://www.facebook.com/ukselektchicken" target="_blank"><img src="images/fb.png"></a>
                     <a href="https://twitter.com/ukselektchicken" target="_blank"><img src="images/tw.png"></a>
                     <a href="https://www.instagram.com/ukselektchicken/" target="_blank"><img src="images/insta.png"></a>
                     <a href="https://www.linkedin.com/company/ukselektchicken/" target="_blank"><img src="images/linkedin.png"></a>
                     <!-- <a href="" target="_blank"><img src="images/utube.png"></a> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-5 wow fadeInRight">
            <div class="d-flex f-links">
               <div class="footer-links">
                  <h4>Links</h4>
                  <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="menu.php">Menu</a></li>
                     <li><a href="store.php">Stores</a></li>
                     <li><a href="franchise.php">Franchise</a></li>
                     <li><a href="about-us.php">About</a></li>
                     <li><a href="contact.php">Contact</a></li>
                  </ul>
               </div>
               <div class="footer-links" style="margin-right: 0;">
                  <h4>Contact Us</h4>
                  <p>
                     <span>Address</span>
                     272-274 Ealing Road, Wembley HA0 4LL
                  </p>
                  <p>
                     <span>Phone Number</span>
                     <a href="tel:0203 602 4640">0203 602 4640</a>
                  </p>
                  <p>
                     <span>Email Address</span>
                     <a href="mailto:info@selektchicken.com">info@selektchicken.com</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-7 become-f wow fadeInRight">
            <h4>BECOME FRANCHISEE</h4>
            <div class="footer-form">
               <form method="POST" action="footer-email.php">
                  <input type="email" name="EmailSubscribe" class="footer-input" placeholder="Enter your email..." required>
                  <input type="tel" name="EmailSubscribe" class="footer-input" placeholder="Enter your contact number..." required>
                  <textarea rows="6" placeholder="Message" class="footer-input" required></textarea>
                  <button type="submit" name="submit" class="footer-submit">Send</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="bg-copyrights">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-6 col-lg-5">
               <p>Copyright <?php echo date('Y'); ?> <a href="index.php">Selekt Chicken</a>. All rights reserved by Kore Consulting.</p>
            </div>
            <div class="col-md-6 col-lg-6 text-md-right">
               <div class="copyright-2">
                  <a href="#">Privacy Policy</a> | <a href="#">Terms & Condition</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>

<!--Jquery-->
<script src="script/jquery-1.12.4.js"></script>
<script src="script/bootstrap.js" type="text/javascript"></script>
<script src="script/owl.carousel.js" type="text/javascript"></script>
<script src="script/owl.carousel2.thumbs.js" type="text/javascript"></script>
<script src="script/jquery.flexnav.min.js" type="text/javascript"></script>
<script src="script/wow.js" type="text/javascript"></script>
<script src="script/app.min.js" type="text/javascript"></script>
<script src="script/vscustom-carousel.min.js"></script>
<script src="script/site-script.js" type="text/javascript"></script>
<script>
   wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      callback: function(box) {
         console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
   });
   wow.init();
</script>
</body>

</html>