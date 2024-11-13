<?php
// include('sustainablelivingproducts.php'); 
if (isset($_SESSION['login'])) {

    // Collect and sanitize inputs
    $itemID = filter_var(trim($_POST['itemID']), FILTER_SANITIZE_STRING);
    $itemCode = filter_var(trim($_POST['itemCode']), FILTER_SANITIZE_STRING);
    $itemName = filter_var(trim($_POST['itemName']), FILTER_SANITIZE_STRING);
    $itemDescription = filter_var(trim($_POST['itemDescription']), FILTER_SANITIZE_STRING);
    $color = filter_var(trim($_POST['color']), FILTER_SANITIZE_STRING);
    $wholesalePrice = filter_input(INPUT_POST, 'wholesalePrice', FILTER_VALIDATE_FLOAT);
    $listPrice = filter_input(INPUT_POST, 'listPrice', FILTER_VALIDATE_FLOAT);
    $categoryID = filter_var(trim($_POST['categoryID']), FILTER_SANITIZE_STRING); // Add CategoryID

    // Validation
    $errors = [];

    // Validate CategoryID (Add your validation for CategoryID here)
    if (empty($categoryID)) {
        $errors['categoryID'] = "CategoryID cannot be blank.";
    } elseif (strlen($categoryID) < 3) {
        $errors['categoryID'] = "CategoryID must have a minimum of 3 characters.";
    } elseif (strlen($categoryID) > 10) {
        $errors['categoryID'] = "CategoryID must have a maximum of 10 characters.";
    }

    // Validate other fields (as you did before)
    if (empty($itemID) || strlen($itemID) < 3 || strlen($itemID) > 10) {
        $errors['itemID'] = "ProductID must be between 3 and 10 characters and cannot be blank.";
    }
    if (empty($itemCode) || strlen($itemCode) < 3 || strlen($itemCode) > 10) {
        $errors['itemCode'] = "ProductCode must be between 3 and 10 characters and cannot be blank.";
    }
    if (empty($itemName) || strlen($itemName) < 10 || strlen($itemName) > 100) {
        $errors['itemName'] = "ProductName must be between 10 and 100 characters and cannot be blank.";
    }
    if (empty($itemDescription) || strlen($itemDescription) < 100 || strlen($itemDescription) > 255) {
        $errors['itemDescription'] = "Description must be between 100 and 255 characters and cannot be blank.";
    }
    if (empty($color) || strlen($color) < 3 || strlen($color) > 50) {
        $errors['color'] = "Color must be between 3 and 50 characters and cannot be blank.";
    }
    if ($wholesalePrice === false || $wholesalePrice <= 0 || $wholesalePrice > 1000) {
        $errors['wholesalePrice'] = "WholesalePrice must be a valid number greater than 0 and less than 1000.";
    }
    if ($listPrice === false || $listPrice <= 0 || $listPrice > 5000) {
        $errors['listPrice'] = "ListPrice must be a valid number greater than 0 and less than 5000.";
    }

    // If there are errors, display them
    if (count($errors) > 0) {
        foreach ($errors as $field => $error) {
            echo "<h2>$error</h2>\n";
        }
    } else {
        // Proceed with item creation if no errors
        if (SUSTAINABLELIVING::findSUSTAINABLELIVING($itemID)) {
            echo "<h2>Sorry, An item with the ID #$itemID already exists</h2>\n";
        } else {
            $item = new SUSTAINABLELIVING(
                $itemID,
                $itemCode,
                $itemName,
                $itemDescription,
                $categoryID,
                $wholesalePrice,
                $listPrice,
                $color
            );

            $result = $item->saveSUSTAINABLELIVING();
            if ($result) {
                echo "<h2>New Item #$itemID successfully added</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that item</h2>\n";
            }
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
