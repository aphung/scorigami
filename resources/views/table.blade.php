<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
	</head>
	<body>
		<h1>Table Test</h1>
		<div style="overflow-x:auto; width='100%';">
			<table>
				<thead>
					<tr>
					<th></th>
					<?php 
					for ($x=0; $x <= 73; $x++) { 
						echo "<th><div style='width:13px;'>" . $x . "</div></th>";
					}
					?>
					</tr>
				</thead>
				<tbody>
					<?php
					for ($x=0; $x <= 73; $x++) { 
						echo "<tr>";
						echo "<td class='box invalid'><div style='width:13px;'>";
						if ($x == 0)
							echo "0";
						echo "</div></td>";
						for ($y=0; $y <= 73; $y++) {
							if ($y >= $x) {
								echo "<td class='box'></td>";
							} else {
								echo "<td class='box invalid'>";
								if ($x - 1 == $y)
									echo $x;
								echo "</td>";
							}
						}
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>