<?php

// 変数の定義
$rand_age = rand(15 , 70);
$rand_is_member = (bool)rand(0 , 1);
$rand_is_student = (bool)rand(0 , 1);

// ランダムで設定された年齢を表示
echo "年齢：" . $rand_age . "歳<br>";


// ランダムで設定された会員情報を表示
if ($rand_is_member == 0) {
    echo "会員ではありません。<br>";
} else {
    echo "会員です。<br>";
}

// ランダムで設定された学生情報を表示
if ($rand_is_student == 0) {
    echo "学生ではありません。<br>";
} else {
    echo "学生です。<br>";
}


// 表示画面の定義
if ($rand_age >= 18 && $rand_is_member) {
    echo "割引が適用されます。<br>";
} else {
    echo "割引は適用されません。<br>";
}

if ($rand_age >= 65 || $rand_is_student) {
    echo "シニア・学生割引が適用されます。<br>";
} else {
    echo "シニア・学生割引が適用されません。<br>";
}