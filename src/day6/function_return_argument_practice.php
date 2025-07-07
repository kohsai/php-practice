<?php
// 🎯 Day6 練習問題（function_return_argument_practice.php）

// 📝 【問題】
// 2つの数値を引数に受け取り、その差を計算して戻り値として返す関数を作成してください。
// その戻り値を使って、計算結果を画面に表示しましょう。

// 【条件】
// ✅ 関数名は `calculateDifference` とする
// ✅ 引数に「2つの整数」を受け取る（例：8 と 3）
// ✅ 2つの引数の差を求めて return する（大きい方から小さい方を引く）
// ✅ 戻り値を受け取り、「○○ と ○○ の差は ○○ です」と画面に表示する（<br> を使う）
// ✅ 関数を2回以上呼び出して、複数の例で確認すること

// 【ヒント】
// 💡 引数で受け取った数値を比較し、大きい方から小さい方を引きましょう
// 💡 `if` 文を使って、どちらが大きいかを判定します
// 💡 計算結果は `return` で返し、その後で `echo` して表示します

// ✅ ここから下に『自分で考えた日本語の処理手順』をコメントで書いてください。
// （例：大きい方の数から小さい方の数を引いて、その結果を返す）

// （ここに自分で日本語の処理文を書いてください）
//  関数 calculateDifference を定義する
//  引数に二つの数値を受け取る
//  大きい数字から小さい数字を引けるように処理し、差を求めてreturnする
//  戻り値を受け取り、画面に表示する。
//  関数を二回以上呼び出し確認する。


// ✅ その下に『自分でPHPコード』を書いてください。

// （ここに自分でPHPコードを書いてください）
function calculateDifference($num1, $num2)
{
    if ($num1 > $num2) {
        // $num1が大きいとき
        $result = $num1 - $num2;
    } else {
        // $num2が大きいとき（または同じ）
        $result = $num2 - $num1;
    }
    return $result;
};

// $value1 = calculateDifference(20, 5);
// echo "{$num1}と{$num2}の差は{$value1}です。<br>";

// $value2 = calculateDifference(7, 27);
// echo "{$num1}と{$num2}の差は{$value2}です。<br>";

// $value3 = calculateDifference(18, 28);
// echo "{$num1}と{$num2}の差は{$value3}です。<br>";

// ここで採点し、エラーが発生する。
//         ↓

// Warning: Undefined variable $num1 in /var/www/html/day6/function_return_argument_practice.php on line 47

// Warning: Undefined variable $num2 in /var/www/html/day6/function_return_argument_practice.php on line 47
// との差は15です。

// Warning: Undefined variable $num1 in /var/www/html/day6/function_return_argument_practice.php on line 50

// Warning: Undefined variable $num2 in /var/www/html/day6/function_return_argument_practice.php on line 50
// との差は20です。

// Warning: Undefined variable $num1 in /var/www/html/day6/function_return_argument_practice.php on line 53

// Warning: Undefined variable $num2 in /var/www/html/day6/function_return_argument_practice.php on line 53
// との差は10です。



// 以下は解説と修正の提案。
// Warning: Undefined variable $num1 ...
// 🔍 エラーの意味
// Undefined variable $num1 は、

// その行で使おうとした $num1 という変数が、まだ定義（代入）されていない状態で使われたことを意味します。

// 🧠 よくある原因（今回の可能性）
// おそらく、関数を呼び出してその結果を表示する部分で、以下のような書き方をしているのではないでしょうか：

// echo "{$num1} と {$num2} の差は {$result} です。<br>";

// このように書くと、$num1 や $num2 は関数の外で定義されていないため、エラーになります。

// ✅ 正しいヒント（書き方の例）
// 関数の戻り値を使って表示するには、以下のように直接引数を記述するのが良い方法です。
// $result1 = calculateDifference(20, 5);
// echo "20 と 5 の差は {$result1} です。<br>";

// $result2 = calculateDifference(8, 28);
// echo "8 と 28 の差は {$result2} です。<br>";

// $result3 = calculateDifference(17, 7);
// echo "17 と 7 の差は {$result3} です。<br>";


// または、変数に値を代入してから使ってもOKです：
// $a = 20;
// $b = 5;
// $result = calculateDifference($a, $b);
// echo "{$a} と {$b} の差は {$result} です。<br>";


// 🧩 ポイント整理
// 関数の外では $num1, $num2 は存在しない
// $num1, $num2 は 関数の中だけ で使われる名前（ローカル変数）
// 関数の外では 別の変数名（例：$a, $bなど） を使って処理する必要がある

// 以下は修正後のコード。
//         ↓

$result1 = calculateDifference(20, 5);
echo "20 と 5 の差は {$result1} です。<br>";

$result2 = calculateDifference(8, 28);
echo "8 と 28 の差は {$result2} です。<br>";

$result3 = calculateDifference(17, 7);
echo "17 と 7 の差は {$result3} です。<br>";
