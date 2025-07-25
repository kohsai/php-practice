<?php
// ☕ PHPコーヒー 第29問（テーマ：戻り値 × 複数条件）
// 関数の戻り値と複数条件（AND）による条件分岐の組み合わせに慣れましょう。
// ✅ 出題意図とテーマのねらい
// この問題では、次の2点を確認します：
// 関数の戻り値（true/false）をAND条件の一部として使えること
// 各条件がfalseになった場合、全体の評価がどうなるか

// 🎯【関数の定義】
// 指定の国（"JP"）かどうかを判定する関数です。
// function isJapanese($country)
// {
//     return $country === "JP";
// }

// 🎯【問題】
// 以下のコードを実行すると、画面にはどのメッセージが表示されますか？

// $userCountry = "US";
// $userStatus = "active";

// if (isJapanese($userCountry) && $userStatus === "active") {
//     echo "日本のアクティブユーザーです<br>";
// } else {
//     echo "条件を満たしません<br>";
// }

// 🔘【選択肢】
// A. 日本のアクティブユーザーです<br>
// B. 条件を満たしません<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：B
// return $country === "JP"; は形式まで等しい場合のみtrueを返す。
// if文に当てはめると、isJapanese($userCountry)でfalseになり、
// 次の$userStatus === の前にfalseが成立しストップする。&& は両方の条件を満たした場合のみtrueを返すのでelse判定で「B」となる。

// 正解です！◎

// 🔍 採点結果：満点（正解 + 理解も的確）
// 🧠 解説ポイント
// $userCountry = "US";
// $userStatus = "active";
// 条件文の中身：
// if (isJapanese($userCountry) && $userStatus === "active")
// ここで isJapanese("US") の評価に注目します。

// function isJapanese($country)
// {
//     return $country === "JP"; // "US" では false を返す
// }
// したがって、
// isJapanese("US") // → false
// そして &&（論理積）では：
// 左側が false の時点で、右側は評価されず false が確定します（短絡評価）。
// よって if 全体は false となり、else ブロックに進みます。
// 💬 表示結果：
// echo "条件を満たしません<br>";

// ✅ KOHの考察について
// 形式まで等しい場合のみ true（=== 比較）→ 正確
// falseが先に判定されて次に進まない（短絡評価）→ 非常に良い理解です
// && は両方の条件を満たした場合のみ true → ✔️その通り
// 論理演算の本質と評価の順序、戻り値の型（boolean）への理解がしっかり表れています。



// ☕ PHPコーヒー 第30問（テーマ：戻り値 × OR条件）
// 関数の戻り値を OR（||）で組み合わせた条件分岐に慣れましょう。

// ✅ 出題意図とテーマのねらい
// ・戻り値（true/false）を OR 条件の一部として使えること
// ・OR 条件では「どちらかが true なら全体が true」になる性質を理解する

// 🎯【関数の定義】
// function isAdmin($role)
// {
//     return $role === "admin";
// }

// function isEditor($role)
// {
//     return $role === "editor";
// }

// 🎯【問題】
// 以下のコードを実行すると、画面にはどのメッセージが表示されますか？

// $userRole = "editor";

// if (isAdmin($userRole) || isEditor($userRole)) {
//     echo "権限あり<br>";
// } else {
//     echo "権限なし<br>";
// }

// 🔘【選択肢】
// A. 権限あり<br>
// B. 権限なし<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：A.権限あり<br>

// ORで繋がれている場合、どちらかがtrueになれば良いので
// function isEditor($role)
// {
//     return $role === "editor";
// }
// において、今回は「$userRole = "editor";」でtrueを返すので
// 解答はA.権限あり<br>となる。


// 🔍 採点結果：満点（正解 + 理解も的確）
// 🧠 解説ポイント
// この場合、
// isAdmin("editor") → false
// isEditor("editor") → true
// よって、false || true → true

