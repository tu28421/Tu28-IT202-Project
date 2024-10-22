<?php
include("sustainablelivingproducts.php");

$itemID = $_GET['itemID'];
$item = SUSTAINABLELIVING::findSUSTAINABLELIVING($itemID); 

if ($item) {
    $result = $item->removeSUSTAINABLELIVING(); 
    if ($result) {
        echo "<h2>Item $itemID removed</h2>\n";
    } else {
        echo "<h2>Sorry, problem removing item $itemID</h2>\n";
    }
} else {
    echo "<h2>Item $itemID not found</h2>\n"; 
}
?>
