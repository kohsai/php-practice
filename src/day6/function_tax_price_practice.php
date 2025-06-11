<?php
// 🎯 Day6 練習問題（function_tax_price_practice.php）

// 📝 【問題】
// 商品の価格（税込前）を引数で受け取り、税込価格（10%）を計算して return する関数を作成してください。
// 呼び出し元では、税込価格を画面に表示してください。

// 【条件】
// ✅ 関数名は `calculateTaxPrice` とする
// ✅ 引数に「税抜価格（整数）」を1つ受け取る
// ✅ 税込価格は「税抜価格 × 1.1」で計算し、四捨五入して return する（round関数）
// ✅ 戻り値を使って、「税込価格は ○○ 円です」と表示する（<br> を使う）
// ✅ 関数を2回以上呼び出して、異なる価格で確認する

// 【ヒント】
// 💡 小数点以下を四捨五入して整数にするには `round()` を使います
// 💡 戻り値を受け取って echo しましょう

// ✅ 一歩目の例（関数の定義の冒頭）：
// function calculateTaxPrice($price)
// {
//     // 税込価格を計算して return する
// }

// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）
// 関数名は calculateTaxPrice と定義する
// 引数に「税抜価格（整数）」を1つ受け取る
// 税込価格は「税抜価格 × 1.1」で計算し、四捨五入して return する（round関数）
// 戻り値を使って、「税込価格は ○○ 円です」と表示する（<br> を使う）
// 関数を2回以上呼び出して、異なる価格で確認する

// ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）
function calculateTaxPrice($price)
{
    // 税込価格を計算して return する
    $taxPrice = round($price * 1.1);
    return $taxPrice;
}

$price1 = 1500;
$result1 = calculateTaxPrice($price1);
echo "税込価格は{$result1}円です<br>";

$price2 = 3800;
$result2 = calculateTaxPrice($price2);
echo "税込価格は{$result2}円です<br>";
