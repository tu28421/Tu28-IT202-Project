<?php
include("sustainablelivingcategory.php"); 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$categoryID = $_GET['categoryID'];
$category = Category::findCategory($categoryID); 

if ($category) {
    $category->SUSTAINABLELIVINGCategoryID = isset($_GET['SUSTAINABLELIVINGCategoryID']) ? $_GET['SUSTAINABLELIVINGCategoryID'] : $category->SUSTAINABLELIVINGCategoryID;
    $category->SUSTAINABLELIVINGCategoryCode = isset($_GET['SUSTAINABLELIVINGCategoryCode']) ? $_GET['SUSTAINABLELIVINGCategoryCode'] : $category->SUSTAINABLELIVINGCategoryCode;
    $category->SUSTAINABLELIVINGCategoryName = isset($_GET['SUSTAINABLELIVINGCategoryName']) ? $_GET['SUSTAINABLELIVINGCategoryName'] : $category->SUSTAINABLELIVINGCategoryName;
    $category->SUSTAINABLELIVINGCategorySize = isset($_GET['SUSTAINABLELIVINGCategorySize']) ? $_GET['SUSTAINABLELIVINGCategorySize'] : $category->SUSTAINABLELIVINGCategorySize;


    $result = $category->updateCategory(); 
    if ($result) {
        echo "<h2>Category $categoryID updated</h2>\n";
    } else {
        echo "<h2>Problem updating category $categoryID</h2>\n";
    }
} else {
    echo "<h2>Category $categoryID not found</h2>\n";
}
?>
