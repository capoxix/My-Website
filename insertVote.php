<?php
   
   $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720gc2bt', 'spring2014', 'cs4720gc2bt');
  if (mysqli_connect_errno()) {
      echo "NOOOOOO!!!!!";
  }

mysqli_query($db_connection,"UPDATE Votes SET Votes= Votes+1 WHERE Actor= '$_POST[actor]'");

echo "Thank you for voting!";



mysqli_close($db_connetion);
?>