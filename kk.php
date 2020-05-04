


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	include './connection_sql.php';

	?>


	<div style="width: 200px;float: left;">
		<table border="1">
			<thead>
				<tr>
					<td>Month</td>
					<td>No Of Day WOrk</td>
					<td>BASIC</td>
					<td>BUDGET RELIEF</td>
					<td>ALL02(PF)NOPAY</td>
					<td><b>Total</b></td>
					<td>NOPAY</td>
					<td><B>TOTAL FOR PF</B></td>
					<td>SP ALLOW 01</td>
					<td>SP ALLOW 02</td>
					<td>OVER TIME</td>
					<td><B>GROSS PAY</B></td>
					<td>EPF8%</td>
					<td>SAL ADVANCE</td>
					<td>LOAN01</td>
					<td>LOAN02</td>
					<td>LOAN03</td>
					<td>FEST LOAN</td>
					<td>INSU LOAN</td>
					<td>MOBITEL BILL</td>
					<td>THFA SOCIATY</td>
					<td>FAS</td>
					<td>SP DEUCTION</td>
					<td>STAMP</td>
					<td>PAYE</td>
					<td>TOTAL DEDEUCTION</td>
					<td><B>BALANCE PAY</B></td>
					<td>EPF 12%</td>
					<td>EPF 3%</td>
					<td>EPFNO</td>
					<td>NAME</td>
					<td>SIGNATURE</td>
				</tr>
			</thead>
			<?php
			$month= $_GET["month"];
			$sql = "SELECT * FROM pro where SALDATE = '" . $month. "' order by id  ";
			foreach ($conn->query($sql) as $row) {

				?>
				<tr>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>
					<td><?php echo $row['EPFNO']; ?></td>

				</tr>




				<?php
			}

			?>



		</table>
	</div>



</body>
</html>