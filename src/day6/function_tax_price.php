<?php
// 📘 Day6 教材：function_tax_price.php

// 📝 【テーマ】
// 関数を使って「税込価格」を計算する方法を学びます。
// 商品の価格（税抜き）を引数で受け取り、「税込価格（10%）」を戻り値として返す関数を作成します。

// ✅ 関数名は `calculateTaxPrice` とします
// ✅ 引数は「税抜価格（整数）」を1つ受け取ります
// ✅ 税込価格の計算式は「税抜価格 × 1.1（＝10%の消費税を加える）」です
// ✅ 戻り値として税込価格（整数に丸める）を返します
// ✅ 呼び出し元では、税込価格を「税込価格は ○○ 円です」と画面に表示します（<br> を使う）

// --- 関数定義 ---
function calculateTaxPrice($price)
{
    // 税込価格を計算（1.1倍して、四捨五入）
    $taxPrice = round($price * 1.1);
    return $taxPrice;
}

// --- 呼び出し例（確認） ---
$price1 = 1000;
$result1 = calculateTaxPrice($price1);
echo "税込価格は {$result1} 円です<br>";

$price2 = 2780;
$result2 = calculateTaxPrice($price2);
echo "税込価格は {$result2} 円です<br>";

// 🔍 補足説明
// round() 関数で小数点を四捨五入し、整数にしています（消費税計算でよく使われます）。

// 関数の設計において「入力 → 処理 → 出力（戻り値）」の流れを意識してください。

