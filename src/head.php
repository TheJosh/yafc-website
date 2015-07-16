<?php
if (! $browser_title) {
	$browser_title = $page_title . ' | Yafc';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo htmlspecialchars($browser_title); ?></title>
	<link rel="stylesheet" href="style.css">
	<meta name="description" content="Console FTP client with tab completion, kerberos, and more">
</head>
<body>

<div id="head">
	<h1>Yafc</h1>
	<p>Yet Another FTP Client</p>
</div>
<div id="nav">
	<a href="/">Home</a>
	<a href="/news">News</a>
	<a href="/download">Download</a>
	<a href="/contribute">Contribute</a>
	<a href="/credits">Credits</a>
	<a href="/help">Help manual</a>
	<div class="clear"></div>
</div>
<div id="body">


<h1><?php echo htmlspecialchars($page_title); ?></h1>
