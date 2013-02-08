<?php
	require_once 'config.inc.php';
?>
<!doctype>
<html>
	<head>
		<title>e.Disks - Home</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URLADDR; ?>/style.css" />
		<script type="text/javascript" src="<?php echo URLADDR; ?>/validaciones.js"></script>
	</head>
	<body>
		<div id="wraper">
			<?php
				require_once ABSPATH.'/login.inc.php';
			?>
			<div id="page">
				<div id="header">
					<?php
						require_once ABSPATH.'/header.inc.php';
					?>
				</div>
				<div id="content">
					<div id="description">
						<div>
							<fieldset>
								<legend>Presentación</legend>
								<p>
								Es una empresa que importa títulos de documentales sobre géneros pocos convencionales y 
					            muy específicos, como ciencia, tecnología, salud, bélicos, historia, naturaleza, biología, etc. 
					            Sus productos son solicitados en CD's, DVD's y Blu-ray.
					            </p>
			            	</fieldset>
			            </div>
		            </div>
				</div>
			</div>
			<div id="footer">
				<?php
					require_once ABSPATH.'/footer.inc.php';
				?>
			</div>
		</div>
	</body>
</html>

