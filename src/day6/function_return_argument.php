<?php
// 📘 Day6 教材（function_return_argument.php）

// 🧠【学習ポイント】
// - 関数に「引数」を渡す
// - 引数を使って処理を行い、「戻り値（return）」で結果を返す
// - 呼び出し側で戻り値を受け取って表示する

// ✅ 例：数値を2倍にして返す関数

// 関数を定義（引数 $num を受け取り、2倍にして返す）
function doubleNumber($num)
{
    $result = $num * 2; // 数値を2倍にする
    return $result;     // 結果を呼び出し元に返す
}

// ✅ 戻り値を受け取って表示

$value1 = doubleNumber(5);  // 5の2倍 → 10
echo "5 を2倍にすると {$value1} です。<br>";

$value2 = doubleNumber(12); // 12の2倍 → 24
echo "12 を2倍にすると {$value2} です。<br>";


// 項目	                内容
// function doubleNumber($num)	関数の定義。引数 $num を受け取る。
// $result = $num * 2;	引数の数値を2倍にする処理。
// return $result;	計算結果を呼び出し元に返す。
// $value1 = doubleNumber(5);	関数を呼び出し、戻り値を変数に代入。
// echo 文	    戻り値を使って画面に表示（<br> を使用）。