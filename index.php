<?php
require_once('./includes/header.php');

   $xml = new SimpleXMLElement($xmlstr);
   echo "<table>";
   echo "<th>Pizza</th>";
   echo "<th>Size</th>";
   foreach($xml->pizzas->pizza as $pizza) {
       echo "<tr>";
       echo "<td>";
           echo $pizza->name;
       echo "</td>";
       echo "<td>";
        echo $pizza->size;
       echo "</td";
       echo "</tr>";
   }
    echo "</table>";
require_once('./includes/footer.php');

?>
