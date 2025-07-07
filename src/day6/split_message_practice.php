<?php
// 🎯 Day6 練習問題（split_message_practice.php）

// 📝 【問題】
// メッセージの文字列を「空白（スペース）」で分割して、1語ずつ表示する関数を作成してください。

// 【条件】
// ✅ 関数名は `splitMessage` とする
// ✅ 引数に「1つの文字列（メッセージ）」を受け取る
// ✅ 文字列を空白（スペース）で分割して配列にする（explode関数を使う）
// ✅ 分割された各単語を1行ずつ `<br>` を使って表示する
// ✅ 関数を1回呼び出し、任意のメッセージを渡して動作確認すること

// 【ヒント】
// 💡 文字列を分割するには `explode(" ", $message)` を使います
// 💡 foreach 文で1つずつ取り出して表示しましょう

// ----------------------------

// 1️⃣ ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）
//  関数名 splitMessage を定義する。
//  引数に「一つの文字列」を受け取る。
//  文字列を空白（スペース）で分割し配列にする。
//  分割された単語はひとつずつ<br>を使って表示する。


// 2️⃣ ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）
// function splitMessage($message)
// {
//    // 文字列をスペースで分割
//     $message = explode(" ", $message);

//     // 分割された単語を一つずつ表示
//     foreach ($message as $message) {
//         echo "単語：{$message}<br>";
//     }
// }

// // 呼び出し例：
// $message1 = "今日の 天気は 曇りです";
// splitMessage($message1);

// $message2 = "洗濯物が 乾きません";
// splitMessage($message2);


// ここで採点。修正案を提示される。
//             ↓
// 🔍 改善アドバイス（重要ポイント）

// foreach ($message as $message) {
// このように外側の変数と同じ名前でループ変数を使うのは避けた方が安全です。

// 以下のように名前を変えるのがベストです：
// foreach ($message as $word) {
//     echo "単語：{$word}<br>";
// }
// 💡この変更により、可読性と保守性が向上します！

// 修正後のコード全体
//        ↓
function splitMessage($message)
{
    // 文字列をスペースで分割
    $message = explode(" ", $message);

    // 分割された単語を一つずつ表示
    foreach ($message as $word) {
        echo "単語：{$word}<br>";
    }
}

// 呼び出し例：
$message1 = "今日の 天気は 曇りです";
splitMessage($message1);

$message2 = "洗濯物が 乾きません";
splitMessage($message2);
