<?php
// 検索文字列の初期化
$searchString = "";

// 入力フォームに検索文字列が指定されていたときの処理
if (isset($_POST['searchString'])) {
    $searchString = $_POST['searchString'];

    $dsn = "sqlite:zipdata.db";  // データソース名
    $dbh = new PDO($dsn);          // データベースに接続する

    // 問合せのための SQL 文
    $sql = "SELECT zipcode,addr1||addr2||addr3 as addr, FROM ken_all 
            WHERE addr LIKE ? ORDER BY zipcode DESC";
    // 問合せの準備
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(1, "%{$searchString}%");

    $startTime = microtime(TRUE);  // 実行開始時刻
    $stmt->execute();              // SQL文の実行
    $endTime = microtime(TRUE);    // 実行終了時刻
    $time = $endTime - $startTime;
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>郵便番号検索</title>
</head>

<body>
    <h1>郵便番号検索</h1>

    <form method="post" action="address.php">
        <p>住所の一部を入力してください。</p>
        <input type="text" name="searchString" value="<?php echo $searchString; ?>">
        <input type="submit" value="検索">
    </form>

    <?php
    if ($searchString != "") {
        echo "<hr>\n";
        echo "<p>検索結果</p>\n";

        if ($row = $stmt->fetch()) {

            echo "<table border='1'>\n";
            echo "<tr><th>郵便番号</th><th>住所</th></tr>\n";

            echo "<tr>\n";
            echo "<td>" . $row[0] . "</td>\n";
            echo "<td>" . $row[1] . "</td>\n";
            echo "</tr>\n";
        } else {
            echo "該当の住所がありません。";
        }

        // 結果を1行ずつ取り出して表示する
        while ($row = $stmt->fetch()) {
            echo "<tr>\n";
            echo "<td>" . $row[0] . "</td>\n";
            echo "<td>" . $row[1] . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";
        echo "<h2>". $time ."</h2>";

        // データベースとの接続を解除する
        $pdo = null;
    }

    ?>

</body>

</html>