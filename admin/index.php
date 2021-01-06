<?php  

	session_start();


	require 'funtions.php';

	$akun2 = query("SELECT * FROM Akun ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>

<body>
	
<h1>Daftar Akun</h1>

<?php 
	
	$login = $_SESSION['Login']; 
	$user2 = mysqli_query($link, "SELECT * FROM akun WHERE id = '$login'");
	$user = mysqli_fetch_array($user2);

?>
<a><?php echo $login; ?></a>

<?php  

    $url = "loguot.php";     
   	$login = "../login/login.php";

	if ( !isset($_SESSION["Login"])) {

	echo "<a href=$login>login</a>";
	}
	else{
	echo "<a href=$url>logout</a>";
	}
?>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 1 ; ?>

	<?php foreach ($akun2 as $row) : ?>	

	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["Email"]; ?></td>
		<td>
			<a href="hapus.php?id=<?= $row["ID"]; ?>" onclick="return confirm('yakin ?');">Hapus</a> | 
			<a href="">Edit</a>
		</td>
	</tr>
	<?php $i++; ?>
 	<?php endforeach ; ?>
</table>

<table border="1" cellpadding="10" cellspacing="9" >

	<tr>
		<th>No</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Deskripsi</th>
	</tr>
    
    <tr>
        <td><img src="gambar/event.png" height="150"></td>
        <td> Nama </td>
    </tr>

    <tr>
        <td> judul </td>
    </tr>

    <tr>
        <td> bebas apa lagi </td>
    </tr>

    <tr>
        <td> gak tau apa lagi </td>
    </tr>

</table>
	

</body>

</html>
