<?php
//include("SUSTAINABLELIVINGproducts.php"); 
if (isset($_SESSION['login'])) {
    $itemID = $_POST['itemID'];
    $answer = $_POST['answer'];
    if ($answer == "Update Item") {

$itemID = $_POST['itemID'];

$item = SUSTAINABLELIVING::findSUSTAINABLELIVING($itemID); 


if ($item) {
    $item->SUSTAINABLELIVINGCode =isset($_POST['Code']) ? $_POST['Code'] : $item->SUSTAINABLELIVINGCode; 
    $item->SUSTAINABLELIVINGName =isset($_POST['Name']) ? $_POST['Name'] : $item->SUSTAINABLELIVINGName; 
    $item->SUSTAINABLELIVINGDescription =isset($_POST['Description']) ? $_POST['Description'] : $item->SUSTAINABLELIVINGDescription; 
    $item->SUSTAINABLELIVINGCategoryID =isset($_POST['CategoryID']) ? $_POST['CategoryID'] : $item->SUSTAINABLELIVINGCategoryID; 
    $item->SUSTAINABLELIVINGWholesalePrice =isset($_POST['WholesalePrice']) ? $_POST['WholesalePrice'] : $item->SUSTAINABLELIVINGWholesalePrice; 
    $item->SUSTAINABLELIVINGListPrice =isset($_POST['ListPrice']) ? $_POST['ListPrice'] : $item->SUSTAINABLELIVINGListPrice; 
    $item->SUSTAINABLELIVINGColor =isset($_POST['Color']) ? $_POST['Color'] : $item->SUSTAINABLELIVINGColor; 


    
    $result = $item->updateSUSTAINABLELIVING();
    echo $result; 
    if ($result) {
        echo "<h2>Item $itemID updated</h2>\n";
    } else {
        echo "<h2>Problem updating item $itemID</h2>\n";
    }
} else {
    echo "<h2>Update Canceled for item $itemID</h2>\n";
}
}
} else {
echo "<h2>Please login first</h2>\n";
}
?>