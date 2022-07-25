
<?php
require('connection.php');
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
  $sql = "SELECT* FROM category";
  $query = $conn->query($sql);
  echo "<table border='1'>
  <tr>
  <th>Category</th>
  <th>Date</th>
  <th>Action</th>
  </tr>";

  while($data = mysqli_fetch_assoc($query)){
  $category_name = $data['category_name'];
  $category_entrydate = $data['category_entrydate'];

  echo "<tr>
            <td>$category_name</td>
            <td>$category_entrydate</td>
            <td><a href='edit_category.php'>Edit</a></td>
            <td><a href='delet_category.php'>Edit</a></td>

  </tr>";
  }
  
  ?>
 </body>
 </html>