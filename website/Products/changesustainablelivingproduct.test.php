<?php
include("SUSTAINABLELIVINGproducts.php"); 

$itemID = $_GET['itemID'];
$item = SUSTAINABLELIVING::findSUSTAINABLELIVING($itemID); 
if ($item) {
    $item->SUSTAINABLELIVINGCode =isset($_GET['Code']) ? $_GET['Code'] : $item->SUSTAINABLELIVINGCode; 
    $item->SUSTAINABLELIVINGName =isset($_GET['Name']) ? $_GET['Name'] : $item->SUSTAINABLELIVINGName; 
    $item->SUSTAINABLELIVINGDescription =isset($_GET['Description']) ? $_GET['Description'] : $item->SUSTAINABLELIVINGDescription; 
    $item->SUSTAINABLELIVINGCategoryID =isset($_GET['CategoryID']) ? $_GET['CategoryID'] : $item->SUSTAINABLELIVINGCategoryID; 
    $item->SUSTAINABLELIVINGWholesalePrice =isset($_GET['WholesalePrice']) ? $_GET['WholesalePrice'] : $item->SUSTAINABLELIVINGWholesalePrice; 
    $item->SUSTAINABLELIVINGListPrice =isset($_GET['ListPrice']) ? $_GET['ListPrice'] : $item->SUSTAINABLELIVINGListPrice; 
    $item->SUSTAINABLELIVINGColor =isset($_GET['Color']) ? $_GET['Color'] : $item->SUSTAINABLELIVINGCode; 

    $result = $item->updateSUSTAINABLELIVING(); 
    if ($result) {
        echo "<h2>Item $itemID updated</h2>\n";
    } else {
        echo "<h2>Problem updating item $itemID</h2>\n";
    }
} else {
    echo "<h2>Item $itemID not found</h2>\n";
}
?>
