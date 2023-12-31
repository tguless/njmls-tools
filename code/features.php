
<!--

null, Bed1Dim, Bed1Level, Bed2Dim, Bed2Level, Bed3Dim, Bed3Level, Bed4Dim, Bed4Level,
RoomDenDim, RoomDenLevel, RoomDiningDim, RoomDiningLevel, RoomFamilyDim,
RoomFamilyLevel, RoomKitchenDim, RoomKitchenLevel, RoomLivingDim, RoomLivingLevel,
RoomOther1, RoomOther1Dim, RoomOther1Level, RoomOther2, RoomOther2Dim, RoomOther2Level,
RoomOther3, RoomOther3Dim, RoomOther3Level, RoomOther4, RoomOther4Dim, RoomOther4Level
-->
<table>
	<tr>
		<td width=200 valign=top>
			<table bgcolor="#6699FF" width=100%>
				<tr>
					<td class="style9">
						Interior
					</td>
				</tr>
			</table>

			<?PHP
				foreach($interiorDesc as $value) {
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
				}
			?>

		</td>
		<td>
			&nbsp;
		</td>
		<td width=200 valign=top>
			<table bgcolor="#6699FF" width=100%>
				<tr>
					<td class="style9">
						Exterior
					</td>
				</tr>
			</table>

			<?PHP
				foreach($exteriorDesc as $value) {
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
				}
			?>

		</td>
		<td>
					&nbsp;
		</td>
		<td width=200 valign=top>
			<table bgcolor="#6699FF" width=100%>
				<tr>
					<td class="style9">
						Garage
					</td>
				</tr>
			</table>

			<?PHP
				foreach($garageDesc as $value) {
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
				}
				echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $garageCap ." car</span><br>";

			?>


		</td>

	</tr>




	<tr>
		<td width=200 valign=top>
			<table bgcolor="#6699FF" width=100%>
				<tr>
					<td class="style9">
						Heat System
					</td>
				</tr>
			</table>

			<?PHP
				foreach($heatsysDesc as $value) {
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
				}
			?>



		</td>
		<td>
			&nbsp;
		</td>
		<td width=200 valign=top>
			<table bgcolor="#6699FF" width=100%>
					<tr>
						<td class="style9">
							Heat Source
						</td>
					</tr>
			</table>


			<?PHP
				foreach($heatSrcDesc as $value) {
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
				}
			?>

		</td>
		<td>
					&nbsp;
		</td>
		<td width=200 valign=top>
			<table bgcolor="#6699FF" width=100%>
				<tr>
					<td class="style9">
						Built Info
					</td>
				</tr>
			</table>

			<?PHP
				foreach($builtInfDesc as $value) {
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
				}
			?>

		</td>

	</tr>




		<tr>
			<td width=200 valign=top>
				<table bgcolor="#6699FF" width=100%>
					<tr>
						<td class="style9">
							Basement Description
						</td>
					</tr>
				</table>

				<?PHP
					foreach($baseFtrsDesc as $value) {
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
					}
					echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $basement ."</span><br>";
				?>



			</td>
			<td>
				&nbsp;
			</td>
			<td width=200 valign=top>
				<table bgcolor="#6699FF" width=100%>
						<tr>
							<td class="style9">
								Easement
							</td>
						</tr>
				</table>


				<?PHP
					foreach($easementDesc as $value) {
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
					}
				?>

			</td>
			<td>
						&nbsp;
			</td>
			<td width=200 valign=top>
				<table bgcolor="#6699FF" width=100%>
					<tr>
						<td class="style9">
							Style
						</td>
					</tr>
				</table>

				<?PHP
					foreach($styleDesc as $value) {
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
					}
				?>

			</td>

	</tr>




		<tr>
			<td width=200 valign=top>
				<table bgcolor="#6699FF" width=100%>
					<tr>
						<td class="style9">
							Property County
						</td>
					</tr>
				</table>

				<?PHP
					foreach($prpCountyDesc as $value) {
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $value ."</span><br>";
					}
				?>



			</td>
			<td>
				&nbsp;
			</td>
			<td width=200 valign=top>
				<table bgcolor="#6699FF" width=100%>
						<tr>
							<td class="style9">
								Tax Amount
							</td>
						</tr>
				</table>


				<?PHP
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $taxAmount ."</span><br>";

				?>

			</td>
			<td>
						&nbsp;
			</td>
			<td width=200 valign=top>
				<table bgcolor="#6699FF" width=100%>
					<tr>
						<td class="style9">
							Square Feet
						</td>
					</tr>
				</table>

				<?PHP
					foreach($styleDesc as $value) {
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $itemSqFt ."</span><br>";
					}
				?>

			</td>

	</tr>


			<tr>
				<td width=200 valign=top>
					<table bgcolor="#6699FF" width=100%>
						<tr>
							<td class="style9">
								Lot Size
							</td>
						</tr>
					</table>

					<?PHP
						echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $lotSize ."</span><br>";

					?>



				</td>
				<td>
					&nbsp;
				</td>
				<td width=200 valign=top>
					<table bgcolor="#6699FF" width=100%>
							<tr>
								<td class="style9">
									Year Built
								</td>
							</tr>
					</table>


					<?PHP
							echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $yearBuilt ."</span><br>";

					?>

				</td>
				<td>
							&nbsp;
				</td>
				<td width=200 valign=top>
					<table bgcolor="#6699FF" width=100%>
						<tr>
							<td class="style9">
								Acres
							</td>
						</tr>
					</table>

					<?PHP
						foreach($styleDesc as $value) {
							echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $acres ."</span><br>";
						}
					?>

				</td>

	</tr>


	<tr>
					<td width=200 valign=top>
						<table bgcolor="#6699FF" width=100%>
							<tr>
								<td class="style9">
									Land Assessment
								</td>
							</tr>
						</table>

						<?PHP
							echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $assessLand ."</span><br>";

						?>



					</td>
					<td>
						&nbsp;
					</td>
					<td width=200 valign=top>
						<table bgcolor="#6699FF" width=100%>
								<tr>
									<td class="style9">
										Building Assessment
									</td>
								</tr>
						</table>


						<?PHP
								echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $assessBldg ."</span><br>";

						?>

					</td>
					<td>
								&nbsp;
					</td>
					<td width=200 valign=top>
						<table bgcolor="#6699FF" width=100%>
							<tr>
								<td class="style9">
									Assessment Total
								</td>
							</tr>
						</table>

						<?PHP
							foreach($styleDesc as $value) {
								echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $assessTotal ."</span><br>";
							}
						?>

					</td>

	</tr>

	<tr>
						<td width=200 valign=top>
							<table bgcolor="#6699FF" width=100%>
								<tr>
									<td class="style9">
										Association Fee
									</td>
								</tr>
							</table>

							<?PHP
								echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $assocFee ."</span><br>";

							?>



						</td>
						<td>
							&nbsp;
						</td>
						<td width=200 valign=top>
							<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Full Bathrooms
										</td>
									</tr>
							</table>


							<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $bathsFull ."</span><br>";

							?>

						</td>
						<td>
									&nbsp;
						</td>
						<td width=200 valign=top>
							<table bgcolor="#6699FF" width=100%>
								<tr>
									<td class="style9">
										Half Bathrooms
									</td>
								</tr>
							</table>

							<?PHP
								foreach($styleDesc as $value) {
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $bathsHalf ."</span><br>";
								}
							?>

						</td>

	</tr>


	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Flood Insurance Required?
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $floodInsur ."</span><br>";

								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												Total Rooms:
											</td>
										</tr>
								</table>


								<?PHP
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $rooms ."</span><br>";

								?>

							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											<!--Half Bathrooms--> &nbsp;
										</td>
									</tr>
								</table>

