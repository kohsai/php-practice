<?php
// 📘 Day5 教材：変数と echo の復習（variable_echo_review.php）

// 🧠 目的：PHPの「変数の基本」と「echo文での表示」の復習
// ✅ 変数の定義・代入
// ✅ echoでの文字列と変数の出力
// ✅ 文字列の連結（.）と中かっこ {} の使い方

echo "【変数とechoの復習】<br><br>";

// 🔸 変数に値を代入して表示
$name = "KOH";
$age = 28;

echo "名前: $name<br>";
echo "年齢: $age<br><br>";

// 🔸 文字列と変数の連結（ドット演算子）
$fruit = "りんご";
echo "好きな果物は " . $fruit . " です。<br><br>";

// 🔸 中かっこを使った変数の展開（読みやすくする方法）
$drink = "コーヒー";
echo "朝は {$drink} を飲みます。<br><br>";

// 🔸 計算結果を変数に入れて表示
$price = 120;
$quantity = 3;
$total = $price * $quantity;

echo "単価: {$price}円 × 数量: {$quantity}個 → 合計: {$total}円<br>";
