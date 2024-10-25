<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $txt = "Chào mừng các bạn đến với môn học Lập Trình Web Back-end 1";
    $arr = explode(" ", $txt);
    foreach ($arr as $data) {
        echo $data . "<br> <br>";
    }
    ?>
</body>

</html>