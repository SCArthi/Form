<!DOCTYPE html>
<html>
<head>
	<title>Sample Form with connection</title>

	<style type="text/css">
		form{
			padding-top: 120px;
			text-align: center;
			font-size: 30px;
		}
		input{
			width: 250px;
			height: 40px;
			font-size: 30px;
		}
	</style>

</head>
<body>
	<form method="POST" action="connect.php">
		Username : <input type="text" name="name"><br><br>
		Password : <input type="password" name="pwd"><br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>