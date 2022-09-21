<!DOCTYPE html>
<html>

<body>
	<table width="400px" border="1px" cellspacing="0px">
		<?php
		echo "Chess by GeeksforGeeks";
		$value = 0;
		$col = 0;

		do {
			$row = 0;
			echo "<tr>";
			$value = $col;

			do {
				if($value%2 == 0) {
					echo
"<td height=40px width=20px bgcolor=black></td>";
					$value++;
				}
				else {
					echo
"<td height=40px width=20px bgcolor=white></td>";
					$value++;
				}
				$row++;
			}while($row < 8);
			echo "</tr>";
			$col++;
		}while($col < 8);
		?>
	</table>
</body>

</html>
