<?php  

	session_start();

	if ( !isset($_SESSION["Login"])) {
		header("location: ../../login/login.php");
		exit;
	}

	require '../funtions.php';

	$event = query("SELECT * FROM event");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../login/login.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="Account.php">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>Account</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">
          <i class="fas fa-fw fa-key"></i>
          <span>Event</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../loguot.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Logout</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Event</h1>
          </div>
          <div class="row">

            <div class="col-lg-6">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">

                  <table border="1" cellpadding="10" cellspacing="9" >

                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Action</th>
                    </tr>

                    <?php $i = 1 ; ?>

          					<?php foreach ($event as $row) : ?>	

          					<tr>
          						<td><?= $i; ?></td>
          						<td><?= $row["Nama"]; ?></td>
          						<td><?= $row["Judul"]; ?></td>
          						<td><?= $row["Deskripsi"]; ?></td>
          						<td>
          							<a href="../hapus-event.php?id=<?= $row["ID"]; ?>" onclick="return confirm('yakin ?');">Hapus</a>
          						</td>
          					</tr>

          					<?php $i++; ?>

          				 	<?php endforeach ; ?>

                </div>
              </div>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
