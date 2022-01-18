<?php
// 検索文字列の初期化
$searchString = "";

// 入力フォームに検索文字列が指定されていたときの処理
if (isset($_POST['searchString'])) {
    $searchString = $_POST['searchString'];

    $dsn = "sqlite:zipdata.db";  // データソース名
    $dbh = new PDO($dsn);          // データベースに接続する

    // 問合せのための SQL 文
    $sql = "SELECT zipcode,addr1||addr2||addr3 as addr FROM ken_all 
            WHERE addr1 LIKE ? ORDER BY zipcode DESC";
    // 問合せの準備
    $stmt = $dbh->prepare($sql);
    
    $stmt-> bindValue(1, "%{$searchString}%");

    // 問合せの実行
    $stmt->execute();
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
        // 問合せの結果の表示
        echo "<hr>\n";
        echo "<p>検索結果</p>\n";

        echo "<table border='1'>\n";
        echo "<tr><th>郵便番号</th><th>住所</th></tr>\n";

        // 結果を1行ずつ取り出して表示する
        while ($row = $stmt->fetch()) {
            echo "<tr>\n";
            echo "<td>" . $row[0] . "</td>\n";
            echo "<td>" . $row[1] . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

        // データベースとの接続を解除する
        $pdo = null;
    }
    ?>

</body>

</html>