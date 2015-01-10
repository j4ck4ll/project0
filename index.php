<?php
require_once('./includes/header.php');

   $xml = new SimpleXMLElement($xmlstr);
   foreach($xml->pizzas->pizza as $pizza) {
       echo $pizza->name, '<br>';
   }

require_once('./includes/footer.php');

?>
