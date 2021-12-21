<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>自動市松模様</title>
</head>

<body>
    <form>
        好きな色を選んでください。<br>
        <input type="radio" name="color" value="red">赤
        <input type="radio" name="color" value="blue">青
        <input type="radio" name="color" value="yellow">黄
        <input type="radio" name="color" value="purple">紫
        <input type="radio" name="color" value="orange">橙
        <input type="radio" name="color" value="green">緑
        <br>
        <input type="submit">
    </form>
    <?php
    $value = $_GET['color'];
    if ($value) {
        echo "私は" . $value . "を選択しました。";
    } else {
        echo "色を選択してください";
    }
    ?>

    <table>
        <tr>
            <?php
            $length = rand(2, 10);     // 2～10の範囲の整数をランダムに取得する
            for ($i = 0; $i < $length; $i++) {
                for ($j = 0; $j < $length; $j++) {
                    if (($i + $j) % 2 == 0) {
                        $cell_color = $value;    // $i が偶数なら赤
                    } else {
                        $cell_color = "black";  // $i が奇数なら黒
                    }
                    echo "<td style='width: 20px; height: 20px; background-color: $cell_color;'>&nbsp;</td>\n";
                }
                echo "</tr>\n<tr>\n";
            }
            ?>
        </tr>
    </table>
</body>

</html>