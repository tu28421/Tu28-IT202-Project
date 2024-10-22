<?php
include("sustainablelivingcategory.php"); 

$categoryID = $_GET['categoryID'];
if ((trim($categoryID) == '') || (!is_numeric($categoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else
 {
    $categoryID = isset($_GET['categoryID']) ? $_GET['categoryID'] : '';
    $categoryCode = isset($_GET['categoryCode']) ? $_GET['categoryCode'] : '';
    $categoryName = isset($_GET['categoryName']) ? $_GET['categoryName'] : '';
    $categorySize = isset($_GET['categorySize']) ? $_GET['categorySize'] : '';

  
    $category = new Category(
        $categoryCode,
        $categoryName,
        $categoryID,
        $categorySize
    );

    $result = $category->saveCategory();

    if ($result) {
        echo "<h2>New Category #$categoryID successfully added</h2>\n";
        echo "<h2>$category</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that category</h2>\n";
    }
}
?>
