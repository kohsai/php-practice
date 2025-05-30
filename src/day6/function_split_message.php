<?php
// 📘 Day6 教材：関数と explode（function_split_message.php）

// 📝 【目的】
// 文字列を特定の区切り文字で分割する関数 `explode()` の使い方を学びます。
// 関数に文字列を渡して、「単語ごとに分割して表示」する例です。

// ✅ 関数名：splitMessage
// ✅ 引数として1つの文字列を受け取る（例："おはよう こんにちは こんばんは"）
// ✅ 単語をスペース（" "）で分割する（explode使用）
// ✅ 分割された単語を1つずつ出力する（<br>で改行）

// ✅ 文字列を分割するための explode 関数の基本構文：
/*
    explode("区切り文字", 対象の文字列)
    → 例：explode(" ", "A B C") は ["A", "B", "C"] という配列を返す
*/

// ✅ 関数の定義
function splitMessage($text)
{
    // 文字列をスペースで分割
    $words = explode(" ", $text);

    // 分割された単語を1つずつ表示
    foreach ($words as $word) {
        echo "単語：{$word}<br>";
    }
}

// ✅ 関数の呼び出し例
$message1 = "おはよう こんにちは こんばんは";
splitMessage($message1);

// 呼び出しを追加して練習してもOK
$message2 = "PHPは 楽しくて 学びがいがあります";
splitMessage($message2);
