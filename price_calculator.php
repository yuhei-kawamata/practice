<?php

// 変数の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 計算処理
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

// 計算結果の画面表示
echo '<p>商品名：' . $product_name . '</p>';
echo '<p>単価：' . $price . '円</p>';
echo '<p>数量：' . $quantity . '個</p>';
echo '<p>小計：' . $subtotal . '円</P>';
echo '<p>消費税(' . $tax_rate * 100 . '%)：' . $tax_amount . '円</p>';
echo '<p>合計金額：' . $total . '円</p>';
