<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>

<body>
  <?php
  $onion_infomation = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

  foreach($onion_infomation as $key => $value) {
    echo "{$key} : {$value}  <br>";
  }
  ?>
</body>

</html>
