<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    echo "Chessboard";
    echo "<br>";
    $value = 8;
    for ($i = 0; $i < $value; $i++) {
        for ($j = 0; $j < $value; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<div style='width: 50px; height: 50px; background-color: black; display: inline-block;'></div>";
            } else {
                echo "<div style='width: 50px; height: 50px; background-color: white; display: inline-block;'></div>";
            }
        }
        echo "<br>";
    }
</body>
</html>