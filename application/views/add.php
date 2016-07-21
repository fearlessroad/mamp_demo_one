<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<style type="text/css">
		#container{
			margin:0px auto;
			width:500px;
			border:1px solid silver;
			padding:20px;
			font-family:sans-serif;
		}
		button{
			margin:10px;
			background-color:white;
		}
	</style>
</head>
<body>
	<div id="container">
	<h4>Add Product</h4>
	<form action="/add/" method="post">
		<label>Name<br>
			<input type="text" name="name"></label><br>
		<label>Description<br>
			<input type="text" name="description"></label><br>
		<label>Price<br>
			<input type="text" name="price"></label><br>
		<button>Update</button>
	</form>
	<a href="/">Back</a>
	</div>
</body>
</html>