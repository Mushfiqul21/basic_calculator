<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <style>
        .box-cal{
    width: 30%;
    margin: 0 auto;
    background: #ffe7c7;
    padding: 2%;
    border-radius: 20px;
}
.input-des{
    width: 70%;
    border: 2px solid gray;
    border-radius: 15px;
    margin-top: 20px;
    padding: 10px;
}
.btn{
    padding: 10px 25px;
    background: orange;
    border-radius: 5px;
    margin-top: 20px;
    margin-bottom:50px;
    margin-right: 10px;
}
    </style>
</head>
<body>
    
    <div class="box-cal">
    <h1>Basic Calculator in PHP</h1>
    <form action="" method="GET">
        <input type="number" name="first_input" placeholder="Enter a number" class="input-des" required>
        <br>
        <input type="number" name="second_input" placeholder="Enter a number" class="input-des" required>
        <br>
        <button class="btn" name="plus">+</button>
        <button class="btn" name="minus">-</button>
        <button class="btn" name="into">*</button>
        <button class="btn" name="divide">/</button>
        <button class="btn" name="clear">Clear</button>
    </form>
    <?php
if(isset($_GET['plus'])){
    $first_number = $_GET['first_input'];
    $second_number = $_GET['second_input'];
    $result = $first_number + $second_number;
    echo "Result: ".$result;
    }
    else if(isset($_GET['minus'])){
        $first_number = $_GET['first_input'];
        $second_number = $_GET['second_input'];
        $result = $first_number - $second_number;
        echo "Result: ".$result;
    }
    else if(isset($_GET['into'])){
        $first_number = $_GET['first_input'];
        $second_number = $_GET['second_input'];
        $result = $first_number * $second_number;
        echo "Result: ".$result;
    }
    else if(isset($_GET['divide'])){
        $first_number = $_GET['first_input'];
        $second_number = $_GET['second_input'];
        $result = $first_number / $second_number;
        echo "Result: ".$result;
    }
    else if(isset($_GET['clear'])){
        $result = 0;
        echo $result;
    }
    else{
        echo '0';
    }
    
    ?>
    </div>
</body>
</html>