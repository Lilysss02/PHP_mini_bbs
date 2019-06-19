<?php
// 例外処理
try {
    // DBへの接続
    $db = new PDO('mysql:dbname=mini_bbs;host=localhost;charset=utf8', 'root', 'root');
} catch(PDOException $e) {
    print('DB接続エラー：' . $e->getMessage());
}