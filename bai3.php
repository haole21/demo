<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form {
            border: 1px solid;
            margin: 50px 400px;
            text-align: center;
        }

        button {
            margin: 30px 50px 10px 0px;
        }

        .result {
            border: 1px solid;
            margin: 50px 300px;

        }

        h3 {
            text-align: center;
        }

        p {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="" method="get">
            <h1> Phép tính </h1>
            Số thứ 1 : <input type="text" name="num1" id="" style=" margin: 20px 0px;"> <br>
            Số thứ 2 : <input type="text" name="num2" id="" style=" margin: 20px 0px;"> <br>
            Chọn phép tính : <br>
            <input type="radio" name="tinhtoan" id="" value="Tổng" style=" margin: 10px 0px 0px 40px;"> Cộng
            <input type="radio" name="tinhtoan" id="" value="Trừ" style=" margin: 10px 0px 0px 40px;"> Trừ
            <input type="radio" name="tinhtoan" id="" value="Nhân" style=" margin: 10px 0px 0px 40px;"> Nhân
            <input type="radio" name="tinhtoan" id="" value="Chia" style=" margin: 10px 0px 0px 40px;"> Chia
            <br>
            <button type="submit"> submit </button>
        </form>
        <p></p>

    </div>
    <?php
    function ThucHienPhepTinh($num1, $num2)
    {
        switch ($_GET['tinhtoan']) {
            case "Tổng":
                //code block
                return $num1 + $num2;

            case "Trừ":
                //code block;
                return $num1 - $num2;
            case "Nhân":
                //code block
                return $num1 * $num2;

            case "Chia":
                return $num1 / $num2;
                break;
        }
    }
    if (isset($_GET['num1'])) {
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        echo "<div class='result'>";
        echo "  <h3> KẾT QUẢ </h3>";
        echo "<p> " . $_GET['tinhtoan'] . " 2 số : " . $num1 . " và " . $num2 . " là " . ThucHienPhepTinh($num1, $num2)  . " </p>";

        echo "  </div>";
    }
    ?>
</body>

</html>