<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add New User</title>
</head>
<body>
	<form action="/user/save" method="post">
		Nama
		<input type="text" name="nama">
		Username
		<input type="text" name="u_name">
		<button type="submit">Save</button>
	</form>
</body>
</html>