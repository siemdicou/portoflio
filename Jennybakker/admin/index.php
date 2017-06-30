<?php ?>
<!DOCTYPE html>
<html>
<head>

    <script src="sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style type="text/css">

</style>
	<title>test</title>
</head>
<body>



<?php
// require 'config/config.php';

// $bla = isset($_SESSION['login_user']);

 if (isset($_SESSION['login_user'])) {
 		$_SESSION['status'] = "first";
		include 'admin.php';
	}
else{
	?>
    
<script type="text/javascript">
swal({
    title: "Log in to Continue",
    html: true,
    allowEscapeKey:false,
    showConfirmButton: false,
    text: "<form action='model/adminlogin.php' method='POST'>Username: <input type='text' name='username'><br><br>Password: <input type='password' name='password'><Br><Br><input type='submit' name='' class='btn btn-info' value='inloggen'></form> "
});
<?php } ?>
</script>
</body>
</html>



