<?PHP




	function buildSelect($valArr, $descArr, $selected, $selectAttrib) {
			echo "<select " . $selectAttrib. ">";

			for ($arrIncr = 0; $arrIncr < sizeof($valArr) ; $arrIncr = $arrIncr +1) {
				echo "<option value = " . $valArr[$arrIncr];
				if ($selected == $valArr[$arrIncr]) {
					echo " selected ";
				}

				echo ">" . $descArr[$arrIncr] . "</option>";
			}

			echo "</select>";
	}

	function buildSimpleSelect($minVal, $maxVal, $incrVal, $selected, $selectAttrib  ) {

			for($resultSizeIncr = $minVal; $resultSizeIncr <= $maxVal; $resultSizeIncr = $resultSizeIncr + $incrVal) {
						$valArr[] = $resultSizeIncr;
						$descArr[] = $resultSizeIncr;
			}

			buildSelect ($valArr, $descArr, $selected, $selectAttrib);
			unset($valArr);
			unset($descArr);

	}

?>