// 💬 表示結果：
// echo "権限あり<br>";
// ✅ KOHの考察について
// OR条件（||）の性質に基づき、どちらか一方が true であれば if文 は通過する。
// editor で関数 isEditor が true を返す点を的確に指摘。
// 👉 理解のポイントをシンプルかつ正確に押さえており、非常に良い説明です。

// ✍️ 補足メモ（短絡評価について）
// 今回のようなOR条件では、最初の条件が true になった時点で、
// 右側の関数は実行されずスキップされる（短絡評価） という特性もあります。
// 今回は左側が false なので右側も評価されましたが、
// 今後「副作用のある関数（例：ログ記録など）」を組み合わせるときには、
// この評価順にも注意が必要です☝️



// ☕ PHPコーヒー 第31問（テーマ：戻り値 × ネスト条件の再利用）
// 関数の戻り値を1度変数に代入し、それを複数条件の中で使うパターンに慣れましょう。

// ✅ 出題意図とテーマのねらい
// ・戻り値を一度変数に代入するスタイルに慣れる
// ・その変数を複数のif文やネスト条件の中で使い回す場面を理解する

// 🎯【関数の定義】
// function isMember($status)
// {
//     return $status === "member";
// }

// 🎯【問題】
// 以下のコードを実行すると、画面にはどのメッセージが表示されますか？

// $userStatus = "member";
// $memberCheck = isMember($userStatus);   // 今回は関数の戻り値でtrueを返している。

// if ($memberCheck) {
//     if ($userStatus === "member") {     // ここでtrueを返している。
//         echo "一般会員としてログイン中<br>";
//     } else {
//         echo "特別な条件です<br>";
//     }
// } else {
//     echo "非会員です<br>";
// }

// 💡ポイント補足
// $memberCheck = isMember($userStatus); という形で戻り値を変数に代入し再利用しています。
// 外側と内側の条件は似ていますが、それぞれがどう評価されるかに注目してください。

// 🔘【選択肢】
// A. 一般会員としてログイン中<br>
// B. 特別な条件です<br>
// C. 非会員です<br>
// D. 何も表示されない

// 回答：A

// 正解です！◎

// 🔍 採点結果：満点（正確な判断＋的確な理由付け）
// 🧠 解説

// $userStatus = "member";
// $memberCheck = isMember($userStatus); // → true（"member" === "member"）
// 外側の if 文：
// if ($memberCheck)
// $memberCheck は true なので、外側の if ブロックが実行されます。

// 内側の if 文：
// if ($userStatus === "member")
// $userStatus は "member" なので、こちらも true

// したがって、表示されるのは：

// echo "一般会員としてログイン中<br>";
// 💬 表示結果：
// ✅ 「一般会員としてログイン中<br>」


// ✅ KOHの考察について
// isMember の返り値を $memberCheck に一度代入してから使っている点に注目できており、
// 「関数の戻り値の再利用と条件文の重なりを整理している」 のがとても良いです。
// コメントによる思考の言語化も非常に明快で、誤解のないロジック構築ができています。
// ✍️ 補足メモ
// このような「関数の戻り値を変数に保存して再利用」するパターンは、複雑なロジックやネストが多い場合の読みやすさ向上に貢献します。
// また、Laravelなどの実務でも「判定ロジックを何度も使う場合は、変数に保持して再利用する」ことがよくあります。
// この練習は、将来の実装でも非常に役立つスタイルです。



// ☕ PHPコーヒー 第32問（テーマ：戻り値 × 否定 × ネスト）
// 関数の戻り値に否定演算子（!）を使い、ネストした条件内で使用する形式に慣れましょう。

// ✅ 出題意図とテーマのねらい
// ・関数の戻り値を否定して条件に使う（!isXxx()）形式に慣れる
// ・外側と内側で逆の判定を行うネスト構造の理解を深める

// 🎯【関数の定義】
// function isBlacklisted($email)
// {
//     return $email === "blocked@example.com";
// }

// 🎯【問題】
// 以下のコードを実行すると、画面にはどのメッセージが表示されますか？

// $userEmail = "blocked@example.com"; // 関数の戻り値はtrueを返す。ブラックリストに含まれている。