<!--
								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $bathsHalf ."</span><br>";
									}
								?>
-->

							</td>

	</tr>

	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Tax Rate
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $taxRate ."</span><br>";

								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												Tax Rate Year
											</td>
										</tr>
								</table>


								<?PHP
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $taxRateYear ."</span><br>";

								?>

							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Tax Year
										</td>
									</tr>
								</table>

								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $taxYear ."</span><br>";
									}
								?>

							</td>

	</tr>


	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Bedroom 1
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $Bed1Dim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $Bed1Level ."</span><br>";
								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												Bedroom 2
											</td>
										</tr>
								</table>


								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $Bed2Dim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $Bed2Level ."</span><br>";

								?>

							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Bedroom 3
										</td>
									</tr>
								</table>

								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $Bed3Dim ."</span><br>";
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $Bed3Level ."</span><br>";

									}
								?>

							</td>

	</tr>

	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Bedroom 4
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $Bed4Dim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $Bed4Level ."</span><br>";

								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												Family Room
											</td>
										</tr>
								</table>


								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomFamilyDim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomFamilyLevel ."</span><br>";

								?>

							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Dining Room
										</td>
									</tr>
								</table>

								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomDiningDim ."</span><br>";
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomDiningLevel ."</span><br>";
									}
								?>

							</td>

	</tr>

	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Den
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomDenDim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomDenLevel ."</span><br>";

								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												Living Room
											</td>
										</tr>
								</table>


								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomLivingDim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomLivingLevel ."</span><br>";

								?>

							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Kitchen
										</td>
									</tr>
								</table>

								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomKitchenDim ."</span><br>";
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomKitchenLevel ."</span><br>";
									}
								?>

							</td>

	</tr>

	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Other Room 1
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Type: ". $RoomOther1 ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomOther1Dim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomOther1Level ."</span><br>";

								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												Other Room 2
											</td>
										</tr>
								</table>


								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Type: ". $RoomOther2 ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomOther2Dim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomOther2Level ."</span><br>";

								?>

							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Other Room 3
										</td>
									</tr>
								</table>

								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Type: ". $RoomOther3 ."</span><br>";
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomOther3Dim ."</span><br>";
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomOther3Level ."</span><br>";
									}
								?>

							</td>

	</tr>


	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Other Room 4
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Type: ". $RoomOther4 ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Dimension: ". $RoomOther4Dim ."</span><br>";
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>Level: ". $RoomOther4Level ."</span><br>";


								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												<!-- Living Room-->High School
											</td>
										</tr>
								</table>


								<?PHP
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $HighSchool ."</span><br>";

								?>


							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											<!--  Kitchen -->Elementary School
										</td>
									</tr>
								</table>

								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $ElemSchool ."</span><br>";
									}
								?>


							</td>

	</tr>


	<tr>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											Junior School
										</td>
									</tr>
								</table>

								<?PHP
									echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $JuniorSchool."</span><br>";

								?>



							</td>
							<td>
								&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
										<tr>
											<td class="style9">
												<!-- Living Room--> <!--Number of Units -->&nbsp;
											</td>
										</tr>
								</table>

