<?php

// 任意の数字の定義（ランダムな数値）
$number = rand();

// 判定プログラム
if ($number % 2 ===0) {
    echo "$number は偶数です。";
} else {
    echo "$number は奇数です。";
}