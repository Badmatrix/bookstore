<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calc.css">
    <title>Document</title>
</head>
<body>
<div class="calc">
    <form action="calc.php" method="post">
        <h5>matrix calculator</h5>
        <input type="text" name="num1">
        <select name="op" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="num2">
        <input type="submit" value="=">
    
    <?php
    

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $op=$_POST['op'];

        if($op == "+"){
            echo $num1 + $num2 ;
        }elseif($op == "-"){
            echo $num1 - $num2 ;
        }elseif($op == "*"){
            echo $num1 * $num2 ;
        }elseif($op == "/"){
            echo $num1 / $num2 ;
        }elseif($op == "%"){
            echo $num1 % $num2 ;
        }else{
            echo "invalid operator";
        }
    }
    ?>
    </div>
    </form>
</body>
</html>