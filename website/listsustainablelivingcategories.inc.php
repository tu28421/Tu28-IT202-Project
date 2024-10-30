<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="categoryID" size="20">
<?php
//include("sustainablelivingcategory.php");

$categories = Category::getCategories(); 

if ($categories) {
    foreach ($categories as $category) {
        $categoryID = $category->SUSTAINABLELIVINGCategoryID;
        $name = "$categoryID - $category->SUSTAINABLELIVINGCategoryCode, $category->SUSTAINABLELIVINGCategoryName";
        echo "<option value=\"$categoryID\">$name</option>\n";
    }
} else {
    echo "<h2>No categories found</h2>\n"; 
}
?>
   </select>
</form>

