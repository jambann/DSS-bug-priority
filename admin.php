<?php
require './connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Sigit Heri Wibowo">
	<title>Sistem Penunjang Keputusan Prioritas Bug</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
</head>
<body>
<header>
    <!-- <img src="asset/image/bug2.svg" id="logo-header"> -->
    <!-- <img src="asset/image/bugred.png"> -->
    <h1 style="font-size:30px"><img src="asset/image/bugred.png"><b style= "font-family:'Goudy Old Style'">  Sistem Penunjang Keputusan Prioritas Bug - 18111109 </b></h1>
</header>
<nav>
    <?php include "nav.php"; ?>
</nav>
<main>
    <div id="bg-green"></div>
   
    <div id="main-body">
        <?php include "page.php"; ?>
    </div>
</main>
<script src="asset/js/jquery.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>
<script>
    $('#pilihHasil').on('change',function(){
        var nitip = $(this).find(':selected').attr('nitip')

        $('#released').find('h3').text(nitip);
        $('#released').show();
    });
</script>
</body>
</html>