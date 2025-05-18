<?php
// 🎯 Day5 練習問題（loop_condition_record.php）
//
// 📝 【問題】
// 複数のユーザー情報から「好きな果物」が「りんご」の人の名前を配列に記録してください。
// 表示は不要です。条件に合う人を記録するところまでがゴールです。
//
// 【条件】
// ✅ `$users` に複数人の「名前」と「好きな果物」の情報を持つ連想配列を用意
// ✅ foreach 文で1人ずつ取り出す
// ✅ 「好きな果物」が「りんご」の人だけ、名前を記録用の配列に追加
// ✅ 表示は行わず、最終的に `$apple_lovers` に正しく記録されていればOK
//
// 【ヒント】
// 💡 空の配列 `$apple_lovers = [];` を用意しておき、条件に合う人だけ `[]` で追加しましょう
// 💡 `$apple_lovers[] = $user["name"];` のような記述になります
//

// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）

// $usersに複数人の名前と好きな果物の情報を連想配列で用意する。
// 空の配列 `$apple_lovers = [];` を用意しておき、条件に合う人だけ `[]` で追加
// `$apple_lovers[] = $user["name"];`

// foreachで１人ずつ取り出す。
// 好きな果物が「りんご」の人だけ、名前を記録用の配列に記録。


// ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）

$users = [
    ["name" => "KOH", "fruit" => "バナナ"],
    ["name" => "Yuki", "fruit" => "りんご"],
    ["name" => "Taro", "fruit" => "バナナ"],
    ["name" => "Hana", "fruit" => "みかん"],
    ["name" => "Ken",  "fruit" => "バナナ"],
];

$apple_lovers = [];

foreach ($users as $user) {
    if ($user ["fruit"] === "りんご") {
        $apple_lovers[] = $user["name"];
    }
}

var_dump($apple_lovers);

echo "<br><br> りんごが好きな人の一覧:<br>";
foreach ($apple_lovers as $name) {
    echo ("{$name}さん<br>");
}
