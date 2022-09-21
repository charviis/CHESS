<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
    </style>

<body>
	<table width="400px" border="1px" cellspacing="0px">
		<?php
            for($i=1; $i<=8; $i++) {
                echo "<tr>";
                for($j=1; $j<=8; $j++) {
                    $total = $i + $j;
                    if($total % 2 == 0) {
                        echo "<td class='black'></td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
	</table>
</body>

</html>

