<?php
require('connection.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category</title>
 </head>
 <body>
    <?php
    if(isset($_GET['id'])){
    $getid = $_GET['id'];
    $sql = "SELECT*FROM category WHERE category_id = $getid";
    $quary = $conn->query($sql);
    $data = mysqli_fetch_assoc($quary);
    $category_id = $data['category_id'];
    $category_name = $data['category_name'];
    $category_entrydate = $data['category_entrydate'];
}


    if (isset($_GET['category_name'])){
        $new_category_name       = $_GET['category_name'];
        $new_category_entrydate  = $_GET['category_entrydate'];
        $new_category_id         = $_GET['category_id'];
         
    $sql1= "UPDATE category 
    SET category_name='$new_category_name',
    category_entrydate='$new_category_entrydate',
    WHERE category_id=$new_category_id";
    
    if($conn->query($sql1) ==TRUE){
        echo 'update Successfull';
    }
    else{
       echo 'update fail';
    }

    }

   
    ?>

    <form action="edit_category.php" method="GET">
      Category:<br>
      <input type="text" name="category_name" value="<?php echo $category_name?>"><br><br>
      Category Entry Date :<br>
      <input type="date" name="category_entrydate"value="<?php echo $category_entrydate?>"><br><br>
      <input type="text" name="id" value="<?php echo $category_id?>"hidden>
      <input type="submit" value="update">

    </form>
 </body>
 </html>