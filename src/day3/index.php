<?php
// PHPのタイムゾーンを日本時間に設定（UTC→Asia/Tokyo）
date_default_timezone_set("Asia/Tokyo");

// -----------------------------
// 年齢による料金の条件分岐
// -----------------------------

// 年齢を設定（今回は例として43歳）
$age = 43;

// if文で条件分岐を行う
if ($age < 13) {
    // 13歳未満 → 子供料金
    echo "子供料金です。";
} elseif ($age < 18) {
    // 13歳以上かつ18歳未満 → 中高生料金
    echo "中高生料金です。";
} elseif ($age < 65) {
    // 18歳以上かつ65歳未満 → 大人料金
    echo "大人料金です。";
} else {
    // 65歳以上 → シニア料金
    echo "シニア料金です。";
}

// 改行（PHP_EOL は改行コード）
echo PHP_EOL;

// -----------------------------
// 曜日によるコメントの分岐（switch文）
// -----------------------------

// 日本語の曜日名を取得
$weekDays = [
    "Sunday" => "日曜日",
    "Monday" => "月曜日",
    "Tuesday" => "火曜日",
    "Wednesday" => "水曜日",
    "Thursday" => "木曜日",
    "Friday" => "金曜日",
    "Saturday" => "土曜日"
];

$day_en = date("l");              // 英語の曜日名を取得（例: Sunday）
$day = $weekDays[$day_en];       // 対応する日本語を取得

// switch文で値に応じた処理を分岐
switch ($day) {
    case "月曜日":
        // 曜日が月曜日ならこのメッセージ
        echo "今週もがんばろう！";
        break;

    case "金曜日":
        // 金曜日ならこのメッセージ
        echo "もうすぐ週末！";
        break;

    case "土曜日":
    case "日曜日":
        // 土曜または日曜 → 同じメッセージを表示
        echo "ゆっくり休んでね！";
        break;

    default:
        // どのcaseにも当てはまらない場合
        echo "ふつうの日です。";
}
