<?php
require_once('database.php');
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
$query = "SELECT firstName, lastName, pronouns FROM SUSTAINABLELIVINGManagers 
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
   echo "<h1>SUSTAINABLE LIVING SHOP</h1>";
   echo "<h2>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}

//Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment
?>

