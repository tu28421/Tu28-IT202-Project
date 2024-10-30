<?php
require_once('C:\Users\rehma\OneDrive\Desktop\IT202Project\Tu28-IT202-Project\website\database.php');
// require_once('../database.php');


class SUSTAINABLELIVING {
    public $SUSTAINABLELIVINGID;
    public $SUSTAINABLELIVINGCode; 
    public $SUSTAINABLELIVINGName;
    public $SUSTAINABLELIVINGDescription;
    public $SUSTAINABLELIVINGCategoryID;
    public $SUSTAINABLELIVINGWholesalePrice;
    public $SUSTAINABLELIVINGListPrice;
    public $SUSTAINABLELIVINGColor;

    function __construct(
        $SUSTAINABLELIVINGID,
        $SUSTAINABLELIVINGCode,
        $SUSTAINABLELIVINGName,
        $SUSTAINABLELIVINGDescription,
        $SUSTAINABLELIVINGCategoryID,
        $SUSTAINABLELIVINGWholesalePrice,
        $SUSTAINABLELIVINGListPrice,
        $SUSTAINABLELIVINGColor
       
    ) {
        $this->SUSTAINABLELIVINGID = $SUSTAINABLELIVINGID;
        $this->SUSTAINABLELIVINGCode = $SUSTAINABLELIVINGCode;
        $this->SUSTAINABLELIVINGName = $SUSTAINABLELIVINGName;
        $this->SUSTAINABLELIVINGDescription = $SUSTAINABLELIVINGDescription;
        $this->SUSTAINABLELIVINGCategoryID = $SUSTAINABLELIVINGCategoryID;
        $this->SUSTAINABLELIVINGWholesalePrice = $SUSTAINABLELIVINGWholesalePrice;
        $this->SUSTAINABLELIVINGListPrice = $SUSTAINABLELIVINGListPrice;
        $this->SUSTAINABLELIVINGColor = $SUSTAINABLELIVINGColor;
    }

    function __toString() {
        return "<h2>SUSTAINABLELIVING: $this->SUSTAINABLELIVINGID</h2>" .
               "<h2>SUSTAINABLELIVINGCode: $this->SUSTAINABLELIVINGCode</h2>" .
               "<h2>SUSTAINABLELIVINGName: $this->SUSTAINABLELIVINGName</h2>";
    }

    function saveSUSTAINABLELIVING() {
        $db = getDB();
        $query = "INSERT INTO SUSTAINABLELIVINGProducts  (SUSTAINABLELIVINGProductID, SUSTAINABLELIVINGProductCode, SUSTAINABLELIVINGProductName, SUSTAINABLELIVINGDescription, SUSTAINABLELIVINGCategoryID, SUSTAINABLELIVINGWholesalePrice, SUSTAINABLELIVINGlistPrice, SUSTAINABLELIVINGColor, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "iissidds",
            $this->SUSTAINABLELIVINGID,
            $this->SUSTAINABLELIVINGCode,
            $this->SUSTAINABLELIVINGName,
            $this->SUSTAINABLELIVINGDescription,
            $this->SUSTAINABLELIVINGCategoryID,
            $this->SUSTAINABLELIVINGWholesalePrice,
            $this->SUSTAINABLELIVINGListPrice,
            $this->SUSTAINABLELIVINGColor
        );

        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    static function getAllSUSTAINABLELIVING() {
        $db = getDB();
        $query = "SELECT * FROM SUSTAINABLELIVINGProducts";
        $result = $db->query($query);
        $sustainableLivingArray = [];

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $sustainableLivingArray[] = new SUSTAINABLELIVING(
                    $row['SUSTAINABLELIVINGProductID'],
                    $row['SUSTAINABLELIVINGProductCode'],
                    $row['SUSTAINABLELIVINGProductName'],
                    $row['SUSTAINABLELIVINGDescription'],
                    $row['SUSTAINABLELIVINGCategoryID'],
                    $row['SUSTAINABLELIVINGWholesalePrice'],
                    $row['SUSTAINABLELIVINGListPrice'],
                    $row['SUSTAINABLELIVINGColor'],
                );
            }
        }

        $db->close();
        return !empty($sustainableLivingArray) ? $sustainableLivingArray : null;
    }

    static function findSUSTAINABLELIVING($SUSTAINABLELIVINGID) {
        $db = getDB();
        $query = "SELECT * FROM SUSTAINABLELIVINGProducts WHERE SUSTAINABLELIVINGProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $SUSTAINABLELIVINGID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $sustainableLiving = new SUSTAINABLELIVING(
                $row['SUSTAINABLELIVINGProductID'],
                $row['SUSTAINABLELIVINGProductCode'],
                $row['SUSTAINABLELIVINGProductName'],
                $row['SUSTAINABLELIVINGDescription'],
                $row['SUSTAINABLELIVINGCategoryID'],
                $row['SUSTAINABLELIVINGWholesalePrice'],
                $row['SUSTAINABLELIVINGListPrice'],
                $row['SUSTAINABLELIVINGColor'],
            );
            $stmt->close();
            $db->close();
            return $sustainableLiving;
        }

        $stmt->close();
        $db->close();
        return null;
    }

    function updateSUSTAINABLELIVING() {
        $db = getDB();
        $query = "UPDATE SUSTAINABLELIVINGProducts SET 
            SUSTAINABLELIVINGProductCode = ?, 
            SUSTAINABLELIVINGProductName = ?, 
            SUSTAINABLELIVINGDescription = ?, 
            SUSTAINABLELIVINGCategoryID = ?, 
            SUSTAINABLELIVINGWholesalePrice = ?, 
            SUSTAINABLELIVINGListPrice = ?, 
            SUSTAINABLELIVINGColor = ? 
            WHERE SUSTAINABLELIVINGProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "sssiddsi",
            $this->SUSTAINABLELIVINGCode,
            $this->SUSTAINABLELIVINGName,
            $this->SUSTAINABLELIVINGDescription,
            $this->SUSTAINABLELIVINGCategoryID,
            $this->SUSTAINABLELIVINGWholesalePrice,
            $this->SUSTAINABLELIVINGListPrice,
            $this->SUSTAINABLELIVINGColor,
            $this->SUSTAINABLELIVINGID
        );

        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    function removeSUSTAINABLELIVING() {
        $db = getDB();
        $query = "DELETE FROM SUSTAINABLELIVINGProducts WHERE SUSTAINABLELIVINGProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->SUSTAINABLELIVINGID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }
}
//Tanzeel ur Rehman,10/4/24, IT202-005, Phase 1 assignment 10/20/24
?>
