<?php
//include('sustainablelivingproducts.php'); 
if (isset($_SESSION['login'])) {

$itemID = $_POST['itemID'];
$itemCode = $_POST['itemCode']; 
$itemName = $_POST['itemName'];
$itemDescription = $_POST['itemDescription'];
$categoryID = $_POST['categoryID'];
$wholesalePrice = $_POST['wholesalePrice']; 
$listPrice = $_POST['listPrice'];
$color = $_POST['color']; 

if ((trim($itemID) == '') || !is_numeric($itemID) || 
    (trim($itemCode) == '') || 
    (trim($itemName) == '') || 
    (trim($itemDescription) == '') || 
    (trim($categoryID) == '') || 
    !is_numeric($wholesalePrice) || 
    !is_numeric($listPrice)) {
    echo "<h2>Sorry, please provide valid input</h2>\n";
} else {
    $item = new SUSTAINABLELIVING(
        $itemID,
        $itemCode,
        $itemName,
        $itemDescription,
        $categoryID,
        $wholesalePrice,
        $listPrice,
        $color,
        
    );

    $result = $item->saveSUSTAINABLELIVING();
    if ($result) {
        echo "<h2>New Item #$itemID successfully added</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that item</h2>\n";
    }
}
} else {
    echo "<h2>Please login first</h2>\n";
 }
 ?>
 