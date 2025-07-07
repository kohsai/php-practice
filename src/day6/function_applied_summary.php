<?php
// 📘 Day6 応用まとめ教材（function_applied_summary.php）

// ----------------------------------------------
// 🧠 テーマ：関数を組み合わせて処理を整理する（応用）
// ----------------------------------------------
// ・複数の関数を定義し、それぞれの役割を明確に分ける
// ・引数や戻り値を使って関数間で情報を受け渡す
// ・呼び出し元で必要な情報を組み合わせて表示する

// ✅ 例題：税抜価格から税込価格を求め、さらに割引後の価格も計算し、最終的な価格を表示する

// 🧮 税込価格を計算する関数
function calculateTaxPrice($price)
{
    $taxPrice = round($price * 1.1); // 税率10%、四捨五入
    return $taxPrice;
}

// 🧮 割引後の価格を計算する関数
function calculateDiscountPrice($price, $discountRate)
{
    $discountedPrice = round($price * (1 - $discountRate / 100));
    return $discountedPrice;
}

// 📄 表示用の関数
function displayFinalPrice($name, $originalPrice, $discountRate)
{
    $taxIncluded = calculateTaxPrice($originalPrice); // 税込価格を計算
    $finalPrice = calculateDiscountPrice($taxIncluded, $discountRate); // 割引後の価格を計算

    echo "{$name} の最終価格は {$finalPrice} 円です。<br>";
}

// ✅ 呼び出し例
displayFinalPrice("Tシャツ", 3000, 10);
displayFinalPrice("パーカー", 5000, 20);
displayFinalPrice("ジャケット", 10000, 30);

// 🔍 解説（すべてPHPコメントにも記載済み）：
// calculateTaxPrice関数：税抜価格を受け取り、10%の税込価格を四捨五入して返す

// calculateDiscountPrice関数：価格と割引率から、割引後の価格を計算して返す

// displayFinalPrice関数：商品名・価格・割引率を受け取り、関数を組み合わせて処理し、表示する

// この教材で学ぶべきポイント：
// 項目と内容

// 関数の分割・・「税計算」「割引計算」「表示処理」を関数ごとに整理

// 戻り値・・	return を使って、結果を次の処理に渡す

// 再利用・・同じ関数を複数商品で再利用できる