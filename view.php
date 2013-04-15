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
  $titre="View";
  require 'includes/header.php';
?>

<!-- ====== -->
<!-- NAVBAR -->
<!-- ====== -->

<?php 
  require 'includes/navbar.php';
?>

<script >
  var a = prompt('Give the password : ');
  if(a!='demo')
    {
      window.location.href = 'http://fr.wikipedia.org/wiki/Mensonge';
    }
</script>

<div class="master container"> 

  <h1>Here.You.Can.See.The.Mails.You.Little.Stalker</h1>
</br>
    <table class="table">
      <tr> 
        <th> Id </th> 
        <th> Date </th> 
        <th> Message </th> 
        <th> email </th> 
      </tr> 
      <?php
        $sql='SELECT * FROM mail';
        $req=requete($sql);
        while ($data=reqfetch($req)) 
        {
          echo '<tr>'; 
          echo'<td>'.$data['id'].'</td>';
          echo'<td>'.$data['date'].'</td>';
          echo'<td>'.$data['message'].'</td>';
          echo'<td>'.$data['email'].'</td>';
          echo '</tr>'; 
        }
      ?>
    </table>
</div>

<!-- ====== -->
<!-- FOOTER -->
<!-- ====== -->

<?php 
  require 'includes/footer.php';
?>

