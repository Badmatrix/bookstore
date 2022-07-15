<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bookstore";
    $conn = mysqli_connect ($servername, $username, $password);
    if (!$conn)
    {
        die ("Connection failed: " . mysqli_connect_error());
    } 
    $sql="CREATE DATABASE IF NOT EXISTS $dbname"; 
    if(mysqli_query($conn,$sql)){
    
        $conn = mysqli_connect ($servername, $username, $password,$dbname);
        $sql="CREATE TABLE IF NOT EXISTS soldbooks(
            BOOK_ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            BOOK_UNIT INT(10) NOT NULL,
            PRICE FLOAT(6) NOT NULL,
            AUTHORS    VARCHAR(50) NOT NULL,
            BOOK_NAME VARCHAR(50) NOT NULL ); ";
        
        if(mysqli_query($conn,$sql)){
            return $conn;
        }else {
                echo "TABLE not created". mysqli_error($conn);
            }  
}else {
    echo "error while creating database!!!". mysqli_error($conn) ;}
  



    
    
    $conn->close();