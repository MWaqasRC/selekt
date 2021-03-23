<?php $page = 'contact'; ?>

<?php include('header.php'); ?>

<section class="vs-contact-wrapper vs-contact-layout1 py-lg-100 py-60">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-11 col-lg-9 col-xl-7">
            <div class="section-title text-center">
               <span class="sub-heading">Contact Us</span>
               <h2 class="heading">Get In Touch</h2>
               <p class="heading-dec">We are available to discuss your needs, or answer any questions you may have. Enter your details and we will get back to you shortly.</p>
            </div>
         </div>
      </div>
      <form action="mail.php" method="POST" class="contact-form contact-form-style1">
         <div class="row">
            <div class="col-lg-4 form-group"><input type="text" name="name" class="form-control" placeholder="Enter Your Name"></div>
            <div class="col-lg-4 form-group"><input type="text" name="email" class="form-control" placeholder="Enter Your Email"></div>
            <div class="col-lg-4 form-group"><input type="tel" name="contact-number" class="form-control" placeholder="Enter Your Contact Number"></div>
            <div class="col-12 form-group"><textarea class="form-control" name="message" placeholder="Your Message"></textarea></div>
            <div class="col-12 form-group mb-0 text-center">
               <button type="submit" class="vs-btn mask-style1 rounded-0">Send Message
               </button>
            </div>
         </div>
      </form>
      <p class="form-messages mt-20 mb-0 text-center"></p>

   </div>
</section>

<?php include('footer.php'); ?>