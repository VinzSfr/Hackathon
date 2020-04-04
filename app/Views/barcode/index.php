<?php
$string_a_coder = "1234516143";

//mettre control=0 pour ne pas utiliser le caractère de controle
echo "<img src='barecodeController.php?string=".htmlentities($string_a_coder,ENT_QUOTES,"ISO8859-1") . "&amp;control=1'/>";
?>
