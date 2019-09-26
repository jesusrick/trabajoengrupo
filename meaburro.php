		<?php
			$suma = 0;
			for($i=1; $i<=6; $i++) {
				if ($i % 2 == 0) {
					$suma = $suma + $i;
				}
			}
			echo "La suma vale: $suma";
		?>
