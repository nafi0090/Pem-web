<?php 

	session_start();

	if ( !isset($_SESSION["Login"])) {
		header("location: ../login/login.php");
		exit;
	}

	require 'funtions.php';

	$id = $_GET["id"];

	if ( hapus($id) > 0 ){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'unesa/event.php';
			</script>";
	}else {
		echo "<script>
				alert('data gagal dihapus');
				document.location.href = 'unesa/event.php';
			</script>";
	}

?>