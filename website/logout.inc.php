<?php
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
//Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment
?>

