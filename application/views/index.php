<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<style type="text/css">
		#container{
			margin:0px auto;
			width:500px;
			border:1px solid silver;
			padding:20px;
			font-family:sans-serif;
		}
		#container h4{
			margin:0px;
		}
		#add{
			width:340px;
			height:auto;
			overflow:hidden;
			padding:10px;
		}
		#container button{
			background-color:green;
			color:white;
			float:right;
			margin:5px;
		}
		#description{
			height:100px;
			width:250px;
		}
		#courses{
			padding:5px;
		}
		#error{
			background-color:pink;
			border:1px solid red;
			color:red;
		}
		table{
			vertical-align: top;
			border-collapse: collapse;
			border:1px solid black;
			font-size:12px;
			font-family:sans-serif;
			margin:10px;
		}
		td, th {
			border:1px solid black;
			padding:5px;
		}
		tr:nth-child(odd){
			background-color:#cccccc;
		}
		th{
			background-color:#999999;
		}
		button{
			background-color:white;
		}
		form{
			display:inline;
		}
	</style>
</head>
<body>
	<h4>Products</h4>
	<table>
		<thead>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Actions</th>
		</thead>
		<tbody>
		<?php foreach($products as $product){ ?>
			<tr><td><?=$product['name']?></td>
			<td><?=$product['description']?></td>
			<td><?=$product['price']?></td>
			<td><a href="/products/show/<?=$product['id']?>">Show</a> | <a href="/edit/<?=$product['id']?>">Edit</a> | <form action="/remove/<?=$product['id']?>" method="post"><button>Remove</button></form></td></tr><?php } ?>
		</tbody>
	</table>
	<a href="/add/">Add a new product</a>
</body>
</html>