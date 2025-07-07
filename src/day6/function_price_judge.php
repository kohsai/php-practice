<?php
// 📘 Day6 関数の基礎（function_price_judge.php）

// 📝 【学習テーマ】
// 条件分岐と関数の組み合わせ（価格に応じた判定処理を関数化する）

// -----------------------------
// ✅ 関数の定義
// -----------------------------

// 「価格」を受け取り、価格に応じた判定メッセージを返す関数
function judgePrice($price)
{
    if ($price <= 1000) {
        return "購入できます。";
    } elseif ($price <= 5000) {
        return "ちょっと高いですが購入可能です。";
    } else {
        return "高すぎます。購入できません。";
    }
}

// -----------------------------
// ✅ 関数の呼び出し
// -----------------------------

// テスト用の価格をいくつか用意して、判定結果を表示
echo "【価格判定テスト】<br><br>";

$price1 = 800;
echo "商品価格：{$price1}円 → " . judgePrice($price1) . "<br>";

$price2 = 3000;
echo "商品価格：{$price2}円 → " . judgePrice($price2) . "<br>";

$price3 = 8000;
echo "商品価格：{$price3}円 → " . judgePrice($price3) . "<br>";


// ✅ 解説（PHPコメント付きのまま表示）
// function judgePrice($price)
// 関数名：judgePrice、引数に価格を受け取り、それに応じた文字列を返すようにしています。

// return を使って、結果を呼び出し元に返しています。

// 関数の下では $price1, $price2, $price3 に異なる価格を代入してテストしています。