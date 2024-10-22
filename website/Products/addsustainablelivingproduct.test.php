<?php
include('sustainablelivingproducts.php'); 

$itemID = $_GET['itemID'];
$itemCode = $_GET['itemCode']; 
$itemName = $_GET['itemName'];
$itemDescription = $_GET['itemDescription'];
$categoryID = $_GET['categoryID'];
$wholesalePrice = $_GET['wholesalePrice']; 
$listPrice = $_GET['listPrice'];
$color = $_GET['color']; 

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
?>
