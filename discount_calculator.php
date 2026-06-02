<?php

// 変数の定義
$original_price = 5000;
$discount_rate = 0.2;

// 割引後の価格の計算
$discount_price = $original_price * (1 - $discount_rate);

// 計算結果の画面表示
echo "元の価格：" . $original_price . "円<br>";
echo "割引率：" . $discount_rate * 100 . "%<br>";
echo "<strong>割引後の価格：" . $discount_price . "円</strong><br>";