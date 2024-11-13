<?php
// include("sustainablelivingcategory.php"); 
if (isset($_SESSION['login'])) {

    $categoryID = htmlspecialchars(trim($_POST['categoryID']));
    if (empty($categoryID) || strlen($categoryID) < 3 || strlen($categoryID) > 10) {
        echo "<h2>CategoryID must be between 3 and 10 characters and cannot be blank.</h2>\n";
    }

    $categoryCode = htmlspecialchars(trim($_POST['categoryCode']));
    if (empty($categoryCode) || strlen($categoryCode) < 3 || strlen($categoryCode) > 10) {
        echo "<h2>CategoryCode must be between 3 and 10 characters and cannot be blank.</h2>\n";
    }

    $categoryName = htmlspecialchars(trim($_POST['categoryName']));
    if (empty($categoryName) || strlen($categoryName) < 10 || strlen($categoryName) > 100) {
        echo "<h2>CategoryName must be between 10 and 100 characters and cannot be blank.</h2>\n";
    }

    $categorySize = htmlspecialchars(trim($_POST['categorySize']));
    if (empty($categorySize) || strlen($categorySize) < 3 || strlen($categorySize) > 50) {
        echo "<h2>CategorySize must be between 3 and 50 characters and cannot be blank.</h2>\n";
    }
    
    else if (Category::findCategory($categoryID)) {
        echo "<h2>Sorry, a category with the ID #$categoryID already exists</h2>\n";
    } else {

        $category = new Category(
            $categoryCode,
            $categoryName,
            $categoryID,
            $categorySize
        );

        $result = $category->saveCategory();

        if ($result) {
            echo "<h2>New Category #$categoryID successfully added</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that category</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
