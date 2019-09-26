<html>
	<head>
		<title>For</title>
	</head>
	<body>	
		<?php
			$suma = 0;
			for($i=1; $i<=100; $i++) {
				if ($i % 2 == 0) {
					$suma = $suma + $i;
				}
			}
			echo "La suma vale: $suma";
		?>
	</body>
</html>