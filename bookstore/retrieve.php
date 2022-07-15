<?php


include('database.php');



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
        <title>student_retrieve</title>
        
</head>

 <body>
             
    <main>
        <div class="contain">
            <h1><i class="fas fa-book" style="color: white;"></i> BOOK STORE</h1>
        </div>
    </main>
    
  <form action="search.php" method="post" class="">


  <div class="bknu">
        <div class="author">
            <label for="authors" style="color: blue; font-size:  30px;"> <i class="fa fa-user"></i></label>
             <input type="text" placeholder="AUTHOR" name="authors" >
     </div>

     <div class="bookname">
            <label  for="bookname" style="color: blue; font-size: 30px;"><i class="fas fa-book"></i></label>
            <input type="text" id="bkn" placeholder="BOOKNAME" name="bookname" >
      </div>
  </div>
            
            <button type="submit" id="serb" name="Submit"><i class="fa fa-search"></i> search
            </button>
      
 </form>
   










    
</body>
</html>