﻿<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require_once("mysql.php"); 
?>
    <meta name="description" content="">
	<meta property="og:title" content="<?php echo $TIEUDE;?>" />
	<meta property="og:image" content="img/opengraph.jpg" />
	<link rel="icon" type="image/png" href="img/64.png">
	$member = $member1->fetch_assoc();
	
	