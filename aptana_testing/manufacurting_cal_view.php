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
					<th class="cReWorkYesNo">Was the instrument re-worked?</th>
					<td class="cReWorkYesNo">
						<input class="radiostyle right" type="radio" id="idReWorkYes" name="reworkYN" value="1" onclick="yesnoNote()" >
							<label for="idReWorkYes" class="cRadio">Yes</label>
						<input class="radiostyle wrong" type="radio" id="idReWorkNo" name="reworkYN" value="0" onclick="yesnoNote()" >
							<label for="idReWorkNo" class="cRadio">No</label>
					</td>
					<td class="cReWorkNote"><textarea class="cYesNoNote" placeholder="What was done?" name="InstReworkNotes" id="idTAReWork"></textarea></td>
				</tr>
				<tr>
					<th width="40%" align="right">Ave. Std. Dev.:</th>
					<td align="left"><input type="text" class="cInstTravText" name="avdStdDev" ></td>'
					
					<th width="20%" align="right">Slope (S):</th>
					<td align="left"><input type="text" class="cInstTravText" name="slope" ></td>
					
					<th width="40%" align="right">Offset (Z):</th>
					<td align="left"><input type="text" class="cInstTravText" name="offset" ></td>
				</tr>
				<tr>
					<th align="right">PD Voltage 1:</th>
					<td align="left"><input type="text" class="cInstTravText" name="pdVoltage1" ></td>
					
					<th align="right">PD Voltage 2:</th>
					<td align="left"><input type="text" class="cInstTravText" name="pdVoltage2" ></td>
					
					<th align="right">Analog Output:</th>
					<td align="left"><input type="text" class="cInstTravText" name="AnalogOutputcal" ></td>
				</tr>
				<tr>
					<th align="right">Log External Zero:</th>
					<td align="left"><input type="text" class="cInstTravText" name="LogExternalZero" ></td>
					
					<th align="right">Flow Meter Cal:</th>
					<td align="left"><input type="text" class="cInstTravText" name="FlowMeterCal" ></td>
					
					<th align="right">Calibration by:</th>
					<td align="left"><input type="text" class="cInstTravText" name="Calibrationby" ></td>
				</tr>
				<tr>
					<th align="left">Calibration Notes:</th>
					<td><textarea align="right" name="CalibrationNotes"></textarea></td>
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
	</script>
</body>
</html>