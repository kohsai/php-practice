<?php
// 📘 Day6 教材（function_return_condition.php）
// ✅ 「関数の戻り値を使って、if文で条件分岐する」基本パターンを学びます。

// ✅ 【ステップ1】関数を定義（テストの点数から評価を返す）
function getGrade($score)
{
    if ($score >= 90) {
        return "S";
    } elseif ($score >= 80) {
        return "A";
    } elseif ($score >= 70) {
        return "B";
    } elseif ($score >= 60) {
        return "C";
    } elseif ($score >= 0) {
        return "D";
    } else {
        return "無効な点数";
    }
}

// ✅ 【ステップ2】関数の戻り値を使って条件分岐（評価に応じてコメント表示）
$studentScore = 85;
$grade = getGrade($studentScore);

// ✅ 評価に応じてコメントを出す
if ($grade === "S") {
    echo "素晴らしい成績ですね！<br>";
} elseif ($grade === "A" || $grade === "B") {
    echo "よく頑張りました！<br>";
} elseif ($grade === "C" || $grade === "D") {
    echo "次回はもっと上を目指しましょう。<br>";
} else {
    echo "点数の入力に誤りがあります。<br>";
}

// ✅ 成績評価も一緒に表示
echo "あなたの評価は {$grade} です。<br>";
