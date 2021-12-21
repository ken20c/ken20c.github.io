<?php
// ユーザからメッセージを受け取ったかどうかで異なる処理をする
if (isset($_POST['message'])) {
    // $_POST['message'] に値が設定されていたら $mesg に代入する
    $mesg = $_POST['message'];
}
else {
    // $_POST['message'] に値が未設定なら空文字列にする
    $mesg = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Echo 5</title>
</head>
<body>
 
<form action="echo5.php" method="post">
メッセージをどうぞ：
<input type="text" 
    name="message" 
    value="<?php echo $mesg?>"
    size="50">

<input type="submit" value="送信">
</form>
 
<?php
// $mesg が空文字列でなければ5回表示する
if ($mesg != "") {
    echo "<hr>";     // 水平線を引く
 
    for ($i = 0; $i < 5; $i++) {
        echo htmlspecialchars($mesg)."<br>";   // メッセージと改行を出力
    }
}
?>
</body>
</html>