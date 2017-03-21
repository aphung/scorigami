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
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <meta name="description" content="">
	    <meta name="author" content="Adam Phung">
	    
		<link rel="icon" href="../favicon.ico">
		<title>Scorigami: a word Jon Bois made up</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<span id="title">Scorigami&nbsp;</span><span id="subtitle">a word Jon Bois made up</span>
				</div>
			</div>
			<div class="row">
				<div class="col">
					links
				</div>
			</div>
			<div class="row">
				<div class="col">
					Selected Content
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div id="x-axis"><span class="axis-label" id="x-axis-title">Points scored by winner&nbsp;</span><span>(or tyer)</span></div>
				</div>
				<div class="col table-content">
					<div id="y-axis"><span class="axis-label">Points scored by loser&nbsp;</span><span>(or tyer)</div>
	                <table class="table">
	                    <thead>
	                        <tr>
	                        <th></th>
	                        <?php 
	                        for ($x=0; $x <= 73; $x++) { 
	                            echo "<th class='rotate'><div>" . $x . "</div></th>";
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
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
		<script type="text/javascript">var scorigami = <?php echo $grid; ?>;</script>
		<script type="text/javascript" src="{{ URL::asset('js/scorigami.js') }}"></script>
	</body>
</html>