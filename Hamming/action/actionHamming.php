<?php

$dna_1 = $_POST["dna_1"];
$dna_2 = $_POST["dna_2"];
$diffLen = 0;
$leng = 0;
$countDiff = 0;

if (strlen($dna_1) >= strlen($dna_2)) {
	$leng = strlen($dna_2);
	$diffLen = strlen($dna_1) - strlen($dna_2);
} else {
	$leng = strlen($dna_1);
	$diffLen = strlen($dna_2) - strlen($dna_1);
}

for ($i=0; $i < $leng; $i++) {
	if ($dna_1[$i] != $dna_2[$i]) {
		$countDiff += 1;
	}
}

$countDiff += $diffLen;