<?php
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$query = "SELECT firstName, lastName, pronouns FROM LEDBulbsManagers 
        WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName $pronouns";
if ($fetched && isset($name)) {
   echo "<h2>Welcome , $pronouns</h2>\n";
   
$_SESSION['login'] = $name;
$_SESSION['emailAddress'] = $emailAddress;
$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;


   header("Location: index.php");
} else {
   echo "<h1>NJIT LED Bulbs Shop</h1>";
   echo "<h2>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
//Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment
?>

