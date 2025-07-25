<?php
// ☕ PHPコーヒー 第37問（テーマ：null判定 × 戻り値 × 条件分岐）
// 関数の戻り値が null でないかどうかを使って、ログイン判定などの処理を行う形式です。
// Laravelでも「値が null でなければOK」「存在する場合だけ実行」といった条件判定に頻出します。

// ✅ 出題意図とねらい
// ・null判定（!== null）によるブール値の戻し方を理解する
// ・戻り値を条件分岐でそのまま使う構造を整理する
// ・「false を返すわけではないが、nullを判定材料にする」構造に慣れる

// 🔧【関数の定義】
// function findUserName($userId)
// {
//     if ($userId === 1) {
//         return "KOH"; // ユーザーID1番はKOH
//     } else {
//         return null; // その他のIDは見つからなかった（null）
//     }
// }

// 🎯【問題】
// 以下のコードを実行すると、画面にはどのメッセージが表示されますか？

// $loginUserId = 5;   // falseなので「null」を返す。

// if (findUserName($loginUserId) !== null) {
// //                  null !== null となる。null以外の時にtrueを返す。
// //                  falseの「ユーザーが存在しません<br>」を表示する。
//     echo "ユーザーが見つかりました<br>";
// } else {
//     echo "ユーザーが存在しません<br>";
// }

// 🔘【選択肢】
// A. ユーザーが見つかりました<br>
// B. ユーザーが存在しません<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：B.ユーザーが存在しません<br>


// ✅ 採点結果：正解（B. ユーザーが存在しません）
// 🧠 判定の流れを再確認：
// $loginUserId = 5;
// このとき、関数 findUserName($userId) に 5 が渡される。
// function findUserName($userId)
// {
//     if ($userId === 1) {
//         return "KOH";
//     } else {
//         return null;
//     }
// }
// $userId === 1 → false
// よって return null;

// 次の条件判定：
// if (findUserName($loginUserId) !== null)
// 実行結果は null
// つまり null !== null → false

// → else に入って：
// echo "ユーザーが存在しません<br>";

// ✍️ KOHのコメントへのフィードバック：
// falseなので「null」を返す。
// null !== null となる。
// falseの「ユーザーが存在しません<br>」を表示する。

// すばらしい分析です。
// ✔️ 関数の戻り値が明示的に false ではなく null
// ✔️ !== null という条件で分岐している
// という「PHPではよくあるが初心者にはつまずきやすい構造」を、正確に読み取れています。

// 📌 実務補足：
// この判定はLaravelでも非常によく登場します：
// $user = User::find($id);
// if ($user !== null) {
//     // ユーザーが存在する場合の処理
// }
// 今回の第37問は、実務型構造をベースにした良問として設計したので、
// KOHがそのまま読めているのは実力の証です。



// ☕ PHPコーヒー 第38問（テーマ：戻り値 × null判定 × 条件分岐の定着）
// 関数の戻り値が null であるかどうかを条件に使う基本的なパターンの反復です。
// Laravelの `find()` や `first()` の戻り値（オブジェクト or null）を条件に使う際にも同じ考え方が必要です。

// ✅ 出題意図とねらい
// ・「関数の戻り値が null かどうか」の基本的な条件分岐の定着
// ・nullと比較する際の正しい構文（!== null）の習得
// ・Laravelでも頻出の「値が存在するかどうか」の判断ロジックに慣れる

// 🔧【関数の定義】
// function findUserByEmail($email)
// {
    // 特定のメールアドレスのみデータがあると仮定します
//     if ($email === "test@example.com") {
//         return "ユーザー情報データ"; // 何かしらの値が返る（nullではない）
//     }
//     return null; // データがない場合
// }

// 🧪【実行部分】
// $user = findUserByEmail("guest@example.com");
// 関数の定義では($email === "test@example.com")と完全に一致する場合のみtrueを返す。今回は"guest@example.com"なのでfalseとなり「null」を返す。

// 🎯【問題】
// 上記のコードを実行すると、画面には何と表示されますか？

// if ($user !== null) { // null以外はtrueを返す。
// // null !== null となり、elseに進む。
//     echo "ユーザーが見つかりました<br>";
// } else {
//     echo "ユーザーが存在しません<br>";
// }

// 🔘【選択肢】
//
// A. ユーザーが見つかりました<br>
// B. ユーザーが存在しません<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：B.ユーザーが存在しません<br>


// ✅ 採点結果
// 正答選択：B → 正解！
// 日本語の処理文も的確です：
// 「完全一致しないので null が返る」
// 「$user !== null が false になるので else に進む」
// どちらも明確に説明できています。

// 💡補足ポイント（Laravelと絡めて）
// Laravelでよく使われる以下のような関数：
// $user = User::where('email', $email)->first();
// この $user には「ユーザーが存在すればオブジェクト」「いなければ null」が入るので、

// if ($user !== null) {
//     // ユーザーが存在する処理
// } else {
//     // ユーザーがいない処理
// }
// という形で今回と同じ構造になります。

