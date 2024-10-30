<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Item ID:</td>
           <td><input type="number" name="itemID" size="4"></td>
       </tr>
       <tr>
           <td>itemCode:</td>
           <td><input type="number" name="itemCode" size="10"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="itemName" size="20"></td>
       </tr>
       <tr>
           <td>itemDescription:</td>
           <td><input type="text" name="itemDescription" ></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="categoryID" size="4"></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="number" name="wholesalePrice" size="10"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="listPrice" size="10"></td>
       </tr>
       <tr>
           <td>color:</td>
           <td><input type="text" name="color" size="20"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addsustainablelivingproduct">
</form>
