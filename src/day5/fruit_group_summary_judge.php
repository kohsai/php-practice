<?php
// 📘 教材（fruit_group_summary_judge.php）
// 🧠 好きな果物ごとの人数を集計し、その人数に応じて表示内容を変える処理
// 📝 for・foreach・if、配列の応用まとめ

echo "【果物ごとの人気度を判定】<br><br>";

// ユーザーの情報（名前と好きな果物）
$users = [
    ['name' => 'たけし', 'fruit' => 'りんご'],
    ['name' => 'ゆうこ', 'fruit' => 'バナナ'],
    ['name' => 'まさし', 'fruit' => 'みかん'],
    ['name' => 'けん', 'fruit' => 'りんご'],
    ['name' => 'さくら', 'fruit' => 'バナナ'],
    ['name' => 'みか', 'fruit' => 'バナナ'],
    ['name' => 'あい', 'fruit' => 'りんご'],
    ['name' => 'りょう', 'fruit' => 'みかん'],
    ['name' => 'しおり', 'fruit' => 'バナナ'],
];

// 果物ごとの人数をカウントする配列
$fruit_counts = [];

foreach ($users as $user) {
    $fruit = $user['fruit'];

    // 果物ごとの人数を集計
    if (!isset($fruit_counts[$fruit])) {
        $fruit_counts[$fruit] = 1;
    } else {
        $fruit_counts[$fruit]++;
    }
}

// 結果を表示（人数に応じてメッセージを分岐）
foreach ($fruit_counts as $fruit => $count) {
    echo "{$fruit} が好きな人は {$count} 人です。<br>";

    if ($count >= 4) {
        echo "→ とても人気があります！<br><br>";
    } elseif ($count >= 2) {
        echo "→ そこそこ人気があります。<br><br>";
    } else {
        echo "→ あまり人気がないようです。<br><br>";
    }
}

// ✅ この教材で確認できること
// | 構文               | 内容                      |
// | ---------- -       | ----------------------- |
// | `foreach`          | ユーザー情報を1件ずつ処理           |
// | 連想配列のキー操作  | `$fruit_counts[$fruit]` |
// | `if` の条件分岐    | 人数によって異なるメッセージを表示       |
// | `isset()`関数      | 初期値の設定チェックに活用           |
