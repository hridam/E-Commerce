<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert for Shoes </title>
</head>

<body>
    <div>
        <form method="post">
            Shoes Name :: <input type="text" name="name"> <br><br>
            Shoes Opening Pic :: <input type="text" name="op"> <br><br>
            Shoes First Pic :: <input type="text" name="pic_1"> <br><br>
            Shoes Second Pic :: <input type="text" name="pic_2"> <br><br>
            Shoes Third Pic :: <input type="text" name="pic_3"> <br><br>
            Shoes Fourth Pic :: <input type="text" name="pic_4"> <br><br>
            Shoes Price :: <input type="number" name="price"> <br><br>
            Shoes Description no 1 :: <input type="text" name="dec_1"> <br><br>
            Shoes Description no 2 :: <input type="text" name="dec_2"> <br><br>
            Shoes Color :: <input type="text" name="color"> <br><br>
            Shoes Availiability :: <input type="text" name="av"> <br><br>
            Shoes Category :: <input type="text" name="cat"> <br><br>
            Shoes Shipping Area :: <input type="text" name="area"> <br><br>
            Shoes Shipping Fee :: <input type="text" name="sf"> <br><br>
            Shoes Quantaty :: <input type="number" name="qty"> <br> <br>

            <input type="submit" name="SUBMIT">


        </form>
    </div>
</body>

</html>
<?php
include("dbconn.php");
if (isset($_POST['SUBMIT'])) {
    $name = $_POST['name'];
    $op = $_POST['op'];
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
    echo $sql;
    if (mysqli_query($con, $sql)) {
        echo "<h1>data is stored</h3>";
    } else {
        echo "Error:: Sorry failed to insert" . mysqli_error($con);
    }
}
?>