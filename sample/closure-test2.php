<?php
// 無名関数（クロージャー）
// 配列を定義
$prices = array( 3000, 2200, 100, 810, 900 );
// すべての要素に1.08をかける
$result = array_map(function($v) {
  return floor($v * 1.08);
}, $prices);
// 結果を表示
echo implode(", ", $result)."\n";
// 結界→ 3240, 2376, 874, 972
 ?>
