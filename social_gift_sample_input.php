<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eGift（入力画面）</title>
</head>

<body>
  <form action="social_gift_sample_create.php" method="POST">
    <fieldset>
      <legend>eGift（入力画面）</legend>
      <a href="social_gift_sample_read.php">一覧画面</a>
      <div>
        messages: <input type="text" name="messages">
      </div>
      <div>
        names: <input type="text" name="names">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        price: 
        <input type="radio" name="price"> 1000
        <input type="radio" name="price"> 2000
        <input type="radio" name="price"> 3000
      </div>
      <div>
        unit:
         <select name= "unit">
          <option value = "1"> 1</option>
          <option value = "2"> 2</option>
          <option value = "3"> 3</option>
          <option value = "4"> 4</option>
          <option value = "5"> 5</option>
          <option value = "6"> 6</option>
          <option value = "7"> 7</option>
          <option value = "8"> 8</option>
          <option value = "9"> 9</option>
          <option value = "10"> 10</option>
</select>
      </div>
      <div>
        payment: <input type="text" name="payment">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>