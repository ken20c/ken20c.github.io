<?php
// 検索文字列の初期化
$searchString = "";

// 入力フォームに検索文字列が指定されていたときの処理
if (isset($_POST['searchString'])) {
    $searchString = $_POST['searchString'];

    $dsn = "sqlite:northwind.db";  // データソース名
    $dbh = new PDO($dsn);          // データベースに接続する

    // 問合せのための SQL 文
    $sql = "SELECT 商品名,梱包単位,単価,在庫 FROM 商品 
            WHERE 商品名 LIKE ? ORDER BY 単価 DESC";

    $stmt-> bindValue(1, "%{$searchString}%");
    // 問合せの準備
    $stmt = $dbh->prepare($sql);

    // 問合せの実行
    $stmt->execute();
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>商品検索</title>
</head>

<body>
    <h1>商品検索</h1>

    <form method="post" action="productSearch.php">
        <p>商品名に含まれる文字列を入力してください。</p>
        <input type="text" name="searchString" value="<?php echo $searchString; ?>">
        <input type="submit" value="検索">
    </form>

    <?php
    if ($searchString != "") {
        // 問合せの結果の表示
        echo "<hr>\n";
        echo "<p>検索結果</p>\n";

        echo "<table border='1'>\n";
        echo "<tr><th>商品名</th><th>梱包単位</th><th>単価</th><th>在庫</th></tr>\n";

        // 結果を1行ずつ取り出して表示する
        while ($row = $stmt->fetch()) {
            echo "<tr>\n";
            echo "<td>" . $row['商品名'] . "</td>\n";
            echo "<td>" . $row['梱包単位'] . "</td>\n";
            echo "<td>" . $row['単価'] . "</td>\n";
            echo "<td>" . $row['在庫'] . "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";

        // データベースとの接続を解除する
        $pdo = null;
    }
    ?>

</body>

</html>