<h2>Select Item</h2>
<form name="items" method="post">
   <select name="itemID" size="20">
<?php
//include("SUSTAINABLELIVINGproducts.php"); 

$items = SUSTAINABLELIVING::getAllSUSTAINABLELIVING(); 
if ($items) {
    foreach ($items as $item) {
        $itemID = $item->SUSTAINABLELIVINGID; 
        $itemCode = $item->SUSTAINABLELIVINGCode;
        $itemName = $item->SUSTAINABLELIVINGName;
        $itemDescription = $item->SUSTAINABLELIVINGDescription;
        $itemCategoryID = $item->SUSTAINABLELIVINGCategoryID;
        $itemWholesalePrice = $item->SUSTAINABLELIVINGWholesalePrice;
        $itemListPrice = $item->SUSTAINABLELIVINGListPrice;
        $itemColor = $item->SUSTAINABLELIVINGColor;

        $option = "$itemID - $itemCode - $itemName - $itemDescription - $itemCategoryID - $itemWholesalePrice - $itemListPrice - $itemColor";
        echo "<option value=\"$itemID\">$option</option>\n";
    }
} else {
    echo "<h2>No items found.</h2>\n"; 
}
?>
   </select>
</form>
