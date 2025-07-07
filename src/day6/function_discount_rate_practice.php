<?php
// 🎯 Day6 練習問題（function_discount_rate_practice.php）

// 📝 【問題】
// 商品の価格と割引率を引数に受け取り、割引後の価格を計算する関数を作成してください。
// 戻り値として割引後の価格を返し、それを画面に表示してください。

// 【条件】
// ✅ 関数名は `calculateDiscountPrice` とする
// ✅ 引数に「価格（整数）」と「割引率（0〜100の整数）」を受け取る
// ✅ 割引後の価格は「価格 × (1 - 割引率 ÷ 100)」で求める
// ✅ 戻り値として「割引後の価格（整数に丸める）」を返す
// ✅ 呼び出し元では戻り値を使って、「割引後の価格は ○○ 円です」と表示する（<br> を使う）

// 【ヒント】
// 💡 割引率はパーセンテージ（%）なので、割るときに 100 を使います
// 💡 割引後の価格は小数になる可能性があるので、`floor()` や `(int)` で整数に丸めましょう

// 🪄 【第一歩のコード変換例】
// function calculateDiscountPrice($price, $discountRate)
// {
//     // ここに計算処理を記述していく
// }

// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （ここに自分で日本語の処理文を書いてください）

// 関数名は calculateDiscountPrice と定義。
// 引数に「価格（整数）」と「割引率（0〜100の整数）」を受け取る。
// 割引後の価格は「価格 × (1 - 割引率 ÷ 100)」で求める。
// 戻り値として「割引後の価格（整数に丸める）」を返す。
// 呼び出し元では戻り値を使って、「割引後の価格は ○○ 円です」と表示する（<br> を使う）

// 💡 割引率はパーセンテージ（%）なので、割るときに 100 を使う。
// 💡 割引後の価格は小数になる可能性があるので、`floor()` や `(int)` で整数に丸める。

// ✅ その下に『自分でPHPコード』を書いてください。
// （ここに自分でPHPコードを書いてください）
function calculateDiscountPrice($price, $discountRate)
{
    // 割引率を少数に変換する
    $rate = $discountRate / 100;

    // 割引後の価格を計算
    $discountPrice = $price * (1 - $rate);

    // 戻り値として「割引後の価格（整数に丸める）」を返す。
    return round($discountPrice);
}

$originalPrice = 3000;
$discount = 20; // 20%

$finalPrice = calculateDiscountPrice($originalPrice, $discount);

echo "元の価格：{$originalPrice}円<br>";
echo "割引率：{$discount}%<br>";
echo "割引後の価格：{$finalPrice}円<br>";
