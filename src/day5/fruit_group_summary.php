<?php
// 🎓 Day5 教材（fruit_group_summary.php）
//
// 🧠 配列の中から、「好きな果物」ごとにグループ分けして人数を集計する練習です。
// たとえば「りんごが好きな人は2人」「バナナが好きな人は1人」といった形で出力します。

echo "【好きな果物ごとの人数集計】<br><br>";

// ユーザー情報の配列を用意（名前と好きな果物）
$users = [
    ["name" => "さくら", "fruit" => "りんご"],
    ["name" => "たけし", "fruit" => "バナナ"],
    ["name" => "ゆうこ", "fruit" => "りんご"],
    ["name" => "けん", "fruit" => "みかん"],
    ["name" => "あい", "fruit" => "バナナ"],
    ["name" => "まさし", "fruit" => "ぶどう"]
];

// フルーツごとの人数を記録する連想配列を用意
$fruit_counts = [];

// ユーザーごとに処理
foreach ($users as $user) {
    $fruit = $user["fruit"];

    // すでにその果物が登場していれば+1、初めてなら1をセット
    if (isset($fruit_counts[$fruit])) {
        $fruit_counts[$fruit]++;
    } else {
        $fruit_counts[$fruit] = 1;
    }
}

// 集計結果を表示
foreach ($fruit_counts as $fruit => $count) {
    echo "{$fruit} が好きな人は {$count} 人です。<br>";
}


// ✅ 解説
// 🔸 isset() の活用

// if (isset($fruit_counts[$fruit])) { ... }
// この書き方で、「その果物がすでに集計済みかどうか」を判定しています。

// 🔸 グループ集計の基本構文

// $fruit_counts[$fruit] = 1; // 初回
// $fruit_counts[$fruit]++;   // 2回目以降
// このようにして、集計結果を連想配列に記録していくのが基本パターンです。

// 🧩 このあとにおすすめの練習問題
// この教材の考え方を応用した問題として：
// 「ある果物が好きな人の名前だけ表示」
// 「好きな果物が多い順に並べる」
// なども考えられます。