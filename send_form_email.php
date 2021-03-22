<?php include('header.php'); ?>

<div class="success-form">
  <div class="container">
            <div class="row">
              <div class="col-12">
<?php
  if(isset($_POST['submit'])){
    $name=$_POST['UserName'];
    $email=$_POST['UserEmail'];
    $phone=$_POST['UserPhone'];
    $subject=$_POST['UserSubject'];
    $msg=$_POST['UserMessage'];

    $to='adnankhalid0335@gmail.com'; // Receiver Email ID, Replace with your email ID
    $subject='Form Submission';
    $message="Name :".$name."\n".
    "Email :" .$email. "\n".
    "Phone Number :" .$phone. "\n".
    "Message :".$msg. "\n";
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
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