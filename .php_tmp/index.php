<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display: grid; place-items: center; gap: 5vw;">
    <h1 style="text-align: center;">ŠACHOVNICA v PHP</h1>
    <table cellspacing="0px" celpadding="0px">
        <?php

        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
                $total = $i + $j;
                if ($total % 2 == 0) {
                    echo "<td id='td1'> </td>";
                } else {
                    echo "<td id='td2'> </td>";
                }
            }
        }
        ?>
    </table>
</body>

</html>