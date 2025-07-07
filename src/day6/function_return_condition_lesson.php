<?php
// 📘 Day6 教材（function_return_condition_lesson.php）

// 🧠 【学習テーマ】関数の戻り値を条件式に使う

// ✅ 【1】関数から true / false を返す
// 例えば「20歳以上かどうか」を判定する関数を作ってみます。

function isAdult($age)
{
    return $age >= 20; // 20歳以上なら true、未満なら false
}

// ✅ 【2】関数の戻り値を if 文の条件として使う
// 関数の結果によって表示内容を分けます。

$age1 = 22;
if (isAdult($age1)) {
    echo "{$age1}歳：成人です<br>";
} else {
    echo "{$age1}歳：未成年です<br>";
}

$age2 = 17;
if (isAdult($age2)) {
    echo "{$age2}歳：成人です<br>";
} else {
    echo "{$age2}歳：未成年です<br>";
}

// ✅ 【3】関数の戻り値を変数に一度入れてから判定することもできます

$age3 = 30;
$result = isAdult($age3);
if ($result) {
    echo "{$age3}歳：成人です<br>";
} else {
    echo "{$age3}歳：未成年です<br>";
}

// 📝 【ポイントまとめ】
// ・関数の戻り値は true / false のような「論理値」もOK
// ・if 文で使うことで、処理を分岐させることができる
// ・処理を関数にまとめることで、コードの再利用性が高まる
