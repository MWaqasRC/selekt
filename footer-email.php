<?php include('header.php'); ?>

<div class="success-form">
  <div class="container">
            <div class="row">
              <div class="col-12">
<?php
  if(isset($_POST['submit'])){
    $email=$_POST['EmailSubscribe'];

    $to='adnankhalid0335@gmail.com'; // Receiver Email ID, Replace with your email ID
    $subject='Form Submission';
    $message="Email :" .$email. "\n";
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      echo "<h1>Sent Successfully! Thank you"." ".$email.", We will contact you shortly!</h1>";
    }
    else{
      echo "Something went wrong!";
    }
  }
?>
</div>
</div>
         </div>
      </div>

<?php include('footer.php'); ?>