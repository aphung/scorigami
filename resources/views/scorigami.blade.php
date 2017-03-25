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
		<span id="title">Scorigami&nbsp;</span><span id="subtitle">a word Jon Bois made up</span>
		<div>
            <div id="x-axis"><span class="axis-label" id="x-axis-title">Points scored by winner&nbsp;</span><span>(or tyer)</span></div>

            <div id="table">
                <div id="y-axis"><span class="axis-label" id="y-axis-title">Points scored by loser&nbsp;</span><span>(or tyer)</span></div>
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
                                        echo "<td class='box' id='" . $y . $x . "'></td>";
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
            </div>
		</div>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
		<script type="text/javascript">var scorigami = <?php echo $grid; ?>;</script>
		<script type="text/javascript" src="{{ URL::asset('js/scorigami.js') }}"></script>
	</body>
</html>