<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap Javascript(jQuery含む) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
</head>

<body>

    <div>
        <img src="data:image/png;base64,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" alt="">
        <p>氏　　名：藤井　絢斗<br>学籍番号：1193033130
        </p>
    </div>
    <div class="container">
        <?php
        // 指定された年月日の曜日を数値で返す関数
        function getDayOfWeek($year, $month, $day)
        {
            // 引数で指定された日のUnixタイムスタンプを取得する
            $timestamp = mktime(0, 0, 0, $month, $day, $year);
            // 関数getdateはタイムスタンプで指定された時刻の年，月，日，曜日などの要素を
            // 連想配列として返す
            $date = getdate($timestamp);
            // 曜日（日=0, 月=1, 火=2,..., 土=6）を取り出して返す
            return $date['wday'];
        }
        ?>

        <?php
        // 指定した年月の末日を返す関数
        function getLastDay($year, $month)
        {
            // $year 年 ($month+1)月 0 日のUnixタイムスタンプを取得する
            $timestamp = mktime(0, 0, 0, $month + 1, 0, $year);
            // 関数getdateはタイムスタンプで指定された時刻の年，月，日，曜日などの要素を
            // 連想配列として返す
            $date = getdate($timestamp);
            // 日を取り出して返す
            return $date['mday'];
        }
        ?>


        <?php
        $year = $_GET['year'];
        $month = $_GET['month'];

        $dayweek = getDayOfWeek($year, $month, 1);
        $lastday = getLastDay($year, $month);
        // 1日目まで空白を入れる &nbsp;
        // 最終日まで，iが6で割り切れたら</td><td>
        ?>
        <div class="ind">
            <p><?php echo $year . "年" . $month . "月" ?>のカレンダー</p>
            <table class="calendar">
                <thead>
                    <tr>
                        <td class="head"><span class="sun">日</span></td>
                        <td class="head">月</td>
                        <td class="head">火</td>
                        <td class="head">水</td>
                        <td class="head">木</td>
                        <td class="head">金</td>
                        <td class="head"><span class="sat">土</span></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        for ($i = 0; $i < $dayweek; $i++) {
                            echo "<td>&nbsp;</td>";
                        }

                        for ($i = 1; $i <= $lastday; ++$i) {
                            if (($i + $dayweek) % 7 == 1) {
                                echo "<td class=\"sun\">" . $i . "</td>";
                            } else if (($i + $dayweek) % 7 == 0) {
                                echo "<td class=\"sat\">" . $i . "</td>";
                            } else {
                                echo "<td style=\"text-align: right;\">" . $i . "</td>";
                            }

                            if (($i + $dayweek) % 7 == 0) {
                                echo "</tr><tr>";
                            }
                        }

                        for ($i = 1; ($dayweek + $lastday + $i - 1) % 7 != 0; $i++) {
                            echo "<td class=\"next\">" . $i . "</td>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
            <br>
            <form action="calendar.php" method="get">
                <select name="year">
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
                年
                <select name="month">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                月
                <input type="submit" value="表示">

            </form>
        </div>
    </div>
</body>

<style>
    .sun {
        text-align: right;
        color: red;
    }

    .sat {
        text-align: right;
        color: blue;
    }

    .calendar {
        border-collapse: collapse;
        border-spacing: 0px;
        border: 1px;
        border-color: black;
    }

    .next {
        text-align: right;
        color: gray;
    }
img {
    max-width: 25%;
}
</style>

</html>