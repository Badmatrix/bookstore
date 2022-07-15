<html lang="en">
<head>
    <link rel="stylesheet" href="admn_page.css">

    <script src="https://kit.fontawesome.com/f370aa7cd1.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN page</title>
   
</head>

<body>

    
<main>
    <div class="contain">
        <h1><i class="fas fa-book" style="color: white;"></i> BOOK STORE</h1>
    </div>
</main>
<?php
include "database.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$query = mysqli_query($conn,"SELECT * FROM soldbooks WHERE book_id='$id'"); // select query

$data = mysqli_fetch_assoc($query); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $bookid = $_POST['BOOK_ID'];
    $bookunit = $_POST['BOOK_UNIT'];
    $price = $_POST['PRICE'];
    $author = $_POST['AUTHORS'];
    $bookname = $_POST['BOOK_NAME'];

    $update = mysqli_query($conn,"UPDATE soldbooks SET BOOK_UNIT='$bookunit', PRICE = '$price', AUTHORS='$author',
     BOOK_NAME='$bookname' where BOOK_ID='$bookid'");
	
    if($data)
    {
        mysqli_close($conn); // Close connection
        header("location:db_table.php"); // redirects to all records page
        echo "record successfully updated";
        exit;
    }
    else
    {
        echo "failed to update record ". mysqli_error($conn);
    }    	
}
?>



<form  method="post" class="stdform">

 <div class="label">   
     <div class="biu"> 
            <div class="id">
                <label for="BOOK_ID"  i class="fas fa-id-badge" style="color: blue; font-size: 30px;"></i></label>
                <input type="text"   value="<?php echo $data['BOOK_ID']?>" class="bku" name="BOOK_ID" >
            </div>

            <div class="bookunit">
                <label  for="BOOK_UNIT" style="color: blue; font-size: 30px;" i class="fa fa-list"></i></label>
                <input type="text" class="bku"  value="<?php echo $data['BOOK_UNIT']?>" name="BOOK_UNIT" required>
            </div>
            <div class="price">
                <label  for="price" style="color: blue; font-size: 30px;" i class="fa fa-dollar"></i></label>
                <input type="text" value="<?php echo $data['PRICE']?>" class="bku" placeholder="PRICE" name="PRICE" required>
                
            </div>
           
     </div>  


 <div class="bknu">
    <div class="author">
             <label for="AUTHORS" style="color: blue; font-size: 30px;"></i> <i class="fa fa-user"></i></label>
                <input type="text"  value="<?php echo $data['AUTHORS']?>" name="AUTHORS" required>
            </div>

            <div class="bookname">
                <label  for="BOOK_NAME" style="color: blue; font-size: 30px;" i class="fas fa-book"></i></label>
                <input type="text" class="bkn"  value="<?php echo $data['BOOK_NAME']?>" name="BOOK_NAME" required>
            </div>
  </div>
  <div class="btn">
                <button type="submit"id="sbtb" name="submit" value="submit" style="background: green ;"><i class="fa fa-plus"></i>  </button>
                <!-- <button type="delete"id="delb"  style="background: red;"><i class="fa fa-trash"></i>   </button> -->
                <button type="search"id="refb" name="update" value="update" style="background: blue;"><i class="fas fa-edit"></i><a  href="update.php?id=<?php echo $id; ?>"></a> </button>
                <!-- <button type="update"  id="edtb"  style="background: snow;"><i class="fa fa-pen"></i>   </button> -->
            </div><br>
          
     
 </div>
  <!-- <input type="submit" name="update" value="Update"> -->
</form>