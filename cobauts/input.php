<h2>Form Tambah / Ubah Data</h2>
<b><hr></b>


<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<a href="index.php"><h2><input class="btn" type="submit" value="Kembali"></h2>
<b></b></a>
 
	<form action="input.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(nim,nama,jurusan) VALUES('$nim','$nama','$jurusan')");
		
		// Show message when user added
		echo "Data Telah Ditambahkan <a href='index.php'>lihat data</a>";
	}
	?>
</body>
</html>