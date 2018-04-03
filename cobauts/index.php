<h2>Aplikasi Data Mahasiswa</h2>
<b><hr></b>

<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY nim DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
<a href="input.php"> <h2><input class="btn" type="submit" value="Tambah Data"></h2>
<b></b>

 
    <table width='80%' border=1>
 
    <tr>
        <th>NIM</th> <th>NAMA</th> <th>JURUSAN</th> <th>OPSI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";    
        echo "<td><a href='form-edit.php?nim=$user_data[nim]'>Edit</a> | <a href='hapus.php?nim=$user_data[nim]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>