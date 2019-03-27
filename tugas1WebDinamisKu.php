<?php
$makhluk_hidup = array("manusia"=>array("makanan"=>array("daging"=>array("daging_merah","seafood","unggas"),													 "tumbuhan"=>array("kacang","buah","sayur")),									 		"jenis"=>array("mamalia"=>array("menyusui","melahirkan"))),
						"hewan"=>array("makanan"=>array("daging"=>array("daging_merah","seafood","unggas"),
														"tumbuhan"=>array("kacang","buah","sayur")),
										"jenis"=>array("mamalia"=>array("menyusui","melahirkan"),
														"reptil"=>array("melata","bertelur","berdarah_dingin"))));



	foreach ($makhluk_hidup as $name => $ciri){
		echo '#'. $name.":".'</br>';
		foreach ($ciri as $a => $data1) {
			echo $a.':'.'</br>';
			foreach ($data1 as $b => $data2) {
				echo '  *'. $b.':'.'</br>';
				foreach ($data2 as $c ) {
					echo '-'. $c.':'.'</br>';
					# code...
				}
				# code...
			}
			# code...
		}
	}


		