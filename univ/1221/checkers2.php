<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>自動市松模様</title>
</head>

<body>
    <form>
        好きな色を選んでください。<br>
        色1:
        <input type="radio" name="color" value="red">赤
        <input type="radio" name="color" value="blue">青
        <input type="radio" name="color" value="yellow">黄
        <input type="radio" name="color" value="purple">紫
        <input type="radio" name="color" value="orange">橙
        <input type="radio" name="color" value="green" checked="checked">緑
        <input type="radio" name="color" value="black">黒
        <br>
        色2:
        <input type="radio" name="color2" value="red">赤
        <input type="radio" name="color2" value="blue">青
        <input type="radio" name="color2" value="yellow">黄
        <input type="radio" name="color2" value="purple">紫
        <input type="radio" name="color2" value="orange">橙
        <input type="radio" name="color2" value="green">緑
        <input type="radio" name="color2" value="black" checked="checked">黒
        <br>
        大きさ:
        <input type="number" name="size" value="20">
        <input type="submit">
    </form>
    <?php
    $value = $_GET['color'];
    $value2 = $_GET['color2'];
    $size = $_GET['size'];

    if ($value) {
        echo "私は".$value."と".$value2."を選択しました。";
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
                        $cell_color = $value2;  // $i が奇数なら黒
                    }
                    echo "<td style='width:".$size."px; height: ". $size."px; background-color: $cell_color;'>&nbsp;</td>\n";
                }
                echo "</tr>\n<tr>\n";
            }
            ?>
        </tr>
    </table>
</body>

</html>