<?php
// POSTデータ確認
// var_dump($_POST);
// exit();
if(
  // ダメな条件
  !isset($_POST['messages']) || $_POST['messages'] === '' ||
  !isset($_POST['names']) || $_POST['names'] === '' ||
  !isset($_POST['deadline']) || $_POST['deadline'] === '' ||
  !isset($_POST['price']) || $_POST['price'] === '' ||
  !isset($_POST['unit']) || $_POST['unit'] === '' ||
  !isset($_POST['payment']) || $_POST['payment'] === '' 
) {
  exit('ParamError');
}

$messages = $_POST['messages'];
$names = $_POST['names'];
$deadline = $_POST['deadline'];
$price = $_POST['price'];
$unit = $_POST['unit'];
$payment = $_POST['payment'];

// 各種項目設定
$dbn ='mysql:dbname=gs_d13_23_kadai;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行
$sql = 'INSERT INTO 0622social_gift_sample (id, messages, names, deadline, price, unit, payment, created_at, updated_at) VALUES (NULL, :messages, :names, :deadline, :price, :unit, :payment, now(), now())';
$stmt = $pdo->prepare($sql);

// 【重要】バインド変数を設定
$stmt->bindValue(':messages', $messages, PDO::PARAM_STR);
$stmt->bindValue(':names', $names, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':unit', $unit, PDO::PARAM_STR);
$stmt->bindValue(':payment', $payment, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

// 入力画面に戻る　QL実行の処理

header('Location:todo_input.php');
exit();

