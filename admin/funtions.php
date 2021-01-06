<?php  
	$link = mysqli_connect("localhost", "root", "", "testing");

	function query($query){
		global $link;
		$result = mysqli_query ($link, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){

		global $link;
		$Nama = htmlspecialchars($data ["Nama"]);
		$Email = htmlspecialchars($data ["E-mail"]);
		$Pass = htmlspecialchars($data ["Pass"]);
	
		$query = "INSERT INTO akun VALUES (
			'','$Nama','$Email','$Pass')
			";

		mysqli_query($link, $query);

		return mysqli_affected_rows($link);
	}

	function hapus($id){
		global $link;

		mysqli_query($link , "DELETE FROM akun WHERE id=$id");
		mysqli_query($link , "DELETE FROM event WHERE id=$id");

		return mysqli_affected_rows($link);
	}

	function registrasi($data){

		global $link;

		$username = strtolower ( stripslashes ( $data["username"] ) );
		$Email = $data["Email"];
		$password = mysqli_real_escape_string($link, $data["password"]);
		$password2 = mysqli_real_escape_string($link, $data["password2"]);

		$check = mysqli_query ($link, "SELECT username FROM akun WHERE username = '$username'");

		if (mysqli_fetch_assoc($check)) {
			echo "<script>
					alert('Username sudah ada');
				</script>";

			return false;
		}

		if ( $password !== $password2) {
			echo "<script>
					alert('Password tidak sesuai');
				  </script>";
			return false;
		}
		
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($link, "INSERT INTO akun VALUES('','$username', '$Email', '$password')");

		return mysqli_affected_rows($link);

	}
?>