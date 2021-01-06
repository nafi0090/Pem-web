<?php  

	session_start();

	require '../admin/funtions.php';

    $event = query("SELECT * FROM event ORDER BY date DESC");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event Box</title>
        <link rel="stylesheet" type="text/css" href="style/css/styleberanda.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="tentangkami.php">TENTANG KAMI</a></li>
                <li class="login"><a>

                	<?php  

					    $url = "../admin/loguot.php";     
					   	$login = "../login/login.php";

						if ( !isset($_SESSION["Login"])) {

						echo "<a href=$login>LOGIN</a>";
						}
						else{
						echo "<a href=$url>LOGOUT</a>";
						}
					?>
				
				</a></li>
            </ul>
        </nav>
        <img class="home_event" src="style/img/home_event.jpeg" alt="home_event">
        <img class="overlay" src="style/img/wave-overlay.svg" alt="wave-overlay">
        <div class="upcoming">
            <h1>Upcoming Event</h1>
        </div> 

        <table class="box-event" cellspacing="20" border="0" style="margin-left:auto;margin-right:auto" >

        <?php foreach ($event as $row) : ?>

            <tr>
                <td rowspan="4" width="150"><font size="5"><?= $row["date"]; ?></font></td>
                <td rowspan="4"><img src="gambar/<?= $row["image"]; ?>" height="250"></td>
                <td><font size="5"><?= $row["Nama"]; ?></font></td>
            </tr>
            <tr>
                <td><font size="4"><?= $row["Judul"]; ?></td>
            </tr>
            <tr>
               <td width="400"><font size="3"><?= $row["Deskripsi"]; ?></font></td>
            </tr>
            <tr>
                <td width="400"><font size="3"><?= $row["jam_tmpt"]; ?></font></td>
            </tr>
        
        <?php endforeach ; ?>

        </table>

        

        <div id="footer">
            <p>Copyright @ 2020 Kelompok 5 D4 MI 2019 B</p>
            <?php  
                if ( isset($_SESSION["Login"])) {
                    echo "Contact us : 0856546542";
                }
            ?>
        </div>
    </body>
</html>