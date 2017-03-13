<?php
function isValid($x, $y) {
	$invalid = array([1, 0], [1, 1], [2, 1], [3, 1], [4, 1], [5, 1], [7, 1]);
	
	if (in_array([$y, $x], $invalid))
		return false;
	return true;
}
?>

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
						echo "<td class='box'><div style='width:13px;'>";
						if ($x == 0)
							echo "0";
						echo "</div></td>";
						for ($y=0; $y <= 73; $y++) {
							if ($y >= $x) {
								// Check if valid
								if (isValid($x, $y))
									echo "<td class='box id='" . $y . $x . "'></td>";
								else
									echo "<td class='box invalid'></td>";
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

			@foreach ($games as $game)
				<li>{{ $game->winner_score }}</li>
			@endforeach
		</div>
	</body>
</html>