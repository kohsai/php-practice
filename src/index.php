<?php
date_default_timezone_set("Asia/Tokyo");

// Day2:変数と定数の復習

// 練習問題 ⓵

// const APP_NAME = "KOH's App";
// echo APP_NAME;

// 練習問題 ⓶
// 変数（variable）
function setCreator() {
    define("CREATOR", "KOH");
    echo "<p>このアプリの作成者は" . CREATOR . "です。</P>";
}
setCreator();

// 練習問題3（応用）：条件で定数を変える

$hour = date("H");

if ($hour < 12) {
    define("GREETING", "おはようございます");
} elseif ($hour < 18) {
    define("GREETING", "こんにちは");
} else {
    define("GREETING", "こんばんは");
}

echo "<p>GREETING: " . GREETING . "</p>";

echo "現在の時刻：" . date("H:i:s");

?>