<html lang="en">
<head>
<link rel="stylesheet" href="table.css">
<script src="https://kit.fontawesome.com/f370aa7cd1.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <title>database</title>
</head>
    <div class="contain">
        <h1><i class="fas fa-book" style="color: white;"></i> BOOK STORE</h1>
    </div>
<body>
<div class="table">
    <table id=books>
          <tr>
            <th >ID</th>
            <th> UNIT SOLD</th>
            <th> PRICE</th>
            <th>AUTHOR</th>
            <th>BOOK NAME</th>
            <th>EDIT</th>
            <th>DELETE</th>

          </tr>
 <?php
// $nf="no result";
// $non=false;
 include_once "database.php";

  $sql = "SELECT * FROM soldbooks"; 
    $result = $conn->query ($sql);
      if($result -> num_rows > 0){
          while($row = $result -> fetch_assoc()){
             $id = $row["BOOK_ID"];
 ?>
  <tr>
      <td><?php echo $row["BOOK_ID"]; ?></td>
      <td><?php echo $row["BOOK_UNIT"]; ?></td>
      <td><?php echo $row["PRICE"]; ?></td>
      <td><?php echo $row["AUTHORS"]; ?></td>  
      <td><?php echo $row["BOOK_NAME"]; ?></td> 
      <td ><a id="ue" href="update.php?id=<?php echo $id; ?>"> <i class="fas fa-edit"></i>edit</a></td>
      <td><a id="ud" href="delete.php?id=<?php echo $id; ?>"> <i class="far fa-trash-alt">delete</i></a></td>
  </tr>	
        
<?php
    } 
?>
</table>
                
   <?php
            } ;
            if($result -> num_rows > 0){
              while($row = $result -> fetch_assoc()) echo "no result"  ;}
                  
         $conn-> close(); //Make sure to close out the database connection

         
        ?>

      
</table>
</div>

<a id="bk" href="admin.php">New record</a>


</body>
</html>