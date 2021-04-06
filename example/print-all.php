<?php

		$colors = new Colors();
		$fgs = $colors->getForegroundColors();
		$bgs = $colors->getBackgroundColors();

		$count = count($fgs);
		for ($i = 0; $i < $count; $i++) {
			echo $colors->getColoredString("Test Foreground colors", $fgs[$i]) . "\t";
			if (isset($bgs[$i])) {
				echo $colors->getColoredString("Test Background colors", null, $bgs[$i]);
			}
			echo "\n";
		}
		echo "\n";

		// Loop through all foreground and background colors
		foreach ($fgs as $fg) {
			foreach ($bgs as $bg) {
				echo $colors->getColoredString("Test Colors", $fg, $bg) . "\t";
			}
			echo "\n";
		}
