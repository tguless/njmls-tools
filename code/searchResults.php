<?PHP
include "bldSearchStr.php";

//$searchString .= "&MLSNum=". $mlsSearch;



if ($mlsSearch != "") {
	Header("Location: /bsafeed/code/viewdetails.php?mlsnum=".$mlsSearch);
}

include("db.php");
include("header.php");
include("leftnav.php");
include("createImage.php");
?>

<style type="text/css">
<!--
.listedByEtc {
	color: #FF3333;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>

  <div id="content">
  	  <!--
	  <img src="images/bsa_phone_number.png" name="phone" class="phone">
	  <img src="images/title_quick_search.png" name="payne" class="quote" height="100" width="200">
	  -->
			<?php

			if (!isset($start) )  {
				$start = 0;
			}


			if (!isset($pageSize) || $pageSize=="" )  {
				$pageSize = 5;
			}


			//$end = $start + $pageSize;
			$searchCities = $searchCitiesRaw;
 			$searchCities = str_replace("_", "','", $searchCities);
 			$searchCities = "'".$searchCities."'";


 			if (isset($minPrice) && $minPrice != "") {
	 			$priceCriteria = " and ListPrice >= ".$minPrice." ";
	 		}

	 		if (isset($maxPrice) && $maxPrice != "") {
				$priceCriteria = $priceCriteria." and ListPrice <= ".$maxPrice." ";
			}

			$sqlString =  "select count(mlsNum) from Homes where prpcity in (". $searchCities .") ".$priceCriteria;

			//echo $sqlString;

			if ($mysqli->multi_query($sqlString)) {
				   do {
						   /* store first result set */
						   if ($result = $mysqli->store_result()) {
						   		while ($row = $result->fetch_row()) {
						   			$numRows = $row[0];
						   		}
						   }

				   } while ($mysqli->next_result());
			 }


			//echo "Number of records: " . $numRows;

			$numPages = ceil($numRows / $pageSize);

			//echo "<br>Number of pages: " . $numPages;

			$currentPage =  $start / $pageSize;

			$sqlString =  "select RemarksPublic, prpCity, ListPrice, Beds, BathsTotal, mlsNum,  SqFtApprox, OfficeName  from Homes where prpcity in (". $searchCities .") ".$priceCriteria." order by ListPrice asc limit ".$start.",".$pageSize;

			//echo $sqlString;

				if ($mysqli->multi_query($sqlString)) {
				   do {
						   /* store first result set */
						   if ($result = $mysqli->store_result()) {
						   	   $resultSize = $result->num_rows;

								$nextPageStart = $start + $pageSize;
								$prevPageStart = $start - $pageSize;

								echo "<center>";
								//$backToSearch =  "<a href='townselector.php?pageSize=".$pageSize."&minPrice=".$minPrice ."&maxPrice=". $maxPrice."&selectedValues=".$searchCitiesRaw."'>Back to Search Criteria</a><br>";

								echo  "<a href='". $backToSearchLnk."'>Back to Search Criteria</a><br>";
								//echo $backToSearch;




								//echo $resultSize;
								if ($prevPageStart >=0 ) {
									$paginationText .= "<a href='searchResults.php?pageSize=".$pageSize."&minPrice=".$minPrice ."&maxPrice=". $maxPrice."&partnerConversionTypesValues=".$searchCitiesRaw."&pageStart=".$prevPageStart."'><<< Previous Page</a><Br> ";
								} else {
									//echo "Previous Page";
								}


								//PageNumbers
								if ($numPages > 1 ) {
									for ($pageIncr=0; $pageIncr < $numPages; $pageIncr = $pageIncr + 1) {


										    $pageDisplayNum = $pageIncr +1;
											if ($pageIncr != $currentPage) {
												$paginationText .=  "<a href='searchResults.php?pageSize=".$pageSize."&minPrice=".$minPrice ."&maxPrice=". $maxPrice."&partnerConversionTypesValues=".$searchCitiesRaw."&pageStart=".$pageIncr*$pageSize."'>" . $pageDisplayNum . "</a> ";
											} else {
												$paginationText .=  "<b>".$pageDisplayNum ."</b> ";
											}
									}
	       						 }



								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								if($resultSize == $pageSize) {
									$paginationText .=  "<br><a href='searchResults.php?pageSize=".$pageSize."&minPrice=".$minPrice ."&maxPrice=". $maxPrice."&partnerConversionTypesValues=".$searchCitiesRaw."&pageStart=".$nextPageStart."'>Next Page >>></a>";
								}

							   echo $paginationText;
							   echo "</center><br>";

							   echo "<table cellspacing=0 border=1 width=560 > <tr valign=top bgcolor='#1c61af' class=searchresHead><td width =100>Image</td><td width=65>Price</td><td width=150>Location</td><td width=35>Beds</td><td width=35>Bath</td><td width=63>Sq. Ft.</td><td width=80>Contact</td></tr></table>";

							   echo "<table cellspacing=0 border=0>";





							   while ($row = $result->fetch_row()) {
							   		$itemPrice = "$".number_format($row[2], 0, '.', ',');
							   		$itemLocation = $row[1];
							   		$itemBeds = $row[3];
							   		$itemBaths = $row[4];
							   		$itemSqFt = $row[6];
							   		$itemMLSNum = $row[5];
							   		$itemDesc = $row[0];
							   		$officeName = $row[7];
							   		$itemContact = "Rich Cicere";


							   		if(file_exists("../media/MLSThumbnails/".$row[5]."_1.jpg")){

							   			$imageLink = "<A HREF=\"javascript:popUp('showpics.php?mlsnum=".$row[5]."')\"><img  border=0 width=100 src='../media/MLSThumbnails/".$row[5]."_1.jpg'></a>" ;

							   		} else if(file_exists("../media/MLSImages/".$row[5]."_1.jpg")){

										CreateImage(100,"c:\\wamp\\www\\bsafeed\\media\\MLSImages\\".$row[5]."_1.jpg","c:\\wamp\\www\\bsafeed\\media\\MLSThumbnails\\".$row[5]."_1.jpg");
						   				$imageLink = "<A HREF=\"javascript:popUp('showpics.php?mlsnum=".$row[5]."')\"><img border=0 width=100 src='../media/MLSThumbnails/".$row[5]."_1.jpg'></a>" ;
							   		} else {
							   				$imageLink = "&nbsp;";
							   		}

										echo "<tr valign=top><td>".$imageLink."</td><td><table border=0 width=100% cellpadding=0 cellspacing=0><tr><td width=65>".$itemPrice."</td><td width=150>".$itemLocation."&nbsp;</td>"."<td width=35>".$itemBeds."&nbsp;</td>"."<td width=35>".$itemBaths."&nbsp;</td>"."<td width=63>".$itemSqFt."&nbsp;</td><td width=80>". $itemContact ." </td></tr></table><br><b>MLS #".$itemMLSNum."</b><br>".$itemDesc;
										echo "<table cellpadding=0 cellspacing=0><tr><td width=300 class=listedByEtc>Listed by ".$officeName."</td><td><img src='./images/binoculars.gif' align=left></td><td> <a href='viewdetails.php?".$searchString."&mlsnum=".$itemMLSNum."'>View Details...</a></td></tr></table>"."</td></tr>";
										echo "<tr><td colspan=2> <img src='images/divider.gif'' </td></tr>";

							   }
							   $result->close();

							   echo "</table>";

							   echo "<center>".$backToSearch.$paginationText."</center>";

						   }
						   /* print divider */
						   if ($mysqli->more_results()) {
							   //printf("-----------------\n");
						   }
				   } while ($mysqli->next_result());
			   }
		   ?>






<?PHP
include("footer.php");
?>
