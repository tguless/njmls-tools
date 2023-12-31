<?PHP

function lookupCode($codeWord, $type = "", $fieldName = "") {

	global $mysqli;
	if ($type == "") {
		$sqlString = "select label from trandata where value = '" . $codeWord . "'";
		//echo $sqlString;
	} else if ($fieldName == "") {
		$sqlString = "select label from trandata where value = '" . $codeWord . "' AND PropType='".$type."'" ;
		//echo $sqlString;
	} else {
		$sqlString = "select label from trandata where value = '" . $codeWord . "' AND PropType='".$type."' AND fieldname='" . $fieldname ."'" ;
	}

	if ($mysqli->multi_query($sqlString)) {
		do{
			if ($result = $mysqli->store_result()) {
				while ($row = $result->fetch_row()) {
					return $row[0];
				}
			}

		} while ($mysqli->next_result());
	}
}

function parseDbValue($codes, $type = "", $fieldName = "") {
		$descArr = array();
		$codeArr =  split(",", $codes);
		foreach($codeArr as $value) {
		   $descArr[] = lookupCode($value, $type);
		}
		return $descArr;
}


function parseDbValue1($codes, $type = "", $fieldName = "") {
		$descArr = array();
		$codeArr =  split(",", $codes);
		foreach($codeArr as $value) {
		   $descArr[] = lookupCode($value, $type);
		}
		return $descArr[0];
}


?>