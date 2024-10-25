<?php
    session_start(); 
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
    <Style>
      .sanpham{
	height: 200px;
	width:80%;
}
img{ 
	float: left; 
}
.gia{  
	color: rgb(108,143,99);
	font-size: 15pt;
	font-weight: bold;
	font-style: italic;
}
p{
	font-style: italic;
}
h1{
	color:rgb(71,173,211);
}
h1>a:link{
	text-decoration: none;
	color: rgb(71,173,211);
}
p>a:link{
	text-decoration: none;
	color:black;
}
.addcart{
	background: #47add3;
	color: white;
	text-decoration: none;
	padding: 5px;
	border-radius: 5px;
}
.addcart:hover{
	background: #375561;
}
table{
	margin: 0 auto;
	width: 800px
}
    </Style>
</head>
<body>
    <?php
    include 'bai4.php';
      $id = isset($_GET['id']) ? $_GET['id'] : null;
      foreach ($products as $item) {
        if ($item['id'] == $id) {
            
    echo "<div class='sanpham'>
               <img src='".$item["image"]."'>
               <h1>".$item["name"]."</h1>
               <b>Giá: </b> <span class='gia'>".$item["price"]."</span><br>
               <p>".$item["desc"]."</p>
               <a class='addcart' href='addcart.php?id=".$_GET['id']."'>Add To Cart</a>
               </div>";

    break;
        }
    }
         
        
    ?>
     
       
		
	</div>
</body>
</html>