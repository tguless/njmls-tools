<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
//http://us2.php.net/manual/en/function.ftp-get.php
// define some variables
$docroot = 'c:/wamp/www/bsafeed/code/';

$local_file[1] = 'resdata.txt';
$local_file[2] = 'trandata.txt';
$local_file[3] = 'gsmls_changedphotos.zip';

$server_file[1] = '/office/resdata.txt';
$server_file[2] = '/office/trandata.txt';;
$server_file[3] = '/pictures/gsmls_changedphotos.zip';

$ftp_server = "gsmlsftp3.gsmls.com";
$ftp_user_name = "xxxx";
$ftp_user_pass = "xxxx";

$doFTP = "true";
$doImport = "true";
$doImagesUnzip = "true";
$doImagesFTP = "true";

if ($doFTP == "true") {

// set up basic connection
	$conn_id = ftp_connect($ftp_server);

	// login with username and password
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

	// try to download $server_file1 and save to $local_file



	if (ftp_get($conn_id, $local_file[1], $server_file[1], FTP_BINARY)) {
	   echo "Successfully written to $local_file[1]<br>\n";
	} else {
	   echo "There was a problem writing $local_file[1]\n";
	}

	if (ftp_get($conn_id, $local_file[2], $server_file[2], FTP_BINARY)) {
	   echo "Successfully written to $local_file[2]<br>\n";
	} else {
	   echo "There was a problem writing $local_file[2]\n";
	}


	// try to download $server_file1 and save to $local_file
	/*
	if (ftp_get($conn_id, $local_file2, $server_file2, FTP_BINARY)) {
	   echo "Successfully written to $local_file2\n";
	} else {
	   echo "There was a problem\n";
	}
	*/

	// close the connection
	ftp_close($conn_id);
}


if ($doImport == "true") {
	echo "Connecting to database:<br>";

	include("db.php");


$sqlString =  <<< END_OF_STRING
TRUNCATE TABLE homes;

LOAD DATA LOCAL INFILE '{$docroot}resdata.txt'
INTO TABLE homes
FIELDS TERMINATED BY '\t'
LINES TERMINATED BY '\r\n'
(
	AgentName,
	OfficePhone,
	OfficeName,
	OfficeAddress1,
	OfficeAddress2,
	OfficeCity,
	OfficeState,
	OfficeZip,
	RequireOfficeInfo,
	Acres,
	AppFee,
	AssessAmountBldg,
	AssessAmountLand,
	AssessTotal,
	AssessTotalTax,
	AssocFee,
	AssocFeePaid,
	BaseDesc,
	Basement,
	BathsFullTotal,
	BathsHalfTotal,
	BathsTotal,
	Bed1Dim,
	Bed1Level,
	Bed2Dim,
	Bed2Level,
	Bed3Dim,
	Bed3Level,
	Bed4Dim,
	Bed4Level,
	Beds,
	BuiltInfo,
	CommLiving,
	DaysOnMarket,
	DisclosureAvail,
	Easement,
	Exterior,
	FloodInsur,
	GarageCap,
	GarageDesc,
	HeatSrc,
	HeatSystem,
	Interior,
	ListPrice,
	ListStatus,
	LotSize,
	MlsNum,
	PhotoCount,
	PropColor,
	PropType,
	PrpCity,
	PrpCounty,
	RemarksPublic,
	RoomDenDim,
	RoomDenLevel,
	RoomDiningDim,
	RoomDiningLevel,
	RoomFamilyDim,
	RoomFamilyLevel,
	RoomKitchenDim,
	RoomKitchenLevel,
	RoomLivingDim,
	RoomLivingLevel,
	RoomOther1,
	RoomOther1Dim,
	RoomOther1Level,
	RoomOther2,
	RoomOther2Dim,
	RoomOther2Level,
	RoomOther3,
	RoomOther3Dim,
	RoomOther3Level,
	RoomOther4,
	RoomOther4Dim,
	RoomOther4Level,
	Rooms,
	SchoolElem,
	SchoolHigh,
	SchoolJunior,
	SendRes,
	SqFtApprox,
	Style,
	TaxAmount,
	TaxRate,
	TaxRateYear,
	TaxYear,
	UID,
	UnitNum,
	YearBuilt,
	Zoning,
	Zip,
	AgentList,
	OfficeList
);

TRUNCATE TABLE trandata;

LOAD DATA LOCAL INFILE '{$docroot}trandata.txt'
INTO TABLE trandata
FIELDS TERMINATED BY '\t'
LINES TERMINATED BY '\r\n'
(
PropType,
FieldName,
Label,
Value
);

END_OF_STRING;

	echo "Executing SQL: <br>";

	echo $sqlString;

	$mysqli->multi_query($sqlString);
	do{

	} while ($mysqli->next_result());
}






if ($doImagesFTP == "true") {

// set up basic connection
	$conn_id = ftp_connect($ftp_server);

	// login with username and password
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

	// try to download $server_file1 and save to $local_file


	if (ftp_get($conn_id, $local_file[3], $server_file[3], FTP_BINARY)) {
	   echo "Successfully written to $local_file[3]<br>\n";
	} else {
	   echo "There was a problem writing $local_file[3]\n";
	}

	// close the connection
	ftp_close($conn_id);
}


if ($doImagesUnzip == "true") {

	$error = unzip($docroot, "gsmls_changedphotos", 1);
	echo $error;
}

function unzip($dir, $file, $verbose = 0) {

	$dir_path = $dir."../media/MLSImages";
	$zip_path = "$dir$file.zip";

	$ERROR_MSGS[0] = "OK";
	$ERROR_MSGS[1] = "Zip path $zip_path doesn't exists.";
	$ERROR_MSGS[2] = "Directory $dir_path for unzip the pack already exists, impossible continue.";
	$ERROR_MSGS[3] = "Error while opening the $zip_path file.";

	$ERROR = 0;

	if (file_exists($zip_path)) {

		//if (!file_exists($dir_path)) {
			mkdir($dir_path);

			if (($link = zip_open($zip_path))) {

				while (($zip_entry = zip_read($link)) && (!$ERROR)) {

					if (zip_entry_open($link, $zip_entry, "r")) {

						$data = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
						$dir_name = dirname(zip_entry_name($zip_entry));
						$name = zip_entry_name($zip_entry);

						if ($name[strlen($name)-1] == '/') {

							$base = "$dir_path/";

							foreach ( explode("/", $name) as $k) {

								$base .= "$k/";

								if (!file_exists($base)) {
									mkdir($base);
								}

							}

						} else {

							$name = "$dir_path/$name";

							if ($verbose)
							echo "extracting: $name<br>";

							$stream = fopen($name, "w");
							fwrite($stream, $data);

						}

						zip_entry_close($zip_entry);

					} else {
					    $ERROR = 4;
					}
				}
				zip_close($link);
			} else {
				$ERROR = "3";
			}
		/*
		} else {
			$ERROR = 2;
		}
		*/
	} else {
		$ERROR = 1;
	}
	return $ERROR_MSGS[$ERROR];

}



?>
