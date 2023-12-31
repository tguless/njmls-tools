
<?PHP
include("db.php");
include("header.php");
include("map1.php");

?>


  <div id="content">
  	  <!--
	  <img src="images/bsa_phone_number.png" name="phone" class="phone">
	  <img src="images/title_quick_search.png" name="payne" class="quote" height="100" width="200">
	  -->
<form name="partnerConversionTypesForm" id="partnerConversionTypesForm" method="get" action="searchResults.php">

<table border="0" width="400" bgcolor=FFFFFF>
<tbody>

<tr bgcolor="#fdfee2" valign="down">
  <td colspan="2" class="headerLabel" align="left">Search by MLS number: <input type=text name=MLSNum  style='width:115;' ></td>
</tr>


<tr bgcolor="#fdfee2" valign="down">
  <td colspan="2" class="headerLabel" align="left">Towns to Search</td>
</tr>

<tr>
  <td>&nbsp;</td>
  <td class="labelNormal">
    <table border="0" width="38%">
	<tbody>
		<tr>
		  <td class="labelBold">Select County:</td>
		  <td class="labelBold">Minimum Price:</td>
		  <td class="labelBold">Maximum Price:</td>
		  <td class="labelBold">Results Per Page:</td>
		</tr>
		<tr>
		  <td>

			<?php

			$sqlString =  "SET @rowv = 0; SELECT t.Label prpCounty, @rowv := @rowv +1 AS ROW, count(h2.mlsnum) "
						 ."FROM homes h2, trandata t where t.value= prpCounty and t.FieldName = 'County' "
						 ."GROUP BY t.Label "
						 ."ORDER BY t.Label;";
			?>

			<select style="width:130;" id="mediatype" name="mediatype" onchange="change_media(this); return false;">
			<?php
				if ($mysqli->multi_query($sqlString)) {
					   do {
						   /* store first result set */
						   if ($result = $mysqli->store_result()) {
							   while ($row = $result->fetch_row()) {
									 if (file_exists("towngifs/".$row[0].".gif")) {
										echo "<option value='".$row[1] ."'>".$row[0] . " (". $row[2] . ")</option>";
									 }
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
		   </select>
		  </td>

			<?php
			$minPrice = $HTTP_GET_VARS['minPrice'];
			$maxPrice = $HTTP_GET_VARS['maxPrice'];
			$pageSize = $HTTP_GET_VARS['pageSize'];



			echo "<td> ";
			include "minprice.php";
			echo "</td>";
		    echo "<td> ";
		    include "maxprice.php";
		    echo "</td>";


			echo "<td>";

			buildSimpleSelect(5, 1005, 10, $pageSize, " name=pageSize  style='width:115;' "  );

			echo "</td>";

		    //echo "<td><!-- <input style='width:115;' type='text' name=pageSize value=".$pageSize."> --></td>";
		    ?>


		</tr>
	</tbody>
    </table>
  </td>
</tr>

<tr>
  <td>&nbsp;</td>
  <td class="labelNormal">
    <table border="0" width="38%">
	<tbody>
		<tr>
		  <td class="labelBold">Towns to Choose From:</td>
		  <td></td>
		  <td class="labelBold">Selected Towns:</td>
		</tr>
		<tr>
		  <td width="31%">
					<select style="width:200;height:200;" name="conversionTypesPool" size="11">
						<option value="filler">                                                    </option>
					</select>
		  </td>

		  <td width="27%">
		  	<center>
				<input type=button name=add value='Add >>' onClick = 'f_add();'><BR><BR>
				<input type=button name=remove value='<< Remove'  onClick = 'f_drop();'>
				<BR>
				<BR>
				<BR>
				<BR>
				<BR>
				<input type=button name=add value='Add All >>' onClick = 'f_addall();'><BR><BR>
				<input type=button name=remove value='<< Remove All'  onClick = 'f_dropall();'>
			</center>

			<!--
			<a href="javascript:f_add();"><img src="partnerConversionTypes.do_files/addlist.gif" border="0" height="21" width="70"> <br></a>
			<a href="javascript:f_drop();"><img src="partnerConversionTypes.do_files/droplist.gif" border="0" height="22" width="73"></a>
			-->
		  </td>

		  <td width="42%">
			<input name="selectedValues" value="nothing" type="hidden">
			<select style="width:200; height:200;" name="partnerConversionTypes" size="11">
			  <option value="filler">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  </option>
			</select>
		  </td>
		</tr>
	</tbody>
    </table>
  </td>
</tr>
<tr>
	<td colspan="2">
		<center>
			<input type=button name=searchButton value=Search onClick="save(document.partnerConversionTypesForm);"><br><br>
		    <IMG SRC="icon1.gif" NAME="mapimg" ID="mapimg" BORDER="0" >
		</center>



	</td>
</tr>
</tbody>
</table>


</form>




<?php
  		   $sqlString =  "SET @rowv = 0; SELECT upper(h1.prpCounty) prpCounty, upper( prpCity ) prpCity, cntys.Row rowNumber, count(h1.mlsnum) "
				   ."FROM homes h1, ("
				   ."SELECT t.Label prpCounty, @rowv := @rowv +1 AS ROW "
				   ."FROM homes h2, trandata t "
				   ."where t.value= prpCounty and t.FieldName = 'County' "
				   ."GROUP BY t.Label "
				   ."ORDER BY t.Label "
				   .") cntys , trandata t2 "
				   ."WHERE cntys.prpCounty = t2.label and h1.prpCounty = t2.value and t2.FieldName = 'County' "
				   ."GROUP BY h1.prpCounty, prpCity "
				   ."ORDER BY h1.prpCounty;";

		   // echo($sqlString."\n");
?>
<script>
		conversions = new Array(1);
		conversions[0] = new Array(0);

<?php



			if ($mysqli->multi_query($sqlString)) {
				   do {
					   /* store first result set */
					   if ($result = $mysqli->store_result()) {
						   while ($row = $result->fetch_row()) {
								 $rowType = $row[2];
								 $rowValue = $row[1];
								 $rowName = $row[1] . " (".$row[3] . ")";


								 if ($lastType != $rowType ) {
									echo "conversions.push(new Array(0));\n";
								 }
								 echo "conversions[". $rowType . "].push({value: \"" . $rowValue . "\", name: \"".$rowName . "\", type: " . $rowType . "});\n";
								 $lastType = $rowType;
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

		selected_conversions = new Array(1);
		selected_conversions[0] = new Array(0);

</script>

<script src="townselect.js" language="JavaScript" type="text/javascript"></script>


<script>

	parse_querystring();

	change_media(document.getElementById('mediatype'));

</script>


<?PHP
include("footer.php");
?>


