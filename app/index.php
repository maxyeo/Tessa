<?php
// CONNECT TO THE DATABASE
// CONFIG.PHP IS HIDDEN FROM GIT REPO FOR SECURITY
require 'config.php';
try {
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
}
catch(PDOException $e) {
    header('location: sorry.html');
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title></title>
    <meta name="description" content="">
    <meta name="author" content="Alwin Hui and Max Yeo">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <meta name="theme-color" content="">

    <meta property="og:title" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>

    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="wrapper">
	    
	</div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
</body>
</html>