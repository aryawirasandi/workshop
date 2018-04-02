<?php
include('conn.php'); 

	// menampilkan data untuk melakukan update
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$query = mysqli_query($db, "SELECT * FROM pegawai WHERE id='$id'");
		$results = mysqli_fetch_array($query);
		$name = $results['nama'];
		$address = $results['alamat'];
		$id = $results['id'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modul 4 - Tutorial CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="img/php.jpg" />
</head>
<body>
	<div class="header">
		<h1>Edit Data</h1>
	</div>
	<form method="post" action="edit_process.php"> 
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address;?>">
		</div>
		<div class="input-group">
				<button type="submit" name="update" class="btn">Update</button>
				<a href="index.php" class="btn">Back</a>
		</div>
	</form>
</body>
</html>
