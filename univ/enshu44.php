<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>自動市松模様</title>
</head>

<body>
    <table>
        <tr>
            <?php
            $length = rand(2, 10);     // 2～10の範囲の整数をランダムに取得する
            for ($i = 0; $i < $length; $i++) {
                for ($j = 0; $j < $length; $j++) {
                    if (($i+$j) % 2 == 0) {
                        $cell_color = "red";    // $i が偶数なら赤
                    } else {
                        $cell_color = "black";  // $i が奇数なら黒
                    }
                    echo "<td style='width: 20px; height: 20px; background-color: $cell_color;'>&nbsp;</td>\n";
                }
            }
            ?>
        </tr>
    </table>
</body>

</html>