<?php
error_log("\$_GET " . print_r($_GET, true)); 

include("sustainablelivingcategory.php"); 

$categoryID = $_GET['categoryID'];


if ((trim($categoryID) == '') || (!is_numeric($categoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
    $category = Category::findCategory($categoryID);

   
    if ($category) {
        $result = $category->removeCategory();
        if ($result) {
            echo "<h2>Category $categoryID removed</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem removing category $categoryID</h2>\n";
        }
    } else {
        echo "<h2>Category $categoryID not found</h2>\n";
    }
}
?>
