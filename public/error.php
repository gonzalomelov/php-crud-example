<?php 
	require_once 'config.inc.php';
?>
<!doctype>
<html>
	<head>
		<title>e.Disks - Error</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URLADDR; ?>/style.css" />
	</head>
	<body>
		<div id="page">
			<div id="header">
				<?php
					require_once ABSPATH.'/header.php';
				?>
			</div>
			<div id="content">
				<h1>Error!!</h1>
				<h2><?php echo $_GET['titulo']; ?></h2>
				<?php echo $_GET['mensaje']; ?>
			</div>
			<div id="footer">
				<?php
					require_once ABSPATH.'/footer.php';
				?>
			</div>
		</div>
	</body>
</html>
