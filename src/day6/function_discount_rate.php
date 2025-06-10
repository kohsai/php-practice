<?php
// 📘 Day6 教材（function_discount_rate.php）

// 🧑‍🏫 【学習テーマ】
// 「割引率（%）」をもとに、商品の割引後の価格を計算する関数を学びます。
// 関数の引数には「元の価格」と「割引率（%）」を受け取り、
// 割引後の価格を return する処理を作成します。

// ✅ 【1】割引価格を計算する関数を定義
function calculateDiscountPrice($price, $discountRate)
{
    // 💡 割引率を小数に変換（例：20% → 0.2）
    $rate = $discountRate / 100;

    // 💡 割引後の価格を計算
    $discountedPrice = $price * (1 - $rate);

    // 💡 計算結果を四捨五入して返す（小数点以下を切り捨てたくない場合）
    return round($discountedPrice);
}

// ✅ 【2】関数を呼び出して結果を確認
$originalPrice = 1000;
$discount = 20; // 20%

$finalPrice = calculateDiscountPrice($originalPrice, $discount);

echo "元の価格：{$originalPrice}円<br>";
echo "割引率：{$discount}%<br>";
echo "割引後の価格：{$finalPrice}円<br>";

// 🔍 補足説明（初心者向け）
// function calculateDiscountPrice(...)
// → 「元の価格」と「割引率」を受け取り、計算して返す関数です。

// rate = $discountRate / 100
// → パーセンテージを 小数に変換（例：20% → 0.2）しています。

// round(...)
// → 計算結果を四捨五入しています（整数で表示したいため）。
