<?php
    session_start(); 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  foreach($products as $key=>$data){
    echo "<div class='sanpham'>
<img src='".$data["image"]."'>
<h1><a href='#'>".$data["name"]."</a></h1>
<b>Giá: </b> <span class='gia'>".$data["price"]."</span><br>
<p>This Certified Refurbished product is tested and Certified to look and work like<a href='detail.php?id=".$data['id']."'>[...]</a></p>
</div>";
}

 ?>
</body>
</html>