
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php     
    echo "<table width = 90% border = '1' >";     
        $row = 5;     
        $col = 2;     
        for ($r = 1; $r <= $row; $r++) {
            echo "<tr>";
            for ($c = 1; $c <= $col;$c++) {
                echo "<td>&nbsp;</td>\n";}     
                echo "</tr>\n";}     
                echo "</table>\n"; 
                                
?> 
</body>
</html>
