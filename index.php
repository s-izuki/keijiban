


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4each_keijiban</title>
    <link rel ="stylesheet" href="style.css">
</head>

<body>
<?php 

mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");
?>

<img src="4eachblog_logo.jpg">
<header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>
<div class="clear"></div>
<main>
    <div class="main-left">
        <h1>プログラミングに役立つ掲示板</h1>
        <div class="post form">
            <h3>入力フォーム</h3>
            <form action="insert.php" method="post">
                <div>
                    <label>ハンドルネーム<br></label>
                    <input type="text" size="30" name="handlename">
                </div>
                <div>
                    <label>タイトル<br></label>
                    <input type="text" size="30" name="title">
                </div>
                <div>
                    <label>コメント<br></label>
                    <textarea rows="5" cols="50" name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="btn1" value="投稿する" >
                </div>                   
        </div>
<?php

while($row = $stmt->fetch()){
        echo "<div class='kiji'>";
            echo"<h3>".$row["title"]."</h3>";
            echo"<div class='contents'>";
                echo $row["comments"];
                echo"<div class='handlename'>posted by ".$row["handlename"]."</div>";
            echo"</div>";
        echo "</div>";
}
?>
    </div>
    <div class="main-right">
        <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>       
    </div>
</main>
<div class="clear"></div>

<footer>
    <p>copyright internous | 4each blog is the one which provides A to Z about programming.</p>
</footer>




</body>
</html>