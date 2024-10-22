<?php
require_once('../database.php');

class Category {
    public $SUSTAINABLELIVINGCategoryCode;
    public $SUSTAINABLELIVINGCategoryName;
    public $SUSTAINABLELIVINGCategoryID;
    public $SUSTAINABLELIVINGCategorySize;

    function __construct($SUSTAINABLELIVINGCategoryCode, $SUSTAINABLELIVINGCategoryName, $SUSTAINABLELIVINGCategoryID, $SUSTAINABLELIVINGCategorySize) {
        $this->SUSTAINABLELIVINGCategoryCode = $SUSTAINABLELIVINGCategoryCode;
        $this->SUSTAINABLELIVINGCategoryName = $SUSTAINABLELIVINGCategoryName;
        $this->SUSTAINABLELIVINGCategoryID = $SUSTAINABLELIVINGCategoryID;
        $this->SUSTAINABLELIVINGCategorySize = $SUSTAINABLELIVINGCategorySize; 
    }

    function __toString() {
        $output = "<h2>Category Number: $this->SUSTAINABLELIVINGCategoryID</h2>\n" .
                  "<h2>$this->SUSTAINABLELIVINGCategoryCode, $this->SUSTAINABLELIVINGCategoryName</h2>\n";
        return $output;
    }

    function saveCategory() {
        $db = getDB();
        $query = "INSERT INTO SUSTAINABLELIVINGCategories (SUSTAINABLELIVINGCategoryCode, SUSTAINABLELIVINGCategoryName, SUSTAINABLELIVINGCategoryID, Size, DateCreated) VALUES (?, ?, ?, ?, Now())";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssii",
            $this->SUSTAINABLELIVINGCategoryCode,
            $this->SUSTAINABLELIVINGCategoryName,
            $this->SUSTAINABLELIVINGCategoryID,
            $this->SUSTAINABLELIVINGCategorySize
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    public static function findCategory($categoryID) {
        $db = getDB();
        $query = "SELECT * FROM SUSTAINABLELIVINGCategories WHERE SUSTAINABLELIVINGCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $categoryID);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            return new Category(
                $row['SUSTAINABLELIVINGCategoryCode'],
                $row['SUSTAINABLELIVINGCategoryName'],
                $row['SUSTAINABLELIVINGCategoryID'],
                $row['Size']
            );
        }
        $db->close();
        return null;
    }

    public function updateCategory() {
        $db = getDB();
        $query = "UPDATE SUSTAINABLELIVINGCategories SET SUSTAINABLELIVINGCategoryCode = ?, SUSTAINABLELIVINGCategoryName = ?, Size = ? WHERE SUSTAINABLELIVINGCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssii",
            $this->SUSTAINABLELIVINGCategoryCode,
            $this->SUSTAINABLELIVINGCategoryName,
            $this->SUSTAINABLELIVINGCategorySize,
            $this->SUSTAINABLELIVINGCategoryID
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    public function removeCategory() {
        $db = getDB();
        $query = "DELETE FROM SUSTAINABLELIVINGCategories WHERE SUSTAINABLELIVINGCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->SUSTAINABLELIVINGCategoryID);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    public static function getCategories() {
        $db = getDB();
        $query = "SELECT * FROM SUSTAINABLELIVINGCategories";
        $result = $db->query($query);
        $categories = [];
        while ($row = $result->fetch_assoc()) {
            $categories[] = new Category(
                $row['SUSTAINABLELIVINGCategoryCode'],
                $row['SUSTAINABLELIVINGCategoryName'],
                $row['SUSTAINABLELIVINGCategoryID'],
                $row['Size']
            );
        }
        $db->close();
        return $categories;
    }
}
?>


