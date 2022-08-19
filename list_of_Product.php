  
<?php
require('connection.php');
$sql1   = "SELECT * FROM product";
$query1 = $conn->query($sql1);
$data_list =array();


while($data1  = mysqli_fetch_assoc($query1)){
$category_id = $data['category_id'];
$category_name = $data['category_name'];
$data_list =$category_name ;

}
 

?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST category</title>
 </head>
 <body>
  <?php 
      $sql = "SELECT* FROM product";
      $query = $conn->query($sql);
      echo "<table border='1'>
            <tr>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product code</th>
            <th>Action</th>
            </tr>";
     while($data = mysqli_fetch_assoc($query)){
             $product_id             = $data['product_id'];
             $product_name           = $data['product_name'];
             $product_category       = $data ['product_category'];
             $product_code           = $data['product_code'];

  echo "<tr>
            <td>$product_name</td>
            <td>$product_category</td>
            <td>$product_code</td>
            <td><a href='edit_product.php?id=$product_id'>Edit</a></td> 
        </tr>";
  }
  echo "</table>";
  ?>
 </body>
 </html> 