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
        <input type="radio" name="color" value="red"><span class="red">　</span>
        <input type="radio" name="color" value="blue"><span class="blue">　</span>
        <input type="radio" name="color" value="yellow"><span class="yellow">　</span>
        <input type="radio" name="color" value="purple"><span class="purple">　</span>
        <input type="radio" name="color" value="orange"><span class="orange">　</span>
        <input type="radio" name="color" value="green" checked="checked"><span class="green">　</span>
        <input type="radio" name="color" value="black"><span class="black">　</span>
        <br>
        色2:
        <input type="radio" name="color" value="red"><span class="red">　</span>
        <input type="radio" name="color" value="blue"><span class="blue">　</span>
        <input type="radio" name="color" value="yellow"><span class="yellow">　</span>
        <input type="radio" name="color" value="purple"><span class="purple">　</span>
        <input type="radio" name="color" value="orange"><span class="orange">　</span>
        <input type="radio" name="color" value="green" checked="checked"><span class="green">　</span>
        <input type="radio" name="color" value="black"><span class="black">　</span>
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

<style>
    span {
        width:10px;
        height: 10px;
    }

    .red {
        background-color: red;
    }
    .blue {
        background-color: blue;
    }
    .yellow {
        background-color: yellow;
    }
    .purple {
        background-color: purple;
    }
    .orange {
        background-color: orange;
    }
    .green {
        background-color: green;
    }
    .black {
        background-color: black;
    }
</style>

</html>