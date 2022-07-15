<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="table.css">
 <title> books availaible</title>
 </head>
<body>
<table id="books">
  
  <tr>
    <th>AUTHOR</th>
    <th>BOOK NAME</th>
    
  </tr>

  <?php
    include_once 'database.php';

      $author = $_POST['authors'];
      $bookname = $_POST['bookname'];
      $err="NO RESULT FOUND";


 if(empty($author) && empty($bookname)){
  echo "ENTER BOOK NAME OR AUTHOR FIELD CANNOT BE EMPTY";
  } else{
    if(!empty($author) && !empty($bookname))
    {
      $query = "SELECT authors, book_name   FROM soldbooks WHERE authors LIKE '%$author%' AND book_name LIKE '%$bookname%'";
    }

    elseif(!empty($author) && empty($bookname))
    {
      $query = "SELECT authors, book_name   FROM soldbooks WHERE authors LIKE '%$author%'";
    }
    
    elseif(!empty($bookname) && empty($author))
    {
      $query = "SELECT authors, book_name   FROM soldbooks WHERE book_name  LIKE '%$bookname%'";
    }
    
    

  $result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
 

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["authors"]; ?></td>
    <td><?php echo $row["book_name"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo $err;
}
}
?>
 </body>
</html>