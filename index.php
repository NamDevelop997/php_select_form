<?php
if (isset($_POST['save']))
    if (empty($_POST['pay'])) {
        echo "Vui lòng lựa chọn hình thức thanh toán!";
    } else {
        $pay = $_POST['pay'];
        echo $_POST['pay'];
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Form</title>
</head>

<body>
    <form action="" method="POST">
        <label for="pay">Hình thức thanh toán</label><br><br>
        <select name="pay" id="pay">
            <option value="">---options---</option>
            <option value="cod">Thanh toán tại nhà</option>
            <option value="banking">Thanh toán thẻ ngân hàng</option>
        </select>
        <input type="submit" name="save" value="save">
    </form>
</body>

</html>