<?php
require('connection.php');

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit  product</title>
 </head>
 <body>
    <?php
  if(isset($_GET['id'])){
    $getid = $_GET['id'];
    $sql ="SELECT * FROM product WHERE product_id=$getid";

    $query = $conn->query($sql);
    $data = mysqli_fetch_assoc($query);
    $product_id = $data['product_id'];
    $product_name = $data['product_name'];
    $product_category = $data['product_category'];
    $product_entry_date = $data['product_entry_date'];
  }


    ?>
<?php
    $sql = "SELECT * FROM category"; 

    $query =  $conn->query($sql);
    

?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="GET">
      Product Name:<br>
      <input type="text" name="product_name"><br><br>
      Product Category:<br>
      <select name="product_category">
        <?php 
        while ($data = mysqli_fetch_array($query)){
         $category_id = $data['category_id'];
         $category_name = $data['category_name'];
         echo    "<option value='$category_id'>$category_name</option>";
        }
        ?>
     


      </select>
      <br><br>
      Product code:<br>
      <input type="text" name="product_code"><br><br>

       Product Entry Date :<br>
      <input type="date" name="product_entry_date"><br><br>
      <input type="submit" value="submit">

    </form>
 </body>
 </html> 