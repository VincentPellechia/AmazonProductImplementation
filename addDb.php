<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'amazon_products');

if(isset($_POST['ASIN'])) {
    $ASIN = $_POST['ASIN'];
    }
else{
    $ASIN = "null";
}
if(isset($_POST['Title'])) {
    $Title = $_POST['Title'];
    }
else{
    $Title = "null";
}
if(isset($_POST['MPN'])) {
    $MPN = $_POST['MPN'];
    }
else{
    $MPN = "null";
}
if(isset($_POST['Price'])) {
    $Price = $_POST['Price'];
    }
else{
    $Price = "null";
}

$con = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

$result = mysqli_query($con, "INSERT INTO `products` (`ASIN`, `Title`, `MPN`, `Price`) VALUES ('$ASIN', '$Title', '$MPN', '$Price');");

if($result){
  echo "Inserted";
}
else{
  echo mysqli_error($con);
}
?>
