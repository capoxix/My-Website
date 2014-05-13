<?php
  
function info($actorInfo) {
  
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720gc2bt', 'spring2014', 'cs4720gc2bt');
  if (mysqli_connect_errno()) {
      echo "NOOOOOO!!!!!";
  }
  
  //echo "Connection made!";
  
  $stmt = $db_connection->stmt_init();
  if($stmt->prepare("select Actor, Votes from Votes where Actor = ?")) {
      $stmt->bind_param("s", $actorInfo);
      $stmt->execute();
      $stmt->bind_result($Actor, $Votes);
      echo "<table>";
      echo "<tr><th>Actor</th><th>Votes</th></tr>";
      while($stmt->fetch()) {
          echo "<tr>";
          echo("<td>" . $Actor . "</td>\n");
          echo("<td>" . $Votes . "</td>\n");
          echo "</tr>";
      }
      echo "</table>";  
      
  }
}
  
$actorToSearch = $_GET["actorInfo"];
  
info($actorToSearch);
  
?>