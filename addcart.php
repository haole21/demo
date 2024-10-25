<?php
    session_start(); 
	

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[]; 
    }
    
    function addToCart($id , $quantity ){
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]+= $quantity ; 
    }else {
        $_SESSION['cart'][$id] = $quantity ; 
    }
    

} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cart</title>
	<style>
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
    </style>
</head>
<body>
	<h1>Your cart</h1>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>#id</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Action</th>
	</tr>

    <?php
    include 'bai4.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'] ; 
        $quantity = 1 ; 
        addToCart($id , $quantity);
    }
   
    foreach($_SESSION['cart'] as $id => $quantity ){
        $count = $id - 1 ; 
        $product = $products[$count]; 
        $price = $product['price'] * $quantity;
        ?>
         <tr>
		<td><?php  echo "p0".$id ;  ?></td>
		<td><?php echo  $product['name'] ;  ?></td>	
		<td><?php  echo $quantity ;  ?></td>
		<td><?php  echo $price ;  ?></td>
		<td><a href='?remove=<?php echo $count+1 ;  ?>'  >Delete</a></td>
	    </tr>
         <?php 
		
	 }
    
   
    ?> 
	<?php
	 if(isset($_GET['remove'])){
		unset($_SESSION['cart'][$_GET['remove']]);
	 }
	 ?>
	</table>
</body>
</html>