<?php
// 生徒の点数を配列で管理
$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 合計点の計算
$total = array_sum($scores);

// 平均点の計算
$average = $total / count($scores);

// ブラウザに出力
echo $average;
?>