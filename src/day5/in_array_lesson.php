<?php
// 🎓 Day5 補足教材（in_array_lesson.php）
//
// 🧠 【テーマ】：in_array()関数の使い方
// in_array() は「指定した値が配列に含まれているか」を調べる関数です。
// 含まれていれば true、含まれていなければ false を返します。

echo "【in_array()の基本例】<br>";

// 配列を用意
$fruits = ["りんご", "バナナ", "みかん"];

// 「バナナ」が含まれているかをチェック
if (in_array("バナナ", $fruits)) {
    echo "バナナはリストに含まれています。<br>";
} else {
    echo "バナナはリストに含まれていません。<br>";
}

// 「ぶどう」が含まれているかをチェック
if (in_array("ぶどう", $fruits)) {
    echo "ぶどうはリストに含まれています。<br>";
} else {
    echo "ぶどうはリストに含まれていません。<br>";
}

echo "<br>【ポイント解説】<br>";
echo "・配列に特定の値があるかを調べたいときに使います。<br>";
echo "・in_array(検索する値, 配列) の形式です。<br>";
echo "・戻り値は true または false です（if文で判定できます）。<br>";
