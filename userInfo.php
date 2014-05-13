<?php
  
function info($userInfo) {
  
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720gc2bt', 'spring2014', 'cs4720gc2bt');
  if (mysqli_connect_errno()) {
      echo "NOOOOOO!!!!!";
  }
  
  //echo "Connection made!";
  
  $stmt = $db_connection->stmt_init();
  if($stmt->prepare("select Name, AdamSeen, BenSeen, JimSeen, SteveSeen, WillSeen from Movies where Name = ?")) {
      $stmt->bind_param("s", $userInfo);
      $stmt->execute();
      $stmt->bind_result($Name, $AdamSeen, $BenSeen, $JimSeen, $SteveSeen, $WillSeen);
      echo "<table>";
      echo "<tr><th>Name</th><th>Adam</th><th>Ben</th><th>Jim</th><th>Steve</th><th>Will</th></tr>";
      while($stmt->fetch()) {
          echo "<tr>";
          echo("<td>" . $Name . "</td>\n");
          echo("<td>" . $AdamSeen . "</td>\n");
          echo("<td>" . $BenSeen . "</td>\n");
          echo("<td>" . $JimSeen . "</td>\n");
          echo("<td>" . $SteveSeen . "</td>\n");
          echo("<td>" . $WillSeen . "</td>\n");

          echo "</tr>";
      }
      echo "</table>";  
      
  }
}
  
$userToSearch = $_GET["userInfo"];
  
info($userToSearch);
  
?>