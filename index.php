<?php
include('conn.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modul 4 - Tutorial CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="img/php.jpg" />
</head>
<body>
	<div class="header">
		<h1>Select Data</h1>
	</div>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// == fungsi menampilkan data ==
			$results = mysqli_query($db, "SELECT * FROM pegawai");
				while ($row = mysqli_fetch_array($results)) {
			?>
			<tr>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['alamat'];?></td>-->
				<td>
					<a class="edit_btn" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
				</td>
			</tr>
			<?php } ?>

		</tbody>
	</table>

	<form>
		<div class="input-group">
				<a href="input.php" class="btn">Insert Data</a>
				<a href="logout.php" class="btn">Logout</a>
		</div>
	</form>
</body>
</html>
