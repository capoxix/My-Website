<?php
   
   $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720gc2bt', 'spring2014', 'cs4720gc2bt');
  if (mysqli_connect_errno()) {
      echo "NOOOOOO!!!!!";
  }

mysqli_query($db_connection,"UPDATE Movies SET AdamSeen='$_GET[Adam]', BenSeen='$_GET[Ben]', JimSeen='$_GET[Jim]', SteveSeen='$_GET[Steve]', WillSeen='$_GET[Will]' WHERE Name='$_GET[user]'");


echo "Updated Info";



mysqli_close($db_connetion);
?>