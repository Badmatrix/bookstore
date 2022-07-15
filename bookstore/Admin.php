<?php
include_once('database.php');
//css...adminpage.css
$failed="";
$Successful="";
$Success=false;

$errorbookid="";
$errorbookunit="";
$errorprice="";
$errorauthor="";
$errorbookname="";
$error=false;


if($_SERVER['REQUEST_METHOD'] == 'POST')
  {

    $bookid = $_POST['BOOK_ID'];
    $bookunit = $_POST['BOOK_UNIT'];
    $price = $_POST['PRICE'];
    $author = $_POST['AUTHORS'];
    $bookname = $_POST['BOOK_NAME'];
    
    
    
    if(!is_numeric($bookunit)){
        $errorbookunit="invalid bookunit";
        $error=true;

    }
    if(!is_numeric($price)){
        $errorprice="invalid Amount";
        $error=true;
    }
    if(is_numeric($author)){
        $errorauthor="invalid Author";
        $error=true;

    }
    if(is_numeric($bookname)){
        $errorbookname="invalid bookname";
        $error=true;

    }else{
  $sql = "INSERT INTO soldbooks (BOOK_ID,BOOK_UNIT,PRICE,AUTHORS,BOOK_NAME) 
                VALUES ('$bookid','$bookunit','$price','$author','$bookname')";
            if(mysqli_query($conn, $sql))
            {
               $Successful="Records added successfully.";
                $Success=true;
            } 
            else
            {
                $failed="ERROR:  not able to execute." .$sql. mysqli_error($conn);
                $error=true;
            }

        // Close connection
         mysqli_close($conn);

       }
 }


 


?>

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
    <script src="https://kit.fontawesome.com/f370aa7cd1.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>

<body>

    
<main>
    <div class="contain">
        <h1><i class="fas fa-book" style="color: white;"></i> BOOK STORE</h1>
    </div>
</main>
  


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="stdform">

 <div class="label">   
     <div class="biu"> 
            <div class="id">
                <label for="BOOK_ID"  i class="fas fa-id-badge" style="color: blue; font-size: 30px;"></i></label>
                <input type="text" placeholder="BOOK ID" class="bku" name="BOOK_ID" >
                <small style="color: red; font-style:italic; font-weight:700;"> <?php echo $errorbookid ?> </small> 
            </div>

            <div class="bookunit">
                <label  for="BOOK_UNIT" style="color: blue; font-size: 30px;" i class="fa fa-list"></i></label>
                <input type="text" class="bku" placeholder="UNIT" name="BOOK_UNIT" required>
                <small style="color: red; font-style:italic; font-weight:700;"> <?php echo $errorbookunit ?></small>
            </div>
            <div class="price">
                <label  for="price" style="color: blue; font-size: 30px;" i class="fa fa-dollar"></i></label>
                <input type="text" class="bku" placeholder="PRICE" name="PRICE" required>
                <small style="color: red; font-style:italic; font-weight:700;"> <?php echo $errorprice ?></small>
            </div>

           
     </div>  


<div class="bknu">
    <div class="author">
             <label for="AUTHORS" style="color: blue; font-size: 30px;"></i> <i class="fa fa-user"></i></label>
                <input type="text" placeholder="AUTHOR" name="AUTHORS" required>
                <small style="color: red; font-style:italic; font-weight:700;"> <?php echo $errorauthor ?></small>
            </div>

            <div class="bookname">
                <label  for="BOOK_NAME" style="color: blue; font-size: 30px;" i class="fas fa-book"></i></label>
                <input type="text" class="bkn" placeholder="BOOK NAME" name="BOOK_NAME" required>
                <small style="color: red; font-style:italic; font-weight:700;"> <?php echo $errorbookname ?></small>
            </div>
  </div>
           
            <div class="btn">
                <button type="submit"id="sbtb"  style="background: green ;"><i class="fa fa-plus"></i>  </button>
                <!-- <button type="delete"id="delb"  style="background: red;"><i class="fa fa-trash"></i>   </button> -->
                <button type="search"id="refb" style="background: blue;"><i class="fas fa-edit"></i><a  href="update.php?id=<?php echo $id; ?>"></a> </button>
                <!-- <button type="update"  id="edtb"  style="background: snow;"><i class="fa fa-pen"></i>   </button> -->
            </div><br>
           <b style="color: green;"> <?php echo $Successful ?></b>
           <b style="color: red;"> <?php echo $failed ?></b>
     
 </div>
    </form>
    <ul>
        <li>
            <a href="retrieve.php" id="re">search</a>
        <a href="db_table.php">list</a>
        </li>
    </ul>
    

 



  
    </body>
    </html>