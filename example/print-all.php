<?php

	include('../src/cliColor.php'); 
	$colors = new cliColor();

	$fgs = $colors->getfgColors() {();
	$bgs = $colors->getBgColors() {();

	$count = count($fgs);
	for ($i = 0; $i < $count; $i++) {
		echo $colors->setColor("Test Foreground colors", $fgs[$i]) . "\t";
		if (isset($bgs[$i])) echo $colors->setColor("Test Background colors", null, $bgs[$i]);
		echo "\n";
	}
	echo "\n";

	foreach ($fgs as $fg) {
		foreach ($bgs as $bg) echo $colors->setColor("Test Colors", $fg, $bg) . "\t";
		echo "\n";
	}
