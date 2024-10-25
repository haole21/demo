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
    <div class="form ">
        <form action="" method="get">
            <h1> Bài tập định dạng ngày </h1>
            Nhập ngày : <input type="text" name="date" id="" placeholder="dd/mm/yyyy">
            <br> <button type="submit"> Gửi </button>
        </form>
        <p></p>

    </div>
    <?php
    if (isset($_GET['date'])) {
        $word = "/";
        $mystring = $_GET['date'];
        if (strpos($mystring, $word) == false) {
            echo "nhập không đúng định dạng (dd/mm/yyyy)";
            return;
        }

        $arr = explode("/", $_GET['date'], 3);
        $date = date_create($arr[2] . "-" . $arr[1] . "-" . $arr[0]);
        echo "<div class='result'>";
        echo "  <h3> KẾT QUẢ </h3>";
        echo "Ngày đã nhập : " . $_GET['date'];
        echo "<p> a) Ngày " . $arr[0] . " Tháng " . $arr[1] . " Năm " . $arr[2] . " </p>";
        echo "<p> b) " . date_format($date, "l, F,  d S, Y") . "</p>";
        echo "  </div>";
    }
    ?>
</body>

</html>