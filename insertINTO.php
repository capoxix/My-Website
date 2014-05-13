<?php
   
   $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720gc2bt', 'spring2014', 'cs4720gc2bt');
  if (mysqli_connect_errno()) {
      echo "NOOOOOO!!!!!";
  }


$sql_insert="INSERT INTO Movies (Name, AdamSeen, BenSeen, JimSeen, SteveSeen, WillSeen) 
VALUES ('$_POST[user]', '$_POST[Adam]', '$_POST[Ben]', '$_POST[Jim]', '$_POST[Steve]', '$_POST[Will]')";

if (!mysqli_query($db_connection,$sql_insert))
  {
  die('Error: ' . mysqli_error($db_connection));
  }

echo "Added Info";



mysqli_close($db_connetion);
?>