// if (!isBlacklisted($userEmail)) {   // !trueになる。ブラックリストに含まれていない。
//     if ($userEmail === "blocked@example.com") { // if文の中身はtrueを返す。
//         echo "確認が必要です<br>";
//     } else {
//         echo "通常アクセス<br>";
//     }
// } else {
//     echo "アクセス拒否<br>";
// }

// 🔘【選択肢】
// A. 確認が必要です<br>
// B. 通常アクセス<br>
// C. アクセス拒否<br>
// D. 何も表示されない

// 💡 注目ポイント
// !isBlacklisted(...) で「ブラックリストに含まれていない」ことを判定しています。
// ただし内側で === による再チェックをしているため、見た目が矛盾しているようにも見える構造です。
// 「関数でfalseになった後、別の条件でtrueになる」パターンを理解できるかが鍵です。


// 取り組んでみたが相反するような処理に行き詰まり解説を求める。
//             ↓


// 🧠 Step-by-step解説
// 🟩【ステップ1】関数の戻り値を確認
// isBlacklisted("blocked@example.com")
// この関数の中身：

// return $email === "blocked@example.com";
// ということは：

// "blocked@example.com" === "blocked@example.com" → true
// つまり この関数は true を返す。

// 🟩【ステップ2】外側の条件文を判定
// if (!isBlacklisted($userEmail))
// isBlacklisted(...) が true を返したので、
// その前に 否定（!） があるため：
// if (!true) → if (false)
// ➡ この条件は 不成立 になります。

// 🟨 つまり、このブロックは実行されません：
// if ($userEmail === "blocked@example.com") {
//     echo "確認が必要です<br>";
// } else {
//     echo "通常アクセス<br>";
// }
// 🟥【ステップ3】代わりに else が実行される
// else {
//     echo "アクセス拒否<br>";
// }
// ✅ 正解は：
// アクセス拒否<br>
// 🔘【選択肢と答え】
//  選択肢	        表示内容	        判定結果
//      A	    確認が必要です           ❌
//      B	    通常アクセス             ❌
//      C   	アクセス拒否           ✅ 正解
//      D	    何も表示されない	     ❌

// 🔍 解説のポイントまとめ
// 判定ステップ	                 評価	            説明
// isBlacklisted($userEmail)    true	        メールアドレスはブラックリスト対象
// !isBlacklisted(...)	        false	        外側のif文は通らない
// else	                        実行される	    → echo "アクセス拒否<br>"; が表示される

// 📝 なぜ混乱しやすいのか？
// KOHが感じた「意味が分からない」という感覚は正当で、
// "ブラックリストで true → !true → false"
// という流れと、内側でもう一度 === "blocked@example.com" を見る構造が
// まるで 自分で矛盾しているように錯覚させてしまうのです。
// これは実務でも「この中に入る可能性があるのか？」とロジックを追う際に混乱しやすい代表例です。

// ✅ 補足：この構造を将来活かすために
// 否定（!）＋ネストの組み合わせが入ったら「外に入るか、内に入るか」を最初に確定させる癖をつけましょう。
// 関数の戻り値が真か偽かを、別の変数に入れて先に確認しておくのも有効です（デバッグしやすくなるため）。


// あえて「より読み手（他人）にもわかりやすくする」とすれば、次のような記述もできます：

// 関数の戻り値は true（＝ブラックリストに登録されている）
// $userEmail = "blocked@example.com";

// !true → false（ブラックリストではない、という条件は成立しない）
// if (!isBlacklisted($userEmail)) {

//     // このブロックには入らないため、この条件は実行されない
//     if ($userEmail === "blocked@example.com") {
//         echo "確認が必要です<br>";
//     } else {
//         echo "通常アクセス<br>";
//     }

// } else {
//     // ここが実行される（ブラックリストなのでアクセス拒否）
//     echo "アクセス拒否<br>";
// }
// 👉 if文の"中に入るかどうか"を明示すると、さらに理解が深まります。


