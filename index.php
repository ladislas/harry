<!-- ====== -->
<!-- FUNCTIONS -->
<!-- ====== -->

<?php 
  require 'includes/functions.php';
?>

<!-- ====== -->
<!-- HEADER -->
<!-- ====== -->


<?php 
  $titre="Home";
  require 'includes/header.php';
?>

<!-- ====== -->
<!-- NAVBAR -->
<!-- ====== -->

<?php 
  require 'includes/navbar.php';
?>

<div class="master container"> 

  <h1>Welcome to HarryWishYouWell</h1>

  <?php
  if (isset($_REQUEST['email']))
  //if "email" is filled out, send email
    {
    //send email
    $to = $_REQUEST['email'];
    $email = $_REQUEST['email'] ;
    $subject = "A regular mail from a friend";
    $message = $_REQUEST['message'] ;
    mail($to, $subject, $message, "From: Harry@wishyouwell.com");
    
    //add the mail to the bdd 'harry' in the table 'mail' in order to follow the activity of the site
    
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = 'INSERT INTO mail VALUES("",NOW(),"'.$message.'","'.$to.'","'.$ip.'")';
    $req = requete($sql);

    echo "<h2>Thank you for using our mail form</h2>";
    }

  else
  //if "email" is not filled out, display the form
   { ?>
   
    <p>Here you can type all the text you want without someone seeing it.</p>

    <p>Then you just add your email and it will send it to you directly.</p>

    <h2>Try it for free!</h2>

    <form method="post" action="index.php">

    <h3>Email:</h3><input name="email" type="text" autocomplete="off">

    <br>

    <h3>Message:</h3>

    <textarea id="unclear"></textarea>

    <textarea id="clear" name="message"></textarea>

    <br>

    <input type="submit">
    </form>
  <?php  }
  ?>

  <p><a href=".">Go back for another secret email!</a></p>
  
</div>

<!-- ====== -->
<!-- FOOTER -->
<!-- ====== -->

<?php 
  require 'includes/footer.php';
?>

