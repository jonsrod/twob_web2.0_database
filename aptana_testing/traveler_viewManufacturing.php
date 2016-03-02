<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Manufacuring View</title>
		<link href="main.css" rel="stylesheet" />
		<style>

        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        h1 {
            color: #555;
            font-size: 2em;
            font-weight: 400;
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (max-width: 280px) {

            body, p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }

        }

    </style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" href="RCTCSS.css" />
	</head>
	<body>
	
<?php

if(isset($_POST['SubmitModelNumber']) && $_POST['SubmitModelNumber'])
{
	// ****Build new instrument traveler form****
	
	// Inits
	$modelNumber = $_POST['SubmitModelNumber'];
	$title = "New Instrument Traveler for Model ".$modelNumber;
?>
	<h5><?php echo $title; ?></h5>
	<form id="idNewInstTravForm" name="NewInstTravForm" action="" method="post" autocomplete="off">
		<input type="hidden" value="<?php echo $modelNumber; ?>" name="ModelNumber">
		<fieldset>
			<table>
				<tr>
					<th align="right">Enclosure:</th>
					<td align="left">
						<input class="radiostyle right" type="radio" id="idEncOpt1" name="Enclosure" value="OEM (no enclosure)">
							<label for="idEncOpt1" class="cRadio">OEM (no enclosure)</label>
						<input class="radiostyle right" type="radio" id="idEncOpt2" name="Enclosure" value="Wall mount" >
							<label for="idEncOpt2" class="cRadio">Wall mount</label>
						<input class="radiostyle right" type="radio" id="idEncOpt3" name="Enclosure" value="Standard" >
							<label for="idEncOpt3" class="cRadio">Standard</label>
						<input class="radiostyle right" type="radio" id="idEncOpt4" name="Enclosure" value="Water resistant wall mount" >
							<label for="idEncOpt4" class="cRadio">Water resistant wall mount</label>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<table>
				<tr>
					<th align="right">Build Date:</th>
					<td align="left"><input type="date" id="idBuildDate" name="BuildDate" ></td>
				</tr>
				<tr>
					<th class="cStdInstYesNo">Standard Instrument?</th>
					<td class="cStdInstYesNo">
						<input class="radiostyle right" type="radio" id="idStdInstYes" name="StandardInstYN" value="1" onclick="yesnoNote()" >
							<label for="idStdInstYes" class="cRadio">Yes</label>
						<input class="radiostyle wrong" type="radio" id="idStdInstNo" name="StandardInstYN" value="0" onclick="yesnoNote()" >
							<label for="idStdInstNo" class="cRadio">No</label>
					</td>
					<td class="cStdInstNote"><textarea class="cYesNoNote" placeholder="List custom parts" name="CustomPartsNotes" id="idTACustParts"></textarea></td>
				</tr>
				<tr>
					<th align="right">Built by:</th>
					<td align="left"><input type="text" name="BuiltBy" ></td>
					
					<th align="right">Construction Manual Revision:</th>
					<td align="left"><input type="text" name="ConManRev" ></td>
				</tr>
				<tr>
					<th width="40%" align="right">Bill of Materials:</th>
					<td align="left"><input type="text" class="cInstTravText" name="bomVersion" ></td>
					
					<th width="20%" align="right">Firmware:</th>
					<td align="left"><input type="text" class="cInstTravText" name="FirmwareVersion" ></td>
					
					<th width="40%" align="right">Scrubber:</th>
					<td align="left"><input type="text" class="cInstTravText" name="Scrubberlot" ></td>
				</tr>
				<tr>
					<th align="right">Air Pump:</th>
					<td align="left"><input type="text" class="cInstTravText" name="airPump" ></td>
					
					<th align="right">Valve:</th>
					<td align="left"><input type="text" class="cInstTravText" name="Valve" ></td>
					
					<th align="right">PCB:</th>
					<td align="left"><input type="text" class="cInstTravText" name="pcbVersion" ></td>
				</tr>
				<tr>
					<th align="right">Ph PCB:</th>
					<td align="left"><input type="text" class="cInstTravText" name="PhPCB" ></td>
					
					<th align="right">Op Bench:</th>
					<td align="left"><input type="text" class="cInstTravText" name="OpticalBench" ></td>
					
					<th align="right">Lamp:</th>
					<td align="left"><input type="text" class="cInstTravText" name="Lamp" ></td>
				</tr>
				<tr>
					<th align="right">Inst. Flow (TSI):</th>
					<td align="left"><input type="text" class="cInstTravText" name="instFlow" ></td>
					
					<th align="right">Analog Output:</th>
					<td align="left"><input type="text" class="cInstTravText" name="analogOutput" ></td>
					
					<th align="right">Pre-Calibration Inspection by:</th>
					<td align="left"><input type="text" class="cInstTravText" name="preCalInspcBy" ></td>
				</tr>
				<tr>
					<th align="left">Notes:</th>
					<td><textarea align="right" name="PrecalNotes"></textarea></td>
					
					<th align="right">Transfer Date to Cal:</th>
					<td align="left"><input type="date" id="idTranstoCal" class="DatePicker" name="TranstoCal" ></td>
					
					<th align="right">Transfer?:</th>
					<td class="cTranstoCalYesNo">
					<input class="cReset" type="radio" id="idtranstoCalyes" name="transferYN" value="1" onclick="mailer.php" >
							<label for="idtranstoCalyes" class="cRadio">Yes</label>
					<input class="cResetNo" type="radio" id="idtranstoCalno" name="transferYN" value="0" onclick="mailer.php" >
							<label for="idtranstoCalno" class="cRadio">No</label>
				
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<table>
				<tr >
					<td align="left"><input type="submit" value="Submit" name="SubmitNewInstTraveler" onClick="GoToTop()" id="idSubmitNewInstTraveler"></td>
					<td width="100%" align="right"><button "type="button" class="cReset" onclick="clearInputFields()">Reset</button></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script>
		
		document.getElementById('idTACustParts').style.display = 'none';
		document.getElementById('idTAReWork').style.display = 'none';
		document.getElementById("idCheckSerialNumber").style.display = 'none';
		
		function checkSerialNum()
		{
			var modelNum = "<?php echo $modelNumber; ?>";
			var proposedSerialNum = document.getElementById("idSerialNumber").value;
			if(proposedSerialNum != "")
			{
				var value = $.ajax({
					type: "POST",
					url: "<?php echo $_SESSION['RCTAjaxLocation'];?>",
					data: "modelNum="+ modelNum+ " &serialNum="+ proposedSerialNum+ " &travType=instrument",
					async: false
				}).responseText;
				
				if (value == "fail")
				{
					var alertStr = proposedSerialNum + " has already been assigned for this model!";
					document.getElementsByName("infoSerialNumNote")[0].value = alertStr;
					document.getElementsByName("infoSerialNumNote")[0].setAttribute('size', alertStr.length);
					document.getElementById("idInfoSerialNumNote").style.display = 'block';
					document.getElementById("idCheckSerialNumber").style.display = 'block';
					document.getElementById("idSerialNumber").focus();
					document.getElementById("idSubmitNewInstTraveler").style.display = 'none';
				}
				else
				{
					document.getElementById("idInfoSerialNumNote").style.display = 'none';
					document.getElementById("idCheckSerialNumber").style.display = 'none';
					document.getElementById("idSubmitNewInstTraveler").style.display = 'block';
				}
			}
		}
				
		function yesnoNote()
		{
			if(document.getElementById('idStdInstYes').checked) 
			{
				document.getElementById('idTACustParts').style.display = 'none';
			}
			
			if(document.getElementById('idStdInstNo').checked)
			{
				document.getElementById('idTACustParts').style.display = 'block';
			}
			
			if(document.getElementById('idReWorkYes').checked) 
			{
				document.getElementById('idTAReWork').style.display = 'block';
			}
			
			if(document.getElementById('idReWorkNo').checked)
			{
				document.getElementById('idTAReWork').style.display = 'none';
			}
			
			if(document.getElementById('idtranstoCalyes').checked)
			{
				document.getElementById('idtranstocal').
			}
			
			if(document.getElementById('idtranstoCalno').checked)
			{
				document.getelementById('idtranstocal')
			}
		}
		
		function clearInputFields()
		{
			 document.getElementById("idNewInstTravForm").reset();
		}
		
		function GoToTop()
		{
			parent.$("html, body").animate({ scrollTop: 0 }, "slow");
		}	
		
		function cTranstoCalYesNo ()
	</script>
	</body>
</html>