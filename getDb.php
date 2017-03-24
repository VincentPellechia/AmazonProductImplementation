<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'amazon_products');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);


$result = mysqli_query($con, "select * from products");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
?>
