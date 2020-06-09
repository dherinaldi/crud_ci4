<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body> 
<a class="btn btn-default" href="/user/add_new" role="button">Add</a>
<?php 
/*echo "http://".$_SERVER['HTTP_HOST'];
echo current_url();*/
?>

	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Uname</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($user as $key) {
				?>
				<tr>
					<td><?php echo $key['nama'];?></td>
					<td><?php echo $key['u_name'];?></td>
					<td>
						<a class="btn btn-default" href="user/edit/<?php echo $key['u_id'];?>" role="button">Ubah</a>
						<a class="btn btn-default" href="user/delete/<?php echo $key['u_id'];?>" role="button">Hapus</a>
					</td>
				</tr>
				<?php
			}?>


		</tbody>
	</table>
</body>
</html>