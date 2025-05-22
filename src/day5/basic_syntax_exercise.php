<?php
// 🎯 Day5 練習問題（basic_syntax_exercise.php）

//
// 📝 【問題】
// 以下の指示に従って、変数、if文、for文、foreach文などの「基本構文」を組み合わせたプログラムを作成してください。
//
// 🧪 【想定シナリオ】
// あなたは、3人のユーザーが登録した「好きなフルーツの情報」をまとめて表示するプログラムを作成します。
// 配列を使って各ユーザーの名前とフルーツを管理し、ループと条件分岐で表示内容を調整してください。
//
// 【条件】
// ✅ 1. 各ユーザーの情報は「連想配列の配列」として以下のように定義する：
// $users = [
//     ["name" => "Taro", "fruit" => "りんご"],
//     ["name" => "Hanako", "fruit" => "バナナ"],
//     ["name" => "Kenta", "fruit" => "みかん"]
// ];
//
// ✅ 2. foreach文で1人ずつ取り出し、「○○さんの好きなフルーツは△△です。」という形式で表示する（改行には <br>）
//
// ✅ 3. もしフルーツが「バナナ」だった場合は、「（人気No.1）」という補足を表示する
//
// ✅ 出力例：
// Taroさんの好きなフルーツはりんごです。<br>
// Hanakoさんの好きなフルーツはバナナです。（人気No.1）<br>
// Kentaさんの好きなフルーツはみかんです。<br>
//
// 【ヒント】
// 💡 foreachでループ → if文で条件チェック → echoで出力
// 💡 「〇〇です。（人気No.1）」のように、条件付きで文字列を追加できます

// -------------------------------------------------------------

// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）

// ・最初に連想配列を定義する。name と fruitの組み合わせで１セット。
// ・ foreach文で1人ずつ取り出し、「○○さんの好きなフルーツは△△です。」という形式で表示する（改行には < br > ）。
// ・ifでもし、fruit ＝ バナナの処理が来た場合、（人気No.1）を表示する。


// ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）


// 自分で書いたコード
//         ↓

// $users = [
//     ["name" => "Taro", "fruit" => "りんご"],
//     ["name" => "Hanako", "fruit" => "バナナ"],
//     ["name" => "Kenta", "fruit" => "みかん"]
// ];

// foreach ($users as $user) {
//     if ($fruit = "バナナ") {
//         echo "{$name}さんの好きなフルーツは{$fruit}です。（人気No.1）<br>";
//     } else {
//         echo "{$name}さんの好きなフルーツは{$fruit}です。<br>";
//     }
// }


// 以下のようにブラウザに表示された。
        // ↓

        // Warning: Undefined variable $name in /var/www/html/day5/basic_syntax_exercise.php on line 54
// さんの好きなフルーツはバナナです。（人気No.1）

// Warning: Undefined variable $name in /var/www/html/day5/basic_syntax_exercise.php on line 54
// さんの好きなフルーツはバナナです。（人気No.1）

// Warning: Undefined variable $name in /var/www/html/day5/basic_syntax_exercise.php on line 54
// さんの好きなフルーツはバナナです。（人気No.1）

// ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー


// 採点と修正案：
// ❗️ポイント ⓵：変数$fruitや$nameが未定義のまま使われている

// foreach ($users as $user) {
// ここで $user['name'], $user['fruit'] を変数に代入していない
// }

// ➡ 解決方法：
// $name = $user['name'];
// $fruit = $user['fruit'];


// ❗️ポイント ⓶：= と == の違い（比較ではなく代入になっている）

// if ($fruit = "バナナ") {   // ← これは「代入」であり、「比較」ではありません
// ➡ 正しくは：
// if ($fruit == "バナナ")   // 値が等しいかどうかを比較する



// 以上を踏まえて修正すると以下のようになる。
//             ↓


// ユーザーの情報（連想配列の配列）
$users = [
    ["name" => "Taro", "fruit" => "りんご"],
    ["name" => "Hanako", "fruit" => "バナナ"],
    ["name" => "Kenta", "fruit" => "みかん"]
];

// 1人ずつ取り出す
foreach ($users as $user) {
    $name = $user['name'];     // 名前を取り出す
    $fruit = $user['fruit'];   // フルーツを取り出す

    // フルーツが「バナナ」かどうか判定
    if ($fruit == "バナナ") {
        echo "{$name}さんの好きなフルーツは{$fruit}です。（人気No.1）<br>";
    } else {
        echo "{$name}さんの好きなフルーツは{$fruit}です。<br>";
    }
}
