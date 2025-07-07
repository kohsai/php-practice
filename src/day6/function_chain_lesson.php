<?php
// 🎓 Day6 教材（function_chain_lesson.php）

// 📝 【テーマ】関数を連続して使う（チェーンのように処理をつなぐ）
//
// 関数を組み合わせて使うことで、より柔軟で再利用性の高いコードが書けます。
// 今回は、次の2つの考え方を学びます：
//
// ✅ 「関数の中で別の関数を呼び出す」方法
// ✅ 「関数の戻り値を次の関数に渡す」方法（＝関数チェーン）

// -------------------------
// 🔸【1】関数の中で別の関数を呼び出す
// -------------------------

// ➤ 名前を整形する関数（例："koh" → "Koh"）
function formatName($name)
{
    return ucfirst($name); // 先頭を大文字にする
}

// ➤ メッセージを作る関数（中でformatNameを使う）
function createMessage($name)
{
    $formattedName = formatName($name); // ここで他の関数を呼び出す
    return "こんにちは、{$formattedName}さん！<br>";
}

// ✅ 呼び出してみる
echo createMessage("koh"); // ➜ こんにちは、Kohさん！

// -------------------------
// 🔸【2】関数の戻り値を別の関数に渡す（関数チェーン）
// -------------------------

// ➤ 英字をすべて小文字に変換する関数
function toLower($text)
{
    return strtolower($text);
}

// ➤ 最後に「!」をつける関数
function addExclamation($text)
{
    return $text . "!";
}

// ✅ 関数チェーン：戻り値をつなげて使う
$message = "HELLO";

// チェーンのように関数をつなげて呼び出す
$result = addExclamation(toLower($message));

echo "結果: {$result}<br>"; // ➜ 結果: hello!

// ✅ これは次のように分けて書いても同じ結果
// $lower = toLower($message);
// $result = addExclamation($lower);
// echo $result;


// ✅ 内容のポイントまとめ：
//  項目	                内容
// ucfirst()	    文字列の先頭を大文字にする関数
// strtolower()	    文字列をすべて小文字に変換する関数
// 関数の呼び出し	 関数の中で別の関数を呼ぶことができる
// チェーン呼び出し	 関数の戻り値を、次の関数の引数としてすぐ渡すことができる

