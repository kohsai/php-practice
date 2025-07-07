<?php
// 以下のコードを実行すると、どのように表示されるでしょうか？
// function checkFlag()
// {
//     return "false";  // ← 注意：文字列としての "false"
// }

// $result = checkFlag();

// if ($result) {
//     echo "OK<br>";
// } else {
//     echo "NG<br>";
// }
// // ❓【選択肢】
// // A. OK
// // B. NG
// // C. エラーになる
// // D. 何も表示されない
// // 🔍 ヒント（少しだけ）
// // "false" は文字列です。false という 論理値 とは別ものです。
// // if文は、"空文字列以外の文字列"は true として判定します。

// 回答 ： A
// 正解 ： A
// 🔍 解説（確認）
// function checkFlag() {
//     return "false"; // 文字列としての "false"
// }
// この "false" は文字列なので、
// たとえ中身が "false" という文字列でも…

// if ("false") { ... }
// という形になると、これは true として扱われます。

// ✅ PHPの評価ルール（ポイント）
// 値	        if文での評価	    備考
// false	    false	    論理値（ブール型）
// "false"	    true    	文字列は空でなければ true
// ""（空文字）	 false
// 0	        false	    数値ゼロ
// "0"      	false	    文字列のゼロ
// "true"	    true	    内容に関係なく文字列として扱われる



// ☕ PHPコーヒー 第3問（Day6復習）
// 🎯 テーマ：関数の戻り値を直接 if文に使うパターンの理解
// 🧠 この問題で定着させたいこと
// 関数の戻り値を変数に代入せず、if文に直接使う書き方
// 「関数が返す値がtrueかどうか」で処理を分ける構造に慣れる

// 📝 【問題】
// 以下の関数はユーザーが「プレミアム会員かどうか」を判定し true/false を返します。
// この関数を使って、if文で直接判定してメッセージを表示してください。

// 🔤 条件
// $userRank = "premium";  // 他には "basic" などがある
// 関数名は isPremiumUser
// 引数として $userRank を受け取る
// $userRank が "premium" なら true を返す
// それ以外は false を返す
// if文には戻り値を直接書くこと（変数に代入せずに）

// 🧩 【穴埋めテンプレ】

// function isPremiumUser($userRank)
// {
//     return $userRank === "premium";
// }

// $userRank = "premium";

// if (isPremiumUser($userRank)) {
//     echo "プレミアム会員です<br>";
// } else {
//     echo "一般会員です<br>";
// }
// 🔍 ヒント
// 関数の中は：return $rank === "premium";

// if文の中は：isPremiumUser($userRank) をそのまま入れる

// 採点 → 正解！！


// ☕ PHPコーヒー 第4問（Day6復習）
// 🎯 テーマ：複雑な論理式の評価 × if文の理解
// 🧠 この問題で定着させたいこと
// && と || を組み合わせた条件の評価順序と結果の理解
// 実行結果の予測力（if文に何が表示されるか）
// 📝 【問題】
// 以下のコードを実行したとき、どのメッセージが表示されるでしょうか？

// $score = 65;
// $isSpecial = true;

// if ($score >= 70 || $isSpecial && $score >= 60) {
//     echo "合格です<br>";
// } else {
//     echo "不合格です<br>";
// }
// ❓【選択肢】
// A. 合格です
// B. 不合格です
// C. エラーになる
// D. 何も表示されない

// 🔍 ヒント（出しすぎないように…）
// && と || の優先順位に注目！
// PHPでは、&& の方が || より先に評価されます

// 回答：A.合格です と表示される


// ✅ まず採点結果から
// KOHの回答：A. 合格です
// 🟢 正解です！
// ✅ 条件式の評価順序の確認
// if ($score >= 70 || $isSpecial && $score >= 60)
// 評価順序（優先順位）に従って、以下のように解釈されます：
// if (($score >= 70) || ($isSpecial && $score >= 60))

// 今回の値は：
// $score = 65 → score >= 70 → false
// $isSpecial = true かつ score >= 60 → true
// 結果 → false || true → true → 「合格です」



// ☕ PHPコーヒー 第5問（Day6復習）
// 🎯 テーマ：関数の戻り値を使った if文処理 × 複数条件の整理
// 📝 【問題】
// ユーザーの「年齢」と「登録状態」によってイベントに参加できるかどうか判定します。
// 次のルールにしたがって、関数とif文を完成させてください。
// 📘 条件ルール
// 18歳以上
// かつ 登録状態（$isRegistered）が true
// ➡ この両方を満たすと「参加できます」

// 🔤 変数（以下は定義済み）
// $age = 20;
// $isRegistered = true;
// 🧩 【テンプレート】
// function canJoinEvent($age, $isRegistered) {
//     return _____;
// }
// $age = 20;
// $isRegistered = true;

// if (canJoinEvent($age, $isRegistered)) {
//     echo "参加できます<br>";
// } else {
//     echo "参加できません<br>";
// }

// ❓ 【選択肢：_____ に入る1行】
// A. $age >= 18 && $isRegistered
// B. $age > 18 || $isRegistered
// C. $isRegistered === "true"
// D. return true;

// 回答：A.$age >= 18 && $isRegistered（18歳以上、&&（どちらかだけでなく両方の条件を求めるので）


