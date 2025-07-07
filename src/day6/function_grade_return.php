<?php
// 📘 Day6 教材（function_grade_return.php）

// 🧠 【学習ポイント】
// 関数で「点数（整数）」を受け取り、対応する評価（S〜D）を return で返します。
// 呼び出し元で return 値を受け取り、画面に表示することで「戻り値の使い方」を練習します。

// ✅ 評価ルール
// ・90点以上 → S
// ・80〜89点 → A
// ・70〜79点 → B
// ・60〜69点 → C
// ・59点以下 → D
// ・0未満や100超えは「無効な点数」として扱う

// ✅ 【関数定義】点数を評価に変換する関数
function judgeGrade($score)
{
    if ($score < 0 || $score > 100) {
        return "無効な点数";
    } elseif ($score >= 90) {
        return "S";
    } elseif ($score >= 80) {
        return "A";
    } elseif ($score >= 70) {
        return "B";
    } elseif ($score >= 60) {
        return "C";
    } else {
        return "D";
    }
}

// ✅ 【使用例1】return値を受け取って表示する
$score1 = 85;
$grade1 = judgeGrade($score1);
echo "{$score1}点の評価は: {$grade1}です。<br>";

// ✅ 【使用例2】別の点数で試す
$score2 = 58;
$grade2 = judgeGrade($score2);
echo "{$score2}点の評価は: {$grade2}です。<br>";

// ✅ 【使用例3】異常値の確認
$score3 = 110;
$grade3 = judgeGrade($score3);
echo "{$score3}点の評価は: {$grade3}です。<br>";


// 解説（PHPコメントに加えて口頭説明）
// return を使うと、処理の結果を呼び出し元に「渡す」ことができます。

// echo ではすぐに画面表示されますが、return はデータの「受け渡し専用」なので、あとで表示したり、別の処理に使ったりできる点がポイントです。

// 条件分岐（if ~ elseif ~ else）と組み合わせることで、より実践的な関数が作れます。

