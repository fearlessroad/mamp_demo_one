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
		input:placeholder{
			color:black;
		}
	</style>
</head>
<body>
	<div id="container">
	<h4>Edit Product</h4>
	<form action="/edit/<?=$id?>" method="post">
		<label>Name<br>
			<input type="text" name="name" placeholder="<?=$name?>"></label><br>
		<label>Description<br>
			<input type="text" name="description" placeholder="<?=$description?>"></label><br>
		<label>Price<br>
			<input type="text" name="price" placeholder="<?=$price?>"></label><br>
		<button>Update</button>
	</form>
	<a href="/show/<?=$id?>">Show</a> | <a href="/">Back</a>
	</div>
</body>
</html>