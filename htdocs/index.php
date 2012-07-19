<?php
	require_once '../lib/World.php';
	require_once '../lib/Util.php';
	
	require_once '../vendor/submodule-test-01/Submodule01.php';
	require_once '../vendor/submodule-test-02/Submodule02.php';
	
	$world = new World();
	
	$s1 = new Submodule01();
	$s2 = new Submodule02();
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
		<hr />
		<h1>Submodule Info:</h1>
		<ol>
			<li>01 Version: <?php print $s1->getVersion(); ?></li>
			<li>02 Version: <?php print $s2->getVersion(); ?></li>
		</ol>
	</body>
</html>