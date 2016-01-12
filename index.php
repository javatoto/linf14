<?php
if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = 1;
}

session_start();
if (empty($_SESSION["name"])) {
	$connecte = false;
} else {
	if (!empty($_SESSION["expire"]) && time() > $_SESSION["expire"]) {
		session_destroy();
		$connecte = false;
	} else {
		$Nom_User = $_SESSION["name"];
		$connecte = true;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Musik</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
<?php 
	if ($connecte) {
		include_once("home.php");
	} else {
		include_once("login_form.html");
	}
?>
        </div> <!-- /container -->
    </body>
</html>
