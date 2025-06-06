<?php
// 🎓 Day5 教材（loop_record_summary.php）

// 🧠 今回のテーマ：ループ内での「記録」と、ループ外での「集計・判定」

// 🔰 よくあるパターン：
// 1. ループの中で「特定の条件を満たすデータ」を記録しておく（例：配列に追加、カウントするなど）
// 2. ループが終わったあと、記録したデータを使って「集計・表示・判定」を行う

// --- 例題：好きな果物が「バナナ」の人をリストアップし、最後に合計人数を表示する ---

echo "【🍌バナナが好きな人の一覧と人数を表示】<br><br>";

// データ（ユーザーとその好きな果物のリスト）
$users = [
    ["name" => "KOH", "fruit" => "バナナ"],
    ["name" => "Yuki", "fruit" => "りんご"],
    ["name" => "Taro", "fruit" => "バナナ"],
    ["name" => "Hana", "fruit" => "みかん"],
    ["name" => "Ken",  "fruit" => "バナナ"],
];

// バナナが好きな人の名前を記録する配列
$banana_lovers = [];

// ✅ ループ内：バナナ好きの人だけ記録する
foreach ($users as $user) {
    if ($user["fruit"] === "バナナ") {
        // 名前を記録
        $banana_lovers[] = $user["name"];
    }
}

// ✅ ループ外：記録した情報を表示・集計
foreach ($banana_lovers as $name) {
    echo "・{$name} さんはバナナが好きです<br>";
}

// 合計人数を表示
echo "<br>🍌 バナナ好きの人数： " . count($banana_lovers) . " 人です<br>";


// 🔍 解説ポイント
// 処理場所	内容
// 🔁 ループ内	条件を満たす要素を見つけて $banana_lovers[] に記録
// 📊 ループ後	記録されたデータを使って「名前の一覧表示」＋「合計人数の計算」

// ✅ 今後の学習に活かすキーワード
// ループ内記録：配列に追加・カウント・フラグ処理など

// ループ後判断：集計・判定・表示まとめ

// 分離設計：処理の流れを「入力 → 処理 → 出力」で分けて考える

