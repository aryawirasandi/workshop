<!DOCTYPE html>
<html>
<head>
	<title>Modul 4 - Tutorial CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" href="img/php.jpg" />
</head>
<body>
  <div class="header">
    <h1>Insert Data</h1>
  </div>
	<form method="post" action="input_process.php">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address">
		</div>
		<div class="input-group">
				<button type="submit" name="save" class="btn">Save</button>
        <a href="index.php" class="btn">Back</a>
		</div>
	</form>
</body>
</html>
