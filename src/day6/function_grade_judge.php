<?php
// 🎯 Day6 練習問題（function_grade_judge.php）

// 📝 【問題】
// テストの点数を渡すと、評価（S/A/B/C/D）を返す関数を作成してください。

// 【条件】
// ✅ 関数名は `judgeGrade` とする
// ✅ 引数に「点数（整数）」を1つ受け取る
// ✅ 以下のルールに従って評価（文字列）を return する
//    - 90点以上 → 評価: S
//    - 80〜89点 → 評価: A
//    - 70〜79点 → 評価: B
//    - 60〜69点 → 評価: C
//    - 0〜59点 → 評価: D
//    - 0未満または100を超える場合 → 評価: エラー
// ✅ 3つの異なる点数で関数を呼び出し、結果をそれぞれ echo で表示する（<br>付き）
// ✅ 出力形式：例「点数: 85 → 評価: A」

// 【ヒント】
// 💡 戻り値（return）を使って評価を返しましょう
// 💡 呼び出し側では、戻り値を受け取って表示します

// 1️⃣ ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）

//  関数 judgeGrade を定義する。
//  引数に「点数」を一つ受け取る
//  点数ごとに評価をリターンする。
//  ３つの異なる点数で関数を呼び出し結果を表示する。


// 2️⃣ ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）

// function judgeGrade($score)
// {

// }
// if ($score < 0 || $score > 100) {
//     echo "評価: エラー<br>";
// } elseif ($score  >= 90) {
//     echo "評価: S<br>";
// } elseif ($score >= 80) {
//     echo "評価: A<br>";
// } elseif ($score  >= 70) {
//     echo "評価: B<br>";
// } elseif ($score >= 60) {
//     echo "評価: C<br>";
// } else {
//     echo "評価: D<br>";
// }


// ここで行き詰まり採点を求める。
// 以下は提示されたヒントと考え方。

//           ↓

// 全体の考え方はほぼ合っています。
// 関数の中に判定ロジックを入れる必要がある点と、
// 関数の戻り値を return で返し、呼び出し元で echo を使って表示する点が少しずれているだけです。

// ✅【1】関数の中に「判定処理」を書きましょう

// 今のコードでは、judgeGrade($score) の中が空で、
// 判定ロジックが関数の外に書かれてしまっています。
// 👉 本来は、以下のように「関数の中に判定を書く」必要があります。

// function judgeGrade($score) {
//     if ($score < 0 || $score > 100) {
//         return "エラー";
//     } elseif ($score >= 90) {
//         return "S";
//     } elseif ($score >= 80) {
//         return "A";
//     } elseif ($score >= 70) {
//         return "B";
//     } elseif ($score >= 60) {
//         return "C";
//     } else {
//         return "D";
//     }
// }

// ✅【2】呼び出し側では「戻り値を受け取って表示」
// たとえば、85点を評価するには：

// $score1 = 85;
// $grade1 = judgeGrade($score1);
// echo "点数: {$score1} → 評価: {$grade1}<br>";

// これで、評価が関数の中で決まり、表示は呼び出し元で行えます。


// ✅【3】練習として、3つの点数で試してみましょう
// 95 → 評価S
// 72 → 評価B
// 108 → エラー

// ✅ まとめ
//      修正ポイント	            内容
// 🔧 判定処理の場所	関数 judgeGrade() の中に入れる
// 🔧 出力の場所	    呼び出し元で echo を使って表示

// 🎯 目的	関数の「引数」「return」「呼び出しと表示の分離」に慣れること

// 以下で修正に入る。
// ↓
function judgeGrade($score)
{
    if ($score < 0 || $score > 100) {
        return "エラー";
    } elseif ($score  >= 90) {
        return "S";
    } elseif ($score >= 80) {
        return "A";
    } elseif ($score  >= 70) {
        return "B";
    } elseif ($score >= 60) {
        return "C";
    } else {
        return "D";
    }
}

$score1 = 95;
$grade1 = judgeGrade($score1);
echo "点数: {$score1} → 評価: {$grade1}<br>";

$score2 = 72;
$grade2 = judgeGrade($score2);
echo "点数: {$score2} → 評価: {$grade2}<br>";

$score3 = 108;
$grade3 = judgeGrade($score3);
echo "点数: {$score3} → 評価: {$grade3}<br>";

// ✅【2】呼び出し側では「戻り値を受け取って表示」
// たとえば、85点を評価するには：

// $score1 = 85;
// $grade1 = judgeGrade($score1);
// echo "点数: {$score1} → 評価: {$grade1}<br>";

// これで、評価が関数の中で決まり、表示は呼び出し元で行えます。
// ✅【3】練習として、3つの点数で試してみましょう
// 95 → 評価S
// 72 → 評価B
// 108 → エラー