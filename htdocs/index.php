<?php
	require_once '../lib/World.php';
	
	$world = new World();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>This is a Test</title>
		<script data-main="scripts/main" src="scripts/require.js"></script>
	</head>
	<body>
		<h1><?php print $world->getMessage(); ?></h1>
		<h2 id="clickMe">Click here for a message from a Require JS module.</h2>
	</body>
</html>