<?PHP
	include_once "selectList.php";
	$valArr[] = "''";
	$descArr[] = "No Minimum";
	for($dollarIncr = 50000; $dollarIncr <= 1000000; $dollarIncr = $dollarIncr + 50000) {
		$valArr[] = $dollarIncr;
		$descArr[] = "$".number_format($dollarIncr, 0, '.', ',');
	}

	buildSelect ($valArr, $descArr, $minPrice, " name=minPrice ");

	unset($valArr);
	unset($descArr);
?>