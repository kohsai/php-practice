<?php
// 🎯 Day6 練習問題（function_return_chain_practice.php）

// 📝 【問題】
// 3つの関数を用意し、それぞれの戻り値を順に使って処理を進める関数チェーンを作成してください。
// 最後にすべての処理をつないだ結果を表示しましょう。

// 【条件】
// ✅ 関数①：getBaseNumber → 5を返す
// ✅ 関数②：doubleNumber → 引数に受け取った数を2倍にして返す
// ✅ 関数③：addTen → 引数に受け取った数に10を加えて返す
// ✅ 上記3つの関数を順に使い、「5 → 10 → 20 → 表示」とつなげる
// ✅ 最終結果は「最終結果は 20 です」と表示する（<br> を使う）

// 【ヒント】
// 💡 関数の戻り値を、次の関数の引数として受け渡します。
// 💡 最後に `echo` で結果を表示します。


// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）

// 関数 getBaseNumber → 5を返す
// 関数 doubleNumber → 引数に受け取った数を2倍にして返す
// 関数 addTen → 引数に受け取った数に10を加えて返す
// 三つの関数を使い、最終結果を表示する


// ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）

// function getBaseNumber($number)
// {
//     return $number = 5;
// }

// function doubleNumber($number)
// {
//     return $number * 2;
// }

// function addTen($number)
// {
//     return $number + 10;
// }

// $result = (doubleNumber(5))+ addTen;

// echo "5 を2倍して10を足すと: {$result}になります。<br>";


// ここで行き詰まり採点と修正を行う。
//         ↓


// ❌ 修正が必要な部分
// 1. getBaseNumber に不要な引数がある

// function getBaseNumber($number)
// 問題文では「引数なしで5を返す」と指定されています。
// ✅ 正しくは function getBaseNumber() のように引数を取らない形にしましょう。


// 2. 関数呼び出しの構文が誤っている
// $result = (doubleNumber(5)) + addTen;
// これは addTen を関数として呼び出していない（カッコ () がない）ため、PHPが「addTenという定数？」と誤解しエラーになります。
// ✅ 正しくは addTen(引数) と 関数名 + 丸カッコ() で書く必要があります。

// 🔁 補足：処理の流れをわかりやすく分けると…
// $num = getBaseNumber();        // 5 を取得
// $double = doubleNumber($num); // 10 にする
// $result = addTen($double);    // 20 にする

// 修正後のコード
//     ↓
function getBaseNumber()
{
    return 5;
}

function doubleNumber($number)
{
    return $number * 2;
}

function addTen($number)
{
    return $number + 10;
}

$number = getBaseNumber();
$double = doubleNumber($number);
$result = addTen($double);

echo "最終結果は{$result}です。<br>";