<?php
// 連想配列の定義
$item = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// 配列の内容をブラウザに出力
foreach ($item as $key => $value) {
  echo $key . "：" . $value . "<br>";
}

?>