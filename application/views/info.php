<!DOCTYPE html>
<html>
<head>
	<title>Product Information</title>
	<style type="text/css">
		#container{
			margin:0px auto;
			width:500px;
			border:1px solid silver;
			padding:20px;
			font-family:sans-serif;
	</style>
</head>
<body>
	<div id="container">
	<h4>Product Name</h4>
	<table>
		<tr>
			<td>Name:</td>
			<td><?=$name?></td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><?=$description?></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><?=$price?></td>
		</tr>
	</table>
	<a href="/edit/<?=$id?>">Edit</a> | <a href="/">Back</a>
	</div>
</body>
</html>