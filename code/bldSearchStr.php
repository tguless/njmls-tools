<?PHP

$minPrice = $HTTP_GET_VARS['minPrice'];
$maxPrice = $HTTP_GET_VARS['maxPrice'];
$start = $HTTP_GET_VARS['pageStart'];

if ($start == "") {
	$start = 0;
}


$pageSize = $HTTP_GET_VARS['pageSize'];
$searchCitiesRaw= $HTTP_GET_VARS['partnerConversionTypesValues'];
if ($searchCitiesRaw == "") {
	$searchCitiesRaw = $HTTP_GET_VARS['selectedValues'];
}
$mlsSearch = $HTTP_GET_VARS['MLSNum'];

$searchString = "minPrice=".$minPrice."&maxPrice=".$maxPrice."&pageStart=".$start;
$searchString .= "&pageSize=".$pageSize."&selectedValues=".$searchCitiesRaw;

$backToSearchLnk = "townselector.php?".$searchString;
$backToResultsLnk = "searchResults.php?".$searchString;

?>