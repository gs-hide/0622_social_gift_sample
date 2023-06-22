<?php

// DB接続
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

$sql = 'SELECT * FROM 0622social_gift_sample';
$stmt = $pdo->prepare($sql);

// 【重要】バインド変数を設定（今回は不要だぁー）
// $stmt->bindValue(':todo', $todo, PDO::PARAM_STR);
// $stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($result);
// echo '<pre>';
// exit();
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["deadline"]}</td>
      <td>{$record["messages"]}</td>
      <td>{$record["names"]}</td>
      <td>{$record["price"]}</td>
      <td>{$record["unit"]}</td>
      <td>{$record["payment"]}</td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eGift（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>eGift（一覧画面）</legend>
    <a href="social_gift_sample_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>deadline</th>
          <th>messages</th>
          <th>names</th>
          <th>price</th>
          <th>unit</th>
          <th>payment</th>
        </tr>
      </thead>

      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
           <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>