<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>SUSTAINABLE LIVING</title></head>
<body>
   <section id="container">
    
       <main>
           <?php
          
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
               
           }
           //Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment
           ?>
       </main>
   </section>
</body>
</html>
