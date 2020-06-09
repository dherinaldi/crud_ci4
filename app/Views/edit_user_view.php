<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit New User</title>
</head>
<body>
	<form action="/user/update/" method="post">
		<input type="text" name="u_id" value="<?php echo $user['u_id']?>">
		Nama
		<input type="text" name="nama" value="<?php echo $user['nama']?>">
		Username
		<input type="text" name="u_name" value="<?php echo $user['u_name']?>">
		<button type="submit">Save</button>
	</form>
</body>
</html>