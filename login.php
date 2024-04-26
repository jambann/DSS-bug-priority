
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="asset/css/login.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
</head>
<body id="login">
<img src="asset/image/bugred.png" id="logo-login">
<!-- <div class="alert alert-red text-center" style="display:none;" id="alert"><i class="fa fa-info-circle fa-lg"></i><p id="value">sdasdasd</p></div> -->
<div id="panel-login">
    <form id="formlogin" method="POST" action="ceklogin.php">
    <p style="text-align:center;font-size:40px;"><b style="font-family:'Goudy Old Style'">Login Page</b></p><br>
    <div class="alert alert-red text-center" style="display:none;" id="alert"><i class="fa fa-info-circle fa-lg"></i><p id="value">sdasdasd</p></div>
        <div class="group-input">
            <label for="username">Username :</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Username" id="username" name="username" >
        </div>
        <div class="group-input">
            <label for="password">Password :</label>
            <input type="password" class="form-custom" required autocomplete="off" placeholder="Password" id="password" name="password" >
        </div>
        <button class="btn btn-green btn-full"><i class="fa fa-arrow-alt-circle-right text-white"></i> Login</button>
        <p>&copy 18111109</p>
    </form>
</div>
<!-- <p>&copy 18111109</p> -->
<img src="asset/image/bug1.svg" width="100%" height="100%" id="hiasan"><br>
</body>
<script src="asset/js/jquery.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>
</html>