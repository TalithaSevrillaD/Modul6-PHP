<html>
	<head>
		<title>Login</title>
		<style type = "text/css">
		
		.inner{
			margin : 200px auto;
			padding : 20px;
			width : 240px;
			border: 5px solid	#4169E1;
			background :	#87CEEB;
		}
		</style>
	</head>
	<body>
		<?php
			ini_set('display_errors',1);
			define('_VALID', 1);
			//include file eksternal
			require_once('./tugas1.php');
			init_login();
			validate();
		?>
		<h3>Hello, Wellcome!</h3>
		<p><a href="/m=logout">Logout</a>
		<p><b>"If you're tired learn to rest but not to quit"</b>
	</body>
</html>