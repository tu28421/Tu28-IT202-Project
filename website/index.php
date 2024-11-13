<?php
session_start();
// C:\Users\rehma\OneDrive\Desktop\IT202Project\Tu28-IT202-Project\website\Products\sustainablelivingproducts.php
include("sustainablelivingcategory.php");
include("sustainablelivingproducts.php");
?>
<!DOCTYPE html>
<html>
<head><title>SUSTAINABLE LIVING</title></head>
<link rel="stylesheet" type="text/css" href="ih_styles.css">
<link rel="icon" type="image/png" href="images/logo.png">

<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 375px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
   <section id="container">
       <main>
           <?php
          
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
               
           }
           //Tanzeel ur Rehman,10/30/24, IT202-005, Internet Applications, Phase 1 assignment, tu28@nj
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
