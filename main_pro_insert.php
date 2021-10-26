<?php
include("dbconn.php");
if (isset($_POST['SUBMIT'])) {
    $name = $_POST['name'];
    echo $name . "hi i m hridam   ";
    $op = $_POST['op'];
    echo $op;
    $pic_1 = $_POST['pic_1'];
    $pic_2 = $_POST['pic_2'];
    $pic_3 = $_POST['pic_3'];
    $pic_4 = $_POST['pic_4'];
    $price = $_POST['price'];
    $dec_1 = $_POST['dec_1'];
    $dec_2 = $_POST['dec_2'];
    $color = $_POST['color'];
    $av = $_POST['av'];
    $cat = $_POST['cat'];
    $area = $_POST['area'];
    $sf = $_POST['sf'];
    $qty = $_POST['qty'];


    if (!$con) {
        die("ERROR:: Couldn't connect" . mysqli_connect_error());
    }

    $sql = "INSERT INTO `nike`(`Name`, `Opening_image`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `Price`, `Description_1`, `Description_2`, `Color`, `Available`, `Category`, `Shipping_Area`, `Shipping_Fee`, `Qty`) VALUES ('" . $name . "','" . $op . "','" . $pic_1 . "','" . $pic_2 . "','" . $pic_3 . "','" . $pic_4 . "','" . $price . "','" . $dec_1 . "','" . $dec_2 . "','" . $color . "','" . $av . "','" . $cat . "','" . $area . "','" . $sf . "','" . $qty . "')";

    if (mysqli_query($con, $sql)) {
        echo "<h1>data is stored</h3>";
    } else {
        echo "Error:: Sorry failed to insert" . mysqli_error($con);
    }
}
