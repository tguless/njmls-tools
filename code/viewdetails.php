<?PHP
include("db.php");
include("header.php");
include("leftnav.php");
include("createImage.php");
include("bldSearchStr.php");


include("lookupcode.php");
?>


<style type="text/css">
<!--
.detailHeadings {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
.listedByEtc {
	color: #FF3333;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style6 {
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
}
.style9 {font-size: 11px; color: #FFFFFF; font-family: Arial, Helvetica, sans-serif;}
-->
</style>

<div id="content">

<?PHP
$mlsNum = $HTTP_GET_VARS['mlsnum'];

$sqlString =  "select RemarksPublic, prpCity, ListPrice, Beds, BathsTotal, mlsNum,  SqFtApprox, OfficeName, Interior, exterior, ";
$sqlString .= "heatSystem, GarageDesc, heatsrc, builtinfo, basedesc, easement, style, proptype, prpCounty, TaxAmount, LotSize, YearBuilt,  ";
$sqlString .= "GarageCap, Acres,  AssessAmountBldg,  AssessAmountLand, AssessTotal, Basement, AssocFee, BathsFullTotal, BathsHalfTotal,  ";
$sqlString .= "FloodInsur, Rooms, TaxRate, TaxRateYear, TaxYear,  ";
$sqlString .= "null, Bed1Dim, Bed1Level, Bed2Dim, Bed2Level, Bed3Dim, Bed3Level, Bed4Dim, Bed4Level,  ";
$sqlString .= "RoomDenDim, RoomDenLevel, RoomDiningDim, RoomDiningLevel, RoomFamilyDim,  ";
$sqlString .= "RoomFamilyLevel, RoomKitchenDim, RoomKitchenLevel, RoomLivingDim, RoomLivingLevel,  ";
$sqlString .= "RoomOther1, RoomOther1Dim, RoomOther1Level, RoomOther2, RoomOther2Dim, RoomOther2Level, ";
$sqlString .= "RoomOther3, RoomOther3Dim, RoomOther3Level, RoomOther4, RoomOther4Dim, RoomOther4Level, ";
$sqlString .= "SchoolHigh, SchoolElem, SchoolJunior, UnitNum, PhotoCount ";
$sqlString .= "from Homes where mlsNum='". $mlsNum . "'";
//echo $sqlString;

	if ($mysqli->multi_query($sqlString)) {


			//echo "MLS Number: ". $mlsNum;

			do {

					/* store first result set */
					if ($result = $mysqli->store_result()) {

						echo  "<center>";
						echo  "<a href='". $backToSearchLnk."'>Back to Search Criteria</a>&nbsp;&nbsp;&nbsp;&nbsp;";
						echo  "<a href='". $backToResultsLnk."'>Back to Search Results</a><br>";
						echo  "</center><Br>";

						echo "<table bgcolor='#FF0000' width=100%><tr><td class='detailHeadings'>Showcase</td></tr></table>";
						echo "<table cellpadding=0 cellspacing=0 border=1 width=560 > <tr valign=top bgcolor='#1c61af' class=searchresHead><td width =100>Detail</td><td width=65>Price</td><td width=150>Location</td><td width=35>Beds</td><td width=35>Bath</td><td width=63>Sq. Ft.</td><td width=80>Contact</td></tr></table>";

						$resultSize = $result->num_rows;

					  	while ($row = $result->fetch_row()) {

														$itemDesc = $row[0];
							$itemLocation = $row[1];
							$itemPrice = "$".number_format($row[2], 0, '.', ',');
							$itemBeds = $row[3];
							$itemBaths = $row[4];
							$itemMLSNum = $row[5];
							$itemSqFt = $row[6];
							$officeName = $row[7];
							$interior = $row[8];
							$exterior = $row[9];
							$heatSystem = $row[10];
							$garage = $row[11];
							$heatSrc = $row[12];
							$builtinfo = $row[13];
							$baseftrs = $row[14];
							$easement = $row[15];
							$style = $row[16];
							$proptype = $row[17];
							$prpCounty = $row[18];
							$taxAmount = "$".number_format($row[19], 0, '.', ',');
							$lotSize = $row[20];
							$yearBuilt = $row[21];
							$garageCap = $row[22];
							$acres = $row[23];
							$assessBldg = "$".number_format($row[24], 0, '.', ',');
							$assessLand = "$".number_format($row[25], 0, '.', ',');
							$assessTotal = "$".number_format($row[26], 0, '.', ',');
							if ($row[27] == "Y") {
								$basement = "Has basement";
							} else {
								$basement = "No basement";
							}
							$assocFee = "$".number_format($row[28], 0, '.', ',');
							$bathsFull = $row[29];
							$bathsHalf = $row[30];
							$floodInsur = $row[31];
							$rooms = $row[32];
							$taxRate = $row[33];
							$taxRateYear = $row[34];
							$taxYear = $row[35];

							$Bed1Dim = $row[37];
							$Bed1Level = parseDbValue1($row[38]);

							$Bed2Dim = $row[39];
							$Bed2Level = parseDbValue1($row[40]);

							$Bed3Dim = $row[41];
							$Bed3Level = parseDbValue1($row[42]);

							$Bed4Dim = $row[43];
							$Bed4Level = parseDbValue1($row[44]);

							$RoomDenDim = $row[45];
							$RoomDenLevel = parseDbValue1($row[46]);


							$RoomDiningDim = $row[47];
							$RoomDiningLevel = parseDbValue1($row[48]);


							$RoomFamilyDim = $row[49];
							$RoomFamilyLevel = parseDbValue1($row[50]);
							//B= Basement, G=Ground
							//$RoomFamilyLevel =$row[50];

							$RoomKitchenDim = $row[51];
							$RoomKitchenLevel = parseDbValue1($row[52]);

							$RoomLivingDim = $row[53];
							$RoomLivingLevel = parseDbValue1($row[54]);

							$RoomOther1 = parseDbValue1($row[55]);
							$RoomOther1Dim = $row[56];
							$RoomOther1Level = parseDbValue1($row[57]);

							$RoomOther2 = parseDbValue1($row[58]);
							$RoomOther2Dim = $row[59];
							$RoomOther2Level = parseDbValue1($row[60]);

							$RoomOther3 = parseDbValue1($row[61]);
							$RoomOther3Dim = $row[62];
							$RoomOther3Level = parseDbValue1($row[63]);

							$RoomOther4 = parseDbValue1($row[64]);
							$RoomOther4Dim = $row[65];
							$RoomOther4Level = parseDbValue1($row[66]);

							/*
							$HighSchool = parseDbValue1($row[67]);
							$ElemSchool = parseDbValue1($row[68]);
							*/

							$HighSchool = $row[67];
							$ElemSchool = $row[68];
							$JuniorSchool = $row[69];

							$UnitNum = $row[70];

							$PhotoCount = $row[71];

							echo "<script> var PhotoCount='".$PhotoCount."'; var MLSNum='".$itemMLSNum."'; var CurrentPhoto=1; </script>";

							$itemContact = "Rich Cicere";
							$interiorDesc = parseDbValue($interior);
							$exteriorDesc = parseDbValue($exterior);
							$heatsysDesc = parseDbValue($heatSystem);
							$garageDesc = parseDbValue($garage);
							$heatSrcDesc = parseDbValue($heatSrc);
							$builtInfDesc = parseDbValue($builtinfo);
							$baseFtrsDesc = parseDbValue($baseftrs);
							$easementDesc = parseDbValue($easement);
							$styleDesc = parseDbValue($style, $proptype, "Style");
							$prpCountyDesc = parseDbValue($prpCounty);



							echo "<table border=0 width=100% cellpadding=0 cellspacing=0><tr><td width=100><img src=images/spacer.gif width=80 height=1></td><td width=65>".$itemPrice."</td><td width=150>".$itemLocation."&nbsp;</td>"."<td width=35>".$itemBeds."&nbsp;</td>"."<td width=35>".$itemBaths."&nbsp;</td>"."<td width=63>".$itemSqFt."&nbsp;</td><td width=80>". $itemContact ." </td></tr></table>";

							if(file_exists("../media/MLSDetailImages/".$row[5]."_1.jpg")){

								$imageLink = "<A HREF=\"javascript:popUp('showpics.php?mlsnum=".$row[5]."')\"><img id=mainPicture  border=0 width=300 src='../media/MLSDetailImages/".$row[5]."_1.jpg'></a>" ;

							} else if(file_exists("../media/MLSImages/".$row[5]."_1.jpg")){

								CreateImage(300,"c:\\wamp\\www\\bsafeed\\media\\MLSImages\\".$row[5]."_1.jpg","c:\\wamp\\www\\bsafeed\\media\\MLSDetailImages\\".$row[5]."_1.jpg");
								$imageLink = "<A HREF=\"javascript:popUp('showpics.php?mlsnum=".$row[5]."')\"><img id=mainPicture border=0 width=300 src='../media/MLSDetailImages/".$row[5]."_1.jpg'></a><br>" ;

							} else {
									$imageLink = "&nbsp;";
							}
							$imageLink .= "<table bgcolor=\"1b60ae\" cellpadding=0 cellspacing=0 width=100%><tr><td>";
							if ($PhotoCount > 1 ) {
								$imageLink .= "<table width=100% cellpadding=0 cellspacing=0 class=searchresHead><tr>";
								$imageLink .= "<td class=searchresHead><div id=prevImgLnk style=\"visibility:hidden\"><a href=\"javascript:prevImage()\"><table cellpadding=0 cellspacing=0><tr><td><img src='images/prev.gif' border=0 align=left></td><td class=searchresHead>previous picture </div></td></tr></table></a></td><td width=37% class=searchresHead> <center> <span id=photoCountDisp>1</span> of ". $PhotoCount ." Photos</center></td><td class=searchresHead><span id=nextImgLnk class=searchresHead><a href=\"javascript:nextImage()\"><table cellspacing=0 cellpadding=0><tr><td class=searchresHead>next picture</td><td><img src='images/next.gif' border=0 align=right></td></tr></table></a></div></td></tr>";
								$imageLink .= "</table>";

							}
							$imageLink .= "</td></tr></table>";

							echo "<table><tr valign=top><td>".$imageLink."</td><td><b>MLS #".$itemMLSNum."</b><br>".$itemDesc;
							echo "<span class='listedByEtc'><br><br>Listed by ".$officeName;
							echo "<br>Contact Rich Cicere 973.746.7613</span>";
							echo "</td></tr></table>";

							//Features
							echo "<table bgcolor='#FF0000' width=100%><tr><td class='detailHeadings'>Property Features</td></tr></table>";

							include("features.php");


						}
						$result->close();
					}

					/* print divider */
					if ($mysqli->more_results()) {
					   //printf("-----------------\n");
					}
				} while ($mysqli->next_result());

	}

?>
<script>
<!--
	function nextImage() {

	document.getElementById("prevImgLnk").style.visibility="visible";

		//document.getElementById('mainPicture').src = '../media/MLSDetailImages/' + MLSNum + '_' + ++CurrentPhoto + '.jpg';
		document.getElementById('mainPicture').src = '../media/MLSImages/' + MLSNum + '_' + ++CurrentPhoto + '.jpg';


		if (PhotoCount == CurrentPhoto) {
					//CurrentPhoto = 0;
					document.getElementById("nextImgLnk").style.visibility="hidden";
		}
		document.getElementById('photoCountDisp').innerHTML = CurrentPhoto;

	}

	function prevImage() {

			document.getElementById("nextImgLnk").style.visibility="visible";

				//document.getElementById('mainPicture').src = '../media/MLSDetailImages/' + MLSNum + '_' + ++CurrentPhoto + '.jpg';
				document.getElementById('mainPicture').src = '../media/MLSImages/' + MLSNum + '_' + --CurrentPhoto + '.jpg';

			if (1 == CurrentPhoto) {
				document.getElementById("prevImgLnk").style.visibility="hidden";
				//CurrentPhoto = PhotoCount;
			}
			document.getElementById('photoCountDisp').innerHTML = CurrentPhoto;

	}

//-->
</script>

<?PHP
include("footer.php");
?>