// ✅ 採点結果
// 項目	                評価	                    コメント
// 選択肢の選定	        🟢 OK	A. $age >= 18 && $isRegistered は、条件通りの適切な組み合わせです
// 論理構文の理解	    🟢 OK	「どちらかではなく両方の条件を求める」という判断も正確です
// 条件式の正確性	    🟢 OK	$isRegistered は boolean（true/false）なので、=== "true" は不適切と正しく判断できています

// 🎯 正解：A. $age >= 18 && $isRegistered
// KOHの回答 → 正解💯です！

// ✅ 補足コメント
// 選択肢B（$age > 18 || $isRegistered）：18歳ちょうどがNGになってしまうため誤り
// 選択肢C（$isRegistered === "true"）：$isRegistered は boolean（true）、文字列比較はNG
// 選択肢D（return true;）：常に true を返すため、条件が意味をなさない




// ☕ PHPコーヒー 第7問（使い道＋注意点つき）
// 🎯 テーマ：戻り値を if文で直接使うパターン（true/false）

// // 🔧 【関数の定義】
// function isPremiumUser($status) {
//     // 会員ステータスが "premium" なら true、それ以外は false
//     return $status === "premium";
// }

// // 🧪 【処理の準備】
// $userStatus = "free"; // "free" にして動作確認もしてみましょう

// // 🧠 【処理内容】
// // isPremiumUser 関数を使って、戻り値を if文で直接判定し、
// // 以下のメッセージを表示してください：
// // ・true → 「ようこそ、プレミアムユーザー様！」
// // ・false → 「一般会員向けのページです」
// // 表示には <br> を使用してください

// // ✅ ここに判定処理を記述
// if (isPremiumUser($userStatus)) {
//     echo "ようこそ、プレミアムユーザー様！<br>";
// } else {
//     echo "一般会員向けのページです<br>";
// }


// ☕ PHPコーヒー 第8問（else if の理解と分岐の順序）
// 🎯 テーマ：複数条件の分岐（if / elseif / else）

// 📝【処理内容】
// ・変数 $score に 0〜100 の整数を代入（例：85）
// ・点数に応じて、以下の評価を画面に表示してください：
// 　　- 90点以上 → 「評価：S」
// 　　- 80〜89点 → 「評価：A」
// 　　- 70〜79点 → 「評価：B」
// 　　- 60〜69点 → 「評価：C」
// 　　- 59点以下 → 「評価：D」
// ・表示には <br> を使用してください

// ⚠️【注意点】
// ・上から順に条件を評価するため、順序を誤ると全体の判定が狂うことがあります
// ・条件が重ならないように、範囲を明確にすること（例：>= / <=）

// 💡【使い道】
// ・テストの評価や、購入金額によるランク分けなど「スコアに応じて段階的に処理を分ける」場面でよく使います
// ・Laravelでも、複雑なバリデーションやフォーム選択肢の制御に使われることがあります

// // 🔧【判定処理を記述】
// $score = 75; // 任意の点数を設定してみてください

// // ✅ ここに if / elseif / else を使って判定を記述
// // echo "評価：◯◯<br>" の形式で表示してください
// if ($score >= 90) {
//     echo "評価：S<br>";
// } elseif ($score >= 80) {
//     echo "評価：A<br>";
// } elseif ($score >= 70) {
//     echo "評価：B<br>";
// } elseif ($score >= 60) {
//     echo "評価：C<br>";
// } else {
//     echo "評価：D<br>";
// }



// ☕ PHPコーヒー 第9問（関数と else if の組み合わせ）
// 🎯 テーマ：戻り値を使った多段階評価（if / elseif / else）

// 🔧 【関数の定義】
function judgeGrade($score)
{
    // 点数に応じた評価を文字列で返す
    if ($score >= 90) {
        return "S";
    } elseif ($score >= 80) {
        return "A";
    } elseif ($score >= 70) {
        return "B";
    } elseif ($score >= 60) {
        return "C";
    } else {
        return "D";
    }
}

// 🧪 【処理の準備】
$studentScore = 75; // 好きな点数に変えて試してみましょう

// 📝 【処理内容】
// 1. judgeGrade関数を使って評価を取得し、「評価：○○」と表示してください。
// 2. 評価によって異なるメッセージを以下のように表示してください：
//    - S → 「素晴らしい成績です！」
//    - A → 「よく頑張りましたね」
//    - B → 「まずまずの成績です」
//    - C → 「もう少し頑張りましょう」
//    - D → 「再テストの可能性があります」
// 3. 表示は `<br>` を使ってください
$grade = judgeGrade($studentScore);

// if ($grade === "S") {
//     echo "素晴らしい成績です！<br>";
// } elseif ($grade === "A") {
//     echo "よく頑張りましたね<br>";
// } elseif ($grade === "B") {
//     echo "まずまずの成績です<br>";
// } elseif ($grade === "C") {
//     echo "もう少し頑張りましょう<br>";
// } else {
//     echo "再テストの可能性があります<br>";
// }


// ここで採点をする。以下の文の抜けを指摘される。
//                 ↓
// echo "評価：" . $grade . "<br>";

// 完成形は以下の通り。
//         ↓
// echo "評価：" . $grade . "<br>";

// if ($grade === "S") {
//     echo "素晴らしい成績です！<br>";
// } elseif ($grade === "A") {
//     echo "よく頑張りましたね<br>";
// } elseif ($grade === "B") {
//     echo "まずまずの成績です<br>";
// } elseif ($grade === "C") {
//     echo "もう少し頑張りましょう<br>";
// } else {
//     echo "再テストの可能性があります<br>";
// }

