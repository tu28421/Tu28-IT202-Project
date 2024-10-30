<?php
//include("sustainablelivingcategory.php"); 
if (isset($_SESSION['login'])) {
$categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
if ((trim($categoryID) == '') || (!is_int($categoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else
 {
    $categoryID = htmlspecialchars($_POST['categoryID']) ? $_POST['categoryID']:'';
    $categoryCode = htmlspecialchars($_POST['categoryCode']) ? $_POST['categoryCode'] : '';
    $categoryName = htmlspecialchars($_POST['categoryName']) ? $_POST['categoryName'] : '';
    $categorySize = htmlspecialchars($_POST['categorySize']) ? $_POST['categorySize'] : '';

  
    $category = new Category(
        $categoryCode,
        $categoryName,
        $categoryID,
        $categorySize
    );

    $result = $category->saveCategory();

    if ($result)
           echo "<h2>New Category #$categoryID successfully added</h2>\n";
       else
           echo "<h2>Sorry, there was a problem adding that category</h2>\n";
   }
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>
