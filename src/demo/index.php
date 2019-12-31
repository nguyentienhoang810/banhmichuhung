<?php

echo 'WELCOME TO DOCKER' . '<br/>';

$conn = NULL;
$dsn = 'mysql:dbname=db_banhang_docker;host=mysqlcontainer';
$user = 'root';
$password = 'root';
try {
    $conn = new PDO($dsn, $user, $password);
    echo "DB接続成功\n" . '<br/>';
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n" . '<br/>';
    exit();
}

$sql = 'SELECT * FROM users';
foreach ($conn->query($sql) as $row) {
    echo $row['full_name'] . '<br/>';
    echo $row['email'] . '<br/>';
    echo '<br/>';
}