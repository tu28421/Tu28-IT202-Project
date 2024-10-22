<?php
include("sustainablelivingcategory.php");

$categories = Category::getCategories(); 

if ($categories) {
    foreach ($categories as $category) {
        $categoryID = $category->SUSTAINABLELIVINGCategoryID;
        $name = "$categoryID - $category->SUSTAINABLELIVINGCategoryCode, $category->SUSTAINABLELIVINGCategoryName";
        echo "$name<br>";
    }
} else {
    echo "<h2>No categories found</h2>\n"; 
}
?>