<!--
								<?PHP
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $UnitNum ."</span><br>";

								?>
-->


							</td>
							<td>
										&nbsp;
							</td>
							<td width=200 valign=top>
								<table bgcolor="#6699FF" width=100%>
									<tr>
										<td class="style9">
											<!--  Kitchen -->&nbsp;
										</td>
									</tr>
								</table>
<!--
								<?PHP
									foreach($styleDesc as $value) {
										echo "<span class='listedByEtc'>&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;</span><span class='style6'>". $ElemSchool ."</span><br>";
									}
								?>
-->


							</td>

	</tr>




</table>

<br><br><br><br>
<!--
<table width="425" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" bgcolor="#6699FF" class="style9">Property Type </td>
    <td width="1">&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">County</span></td>
  </tr>
  <tr>
    <td width="10">&nbsp;</td>

    <td width="185"><span class="listedByEtc"> </span><span class="style6"><span class="listedByEtc">&bull;</span> Single
    Family    </span></td>
    <td>&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="184"><span class="listedByEtc">&bull;</span><span class="style6"> Essex </span></td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Year Built </span></td>

    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Style</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> 1892 </span></td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Victorian </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Total Bedroom(s) </span></td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Total Bath(s) </span></td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> 7 </span> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> 4.5 </span></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Total Rooms </span></td>

    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Heating Features </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> 14 </span></td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Oil Fuel, Hot
        Water </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Rooms </span></td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Floors</span></td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Living Room </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Hardwood </span></td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Dining Room </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>

    <td><span class="listedByEtc">&bull;</span><span class="style6"> Family Room </span></td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Fireplaces</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Kitchen </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Living Room,
        Dining Room </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Basement </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Laundry Room </span></td>
    <td>&nbsp;</td>

    <td colspan="2" bgcolor="#6699FF"><span class="style9">HVAC</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Central Air </span></td>

  </tr>
  <tr>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Garage</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> 2 Car </span></td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Exterior Features </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Paved Driveway </span></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#6699FF"><span class="style9">Interior Features </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Patio </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Partially Finished
    Basement </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Privacy Fence </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Microwave Oven </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Detached Garage </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Gas Range and
    Oven </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Porch </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Refridgerator </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Screened Patio </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Water Filter/Purifier </span></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="listedByEtc">&bull;</span><span class="style6"> Electric Service
    On-site </span></td>
  </tr>
</table>
-->