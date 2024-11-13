<?php
if (!isset($_POST['itemID']) or (!is_numeric($_POST['itemID']))) {
?>
   <h2>You did not select a valid itemID value</h2>
   <a href="index.php?content=listitems">List items</a>
   <?php
} else {
   $itemID = $_POST['itemID'];
   $item = SUSTAINABLELIVING::findSUSTAINABLELIVING($itemID);
   
   if ($item) {
   ?>
       <h2>Update Item <?php echo htmlspecialchars($item->SUSTAINABLELIVINGID); ?></h2><br>
       <form name="items" action="index.php" method="post">
           <table>
               <tr>
                   <td>ItemID</td>
                   <td><?php echo htmlspecialchars($item->SUSTAINABLELIVINGID); ?></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="itemName" value="<?php echo htmlspecialchars($item->SUSTAINABLELIVINGName); ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                   <td><input type="text" name="categoryID" value="<?php echo htmlspecialchars($item->SUSTAINABLELIVINGCategoryID); ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                   <td><input type="text" name="listPrice" value="<?php echo htmlspecialchars($item->SUSTAINABLELIVINGListPrice); ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Item">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="itemID" value="<?php echo htmlspecialchars($itemID); ?>">
           <input type="hidden" name="content" value="changesustainablelivingproduct">
       </form>
   <?php
      } else {
        ?>
            <h2>Sorry, item <?php echo htmlspecialchars($itemID); ?> not found</h2>
            <a href="index.php?content=listitems">List items</a>
     <?php
        }
     }
?>
