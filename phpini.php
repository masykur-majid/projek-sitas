<?php
		function looping($angka1, $angka2){
			if ($angka1 < $angka2) {
				for ($i=$angka1; $i <= $angka2; $i++) {
					echo $i. "\n";
				}
		} elseif ($angka1 > $angka2) {
			for ($i=$angka1; $i >= $angka2; $i--) { 
				echo $i. "\n";
			}
		}
		}
		echo looping(10,2);
	?>