// このような nullかどうかの判断は実務でも頻出なので、今回のような判定ロジックは確実に押さえておきたいですね。



// ☕ PHPコーヒー 第39問（テーマ：関数の戻り値 × if文での分岐 × 表示切替）
// 関数の戻り値（true / false）を使って、画面表示を切り替える構文の理解を確認します。

// ✅ 出題意図とねらい
// ・戻り値 true / false による表示切替の基本構造を復習
// ・Laravelでの「管理者判定」などの処理をイメージした実装
// ・簡単なコード記述を交え、理解を深める

// 🔧【関数の定義】
// function isAdmin($role)
// {
//     return $role === "admin";
// }

// 🎯【問題：穴埋め＋記述形式】
// 以下のコードの（　）に適切な条件式を入れてください。
// また、実行結果として表示される文を記述してください。

// $role = "user"; // "admin"と完全一致しないのでfalse判定。

// if (isAdmin($role)) {
//     echo "管理者です<br>";
// } else {
//     echo "管理者ではありません<br>";
// }

// 回答：今回はelseの「管理者ではありません<br>」が表示される。


// ✅ 採点結果
// 項目	                判定	        コメント
// 条件式の穴埋め   ✅ 正解	    if (isAdmin($role)) は完璧です
// 表示メッセージ	✅ 正解	"管理者です" / "管理者ではありません" 両方正しく記述
// 処理の説明	    ✅ 明確	$role = "user" → false → else へ、という判断も的確

// 🔍 補足確認（Laravel文脈）
// Laravelではこのような判定をBladeテンプレートやコントローラー内で多用します。

// if (Auth::user()->isAdmin()) {
//     // 管理者向けページ
// }
// このように **「戻り値が true なら分岐」**というシンプルなロジックは
// 実務でも確実に活かされる力なので、今回のような書き方が自然に出てくるのは非常に重要です。



// ☕ PHPコーヒー 第40問（テーマ：戻り値 × 否定 × ネスト条件の総合確認）
// これまでの復習の仕上げとして、関数の戻り値・否定・ネストされたif文を正しく理解しているかを確認します。

// ✅ 出題意図とねらい
// ・関数の戻り値（true/false）に否定をかけたときの意味を読み取れるか
// ・ネスト条件の中で return × if を混ぜた処理構造を追えるか
// ・Laravelに出てくる「if (!xxx())」などの判定に慣れるための総仕上げ

// // 🔧【関数の定義】
// function isValidEmail($email)
// {
//     return $email !== ""; // ""以外の場合のみtrueを返す。
// }

// // 🔧【処理本体】
// function login($email)
// {
//     if (!isValidEmail($email)) { // 「！」によってfunction isValidEmail($email)の結果を反転させる。
//         echo "メールアドレスを入力してください<br>";
//         return;
//     }

//     echo "ログイン処理を実行します<br>";
// }

// 🎯【問題】
// 次のコードを実行したとき、画面には何と表示されますか？

// $email = ""; // function isValidEmail($email)の結果はfalse。
// login($email); // ！falseに進む。 → echo"メールアドレスを入力してください<br>"が表示される。

// 🔘【選択肢】
// A. メールアドレスを入力してください<br>
// B. ログイン処理を実行します<br>
// C. 両方が表示される
// D. 何も表示されない

// 回答：A.メールアドレスを入力してください<br>



// ✅ 採点結果
// 評価項目	            判定	        コメント
// 関数の戻り値の理解	✅	isValidEmail("") → false の判断は正確です
// 否定演算子 ! の意味	✅	!false → true → if文に入る、が明確に説明できています
// returnによる処理中断	✅	return; により「ログイン処理」は実行されない、という理解もOK
// 選択肢の選定	✅ 正解：A	他の選択肢がなぜ誤りかも自分で説明できる状態です

// 🔍 解説まとめ（Laravel視点含む）
// このコードは Laravelの実務でも頻出する **「前提条件が満たされない場合に早期リターン」**の典型です。

// if (!isValid($data)) {
//     return redirect()->back()->withErrors(...);
// }
// このように「入力チェックを最初にして、通らなければ即終了」という構造に慣れておくことで、LaravelのControllerでのエラーハンドリングやバリデーションが自然に読めるようになります。



// 🔁 改めて整理：return の働き
// function login($email)
// {
//     if (!isValidEmail($email)) {
//         echo "メールアドレスを入力してください<br>";
//         return; // ← ここで関数の処理は終了
//     }
//     echo "ログイン処理を実行します<br>"; // ← returnが実行されたら、ここには来ない
// }


// return; 単体の使用
// → これは **「値を返す」のではなく、「関数の処理をここで終える」**という意味になります。

// Laravelの Controller や Middleware では、

// if (!$user) {
//     return redirect('/login');
// }
// のように使われており、「条件が合わなければ、それ以上の処理をせずに抜ける」という構造と完全に同じです。

