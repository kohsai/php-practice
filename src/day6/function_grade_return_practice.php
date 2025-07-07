<?php
// 🎯 Day6 練習問題（function_grade_return_practice.php）

// 📝 【問題】
// テストの点数を引数に受け取り、評価（S/A/B/C/D または「無効な点数」）を return する関数を作成してください。
// 呼び出し元でその戻り値を受け取り、画面に表示しましょう。

// 【条件】
// ✅ 関数名は judgeGrade とする
// ✅ 引数に 0〜100 の整数を受け取る（範囲外の値にも対応）
// ✅ 以下のルールに従って、評価（文字列）を return する
//    - 90点以上 → 評価: S
//    - 80〜89点 → 評価: A
//    - 70〜79点 → 評価: B
//    - 60〜69点 → 評価: C
//    - 59点以下 → 評価: D
//    - 0未満または100を超える場合 → 評価: 無効な点数
// ✅ 関数を3回呼び出して、異なる点数を渡して結果を表示する
// ✅ 表示形式：「○○点の評価は ○○ です。」（<br> を使う）

// 【ヒント】
// 💡 return を使って「文字列としての評価」を返す
// 💡 if ～ elseif ～ else を使って条件分岐を行う

// ------------------------------------------------------------

// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。

// （ここに自分で日本語の処理文を書いてください）
//  関数 judgeGrade を定義する
//  引数に0～100の整数を受け取る
//  ルールに従って評価（文字列）をreturnする
//  関数を三回呼び出し結果を表示する

// ✅ その下に『自分でPHPコード』を書いてください。

// （ここに自分でPHPコードを書いてください）
function judgeGrade($score)
{
    if ($score < 0 || $score > 100) {
        return "無効な点数";
    } elseif ($score >=90) {
        return "評価: S";
    } elseif ($score >= 80) {
        return "評価: A";
    } elseif ($score >= 70) {
        return "評価: B";
    } elseif ($score >= 60) {
        return "評価: C";
    } else {
        return "評価: D";
    }
}

$score1 = 84;
$grade1 = judgeGrade($score1);
echo "{$score1}点の評価は: {$grade1}です。<br>";

$score2 = 58;
$grade2 = judgeGrade($score2);
echo "{$score2}点の評価は: {$grade2}です。<br>";

$score3 = 75;
$grade3 = judgeGrade($score3);
echo "{$score3}点の評価は: {$grade3}です。<br>";
