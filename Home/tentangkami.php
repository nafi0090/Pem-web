<?php

  session_start();

  require '../admin/funtions.php';

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tentang Kami</title>
        <link rel="stylesheet" type="text/css" href="style/css/styletentangkami.css">
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
					</a>
				</li>
            </ul>
        </nav>
        <div class="tentang-kami">
            <h4>Tentang Kami</h4>
        </div>
        <div>
            <section id="box">
                <div class="isi">
                    <p><h4>PORTAL EVENT</h4> <br>
                     Merupakan platform yang menjadi portal event, dengan platfrom ini anda dapat melihat-lihat berbagai macam event, dan juga anda dapat mendaftar event yang anda tuju. tidak hanya sampai disitu, kami menyediakan juga fitur untuk membuat event</p>
                </div>
            </section>
        </div>
        <div id="footer">
            <p>Copyright @ 2020 Kelompok 5 D4 MI 2019 B</p>
        </div>
    </body>
</html>
