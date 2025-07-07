<?php
// ☑ PHPミニテスト 第1問（テーマ：関数の戻り値 × if文の判定）
// 関数 checkAge は、与えられた年齢が 20歳以上なら true、未満なら false を返します。
// 以下のコードを実行したとき、画面には何が表示されますか？

// function checkAge($age)
// {
//     return $age >= 20;
// }

// $input = 18;

// if (checkAge($input)) {
//     echo "成人です<br>";
// } else {
//     echo "未成年です<br>";
// }

// 🔘【選択肢】
// A. 成人です<br>
// B. 未成年です<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：B.未成年です<br>


// **PHPミニテスト 第1問、正解は B「未成年です<br>」**で間違いありません！

// ✅  採点結果
// 評価項目	        判定	        コメント
// 戻り値の判断 	✅	checkAge(18) の結果 → false を正確に理解できています
// if文の流れ	    ✅	false により else ブロックに進む処理が読めています
// 選択肢の選定	    ✅  正解：B	明確な理由があり、処理の追跡もできています

// 🔍 解説ポイント（復習）
// function checkAge($age) {
//     return $age >= 20;
// }
// $age = 18 のとき → 18 >= 20 → false

// if (checkAge($input)) は if (false) と同じなので else に進む

// 結果 → 「未成年です<br>」が表示される

// 🎯 Laravel的な応用場面（思考の先へ）
// このような構造は、Laravelでも以下のように出てきます：

// if ($user->age >= 20) {
//     // 成人向けの処理
// } else {
//     // 未成年向けの処理
// }
// KOHが今後扱うユーザー情報などでも、「ある条件で表示内容を切り替える」処理の基本になる形です。


// ☑ PHPミニテスト 第2問（テーマ：戻り値 × 否定 × 条件分岐）
// 関数 isBlacklisted は、引数のメールアドレスが "banned@example.com" なら true を返します。
// それ以外の場合は false を返します。

// function isBlacklisted($email)
// {
//     return $email === "banned@example.com"; // 型まで"banned@example.com"と完全一致のみ、trueを返す。
// }

// $email = "user@example.com";  // 完全一致していないので、falseを返す。

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if (!isBlacklisted($email)) { // 「！」によって（！false）を返す。
//     echo "アクセス許可<br>";
// } else {
//     echo "アクセス拒否<br>";
// }

// 🔘【選択肢】
// A. アクセス許可<br>
// B. アクセス拒否<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：A.アクセス許可<br>


// **PHPミニテスト 第2問、正解は A「アクセス許可<br>」**で正解です。

// ✅ 採点結果
// 評価項目 	        判定	        コメント
// 関数の戻り値の理解	✅	"user@example.com" は一致しない → false を返す判断はOK
// 否定演算子 ! の扱い	✅	!false → true によって if文の中へ入る流れを正しく説明
// 表示内容の選択	    ✅ Aを正解として選択	選択肢の意味も明確に理解されています

// 🔍 ポイント復習：今回の流れ
// $email = "user@example.com";

// ↓ isBlacklisted($email) の戻り値は false
// ↓ !false → true
// ↓ if 文の中に入る → アクセス許可<br> を表示

// 💡 Laravelでの類似例
// Laravelでもこのようなロジックは多く登場します：

// if (!in_array($user->email, $bannedEmails)) {
//     // 許可された処理を行う
// }
// つまり「ブラックリストに入っていないなら許可」という形の判定は実務でも頻出です。



// ☑ PHPミニテスト 第3問（テーマ：戻り値 × 論理演算子 × 条件分岐）
// 関数 isAdult と isMember を使って、両方の条件を満たす場合のみ「入場許可」を出す判定です。

// function isAdult($age)
// {
//     return $age >= 18;  // 18歳以上のみtrueを返す。
// }

// function isMember($status)
// {
//     return $status === "member"; // "member"完全一致のみtrueを返す。
// }

// $age = 20; // trueを返す。
// $status = "guest"; // falseを返す。

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if (isAdult($age) && isMember($status)) { // 「&&」なので両方の条件を満たした場合のみtrueを返す。年齢（20）はtrue。statusはfalse。true & false
//     echo "入場許可<br>";
// } else {
//     echo "入場できません<br>";
// }

// 🔘【選択肢】
// A. 入場許可<br>
// B. 入場できません<br>
// C. エラーが発生する
// D. 何も表示されない

// // 回答：B.入場できません<br>


// **PHPミニテスト 第3問、正解は B「入場できません<br>」**で完全正解です。

// ✅ 採点結果

// 評価項目	        判定	            コメント
// 関数ごとの戻り値	    ✅	isAdult(20) → true、isMember("guest") → false の判断が正確
// 論理演算子 && の理解	✅	true && false → false で else に進む流れが明確に説明されています
// 選択肢の選定	        ✅    正解：B	表示内容をきちんと追えています

// 🔍 解説まとめ
// // ⓵ isAdult($age) → 20 >= 18 → true
// // ⓶ isMember($status) → "guest" === "member" → false
// // ⓷ true && false → false → else ブロックへ
// // → 表示：入場できません<br>

// 💡 Laravel的な類似パターン
// if ($user->age >= 18 && $user->status === 'member') {
//     // サービス利用許可
// } else {
//     // 利用制限
// }
// このような 「複数の条件をまとめて判定」 する処理は、バリデーション、アクセス制御、表示切り替えなどLaravelでは日常的に使われます。



// ☑ PHPミニテスト 第4問（テーマ：連想配列 × 値の条件分岐）
// 連想配列 $userData を使って、登録されているメールアドレスをもとにログイン判定を行います。

// $userData = [
//     "name" => "Kenta",
//     "email" => "guest@example.com",
//     "role" => "guest"
// ];

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if ($userData["email"] === "admin@example.com") { // "email"] === "admin@example.com"が完全一致のみtrueを返す。今回はfalseを返す。elseに進む。
//     echo "管理者としてログイン<br>";
// } else {
//     echo "一般ユーザーとしてログイン<br>";
// }

// 🔘【選択肢】
// A. 管理者としてログイン<br>
// B. 一般ユーザーとしてログイン<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：B.一般ユーザーとしてログイン<br>


// **PHPミニテスト 第4問、正解は B「一般ユーザーとしてログイン<br>」**で正解です。

// ✅ 採点結果
// 評価項目	       判定	            コメント
// 連想配列の扱い	✅	$userData["email"] の値参照が正しく理解できています
// 比較の理解	    ✅	=== による「完全一致」で false → else に進む判断が明確
// 表示内容の選定	✅ 正解：B	if〜else の表示処理を正しく追えています

// 🔍 解説まとめ
// $userData["email"] の値は "guest@example.com"
// 比較対象は "admin@example.com"
// → 一致しない → false → else に進む
// 表示：一般ユーザーとしてログイン<br>

// 💡 Laravel的な応用場面（現実の判定）
// Laravelではこのような配列ではなくEloquentオブジェクトになりますが、同じ発想です：

// if ($user->email === 'admin@example.com') {
//     // 管理者向け処理
// } else {
//     // 一般ユーザー処理
// }
// **「特定の属性値に基づいて処理を分岐する」**という考え方は、今後ログイン・権限判定などで頻出します。



// ☑ PHPミニテスト 第5問（テーマ：戻り値 × 否定 × ネスト構造）
// ブラックリストに入っているユーザーを除外する処理です。

// function isBanned($status)
// {
//     return $status === "banned"; // 完全一致のみtrueを返す。
// }

// $status = "banned"; // 完全一致しており、trueを返す。

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if ($status !== "") { //  「!==」なので、「""」ではない場合はtrueを返す。今回は「""」ではなく、"banned"なのでtrueを返す。中のif文に進む。
//     if (!isBanned($status)) { // !true → falseなのでelseに進む。
//         echo "利用可能です<br>";
//     } else {
//         echo "利用できません<br>"; // 利用できません<br>が表示される。
//     }
// } else {
//     echo "ステータス不明<br>";
// }

// 🔘【選択肢】
// A. 利用可能です<br>
// B. 利用できません<br>
// C. ステータス不明<br>
// D. 何も表示されない

// 回答：B.利用できません<br>


// **PHPミニテスト 第5問、正解は B「利用できません<br>」**です。今回も完璧な読み取りでした！

// ✅ 採点結果
// 評価項目	               判定	            コメント
// 外側の条件判定（!== ""）	✅	$status = "banned" → true → 内側へ進む判断が明確
// 内側の否定判定（!isBanned(...)）	✅	isBanned("banned") → true → !true → false の流れを的確に説明
// 表示結果の追跡	        ✅ 正解：B	    elseに進んで「利用できません
// 」が出力される流れを正確に把握

// 🔍 解説まとめ
// $status = "banned";

// 1. $status !== "" → true（空文字ではない）
// 2. isBanned($status) → "banned" なので true
// 3. !true → false → else に進む
// → 結果：「利用できません<br>」が表示される

// 💡 Laravel実務における類似構造
// if ($user->status !== "") {
//     if (!$user->isBanned()) {
//         // 利用許可処理
//     } else {
//         // アクセス制限処理
//     }
// } else {
//     // ステータスが設定されていない場合の処理
// }
// このような「前提を確認しつつ、その中でさらに状態を判定するネスト構造」は、ユーザー管理やアクセス制御などで非常によく使われます。



// ☑ PHPミニテスト 第6問（テーマ：戻り値 × null判定 × 条件分岐）
// ユーザーの情報が存在するかどうかを確認し、表示内容を切り替える処理です。

// function findUser($id)
// {
//     if ($id === 1) { // idが「１」と完全一致のみtrueを返す。
//         return "ユーザー情報データ";
//     }
//     return null;
// }

// $user = findUser(2); // idが「１」ではないのでfalse。return nullに進む。

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if ($user !== null) { // 「null」以外の場合、trueを返す。今回は「null」なのでfalseを返し、elseに進む。「ユーザーが存在しません<br>」を表示する。
//     echo "ユーザーが見つかりました<br>";
// } else {
//     echo "ユーザーが存在しません<br>";
// }

// 🔘【選択肢】
// A. ユーザーが見つかりました<br>
// B. ユーザーが存在しません<br>
// C. エラーが発生する
// D. 何も表示されない

// // 回答：B.ユーザーが存在しません<br>


// **PHPミニテスト 第6問、正解は B「ユーザーが存在しません<br>」**で大正解です。

// ✅ 採点結果
// 評価項目	           判定	        コメント
// 戻り値の判定（null）	✅	findUser(2) の戻り値が null になる理由を正確に説明できています
// !== null の評価	    ✅	null !== null → false により else に進む理解が明確です
// 表示内容の選択	    ✅ 正解：B	表示結果の読み取りも完璧です

// 🔍 解説まとめ
// $user = findUser(2); // idが1でない → return null
// if ($user !== null) { → false → else に進む
// → 表示：ユーザーが存在しません<br>
// 💡 Laravel的な応用例
// このような処理は、Laravelの find() や first() で非常によく出てきます：

// $user = User::find($id);

// if ($user !== null) {
//     // ユーザーが見つかったときの処理
// } else {
//     // 見つからなかったときの処理（404など）
// }

// KOHがこれからLaravelに入っていく上で、この nullチェック → 条件分岐 は避けて通れない構造なので、
// ここでしっかり定着しているのはとても大きな強みになります☕



// ☑ PHPミニテスト 第7問（テーマ：$_POST × 条件分岐）
// フォームから送信されたデータを受け取り、内容に応じて処理を分岐します。

// 🔧 以下のようなPOST送信があったと仮定します：
// $_POST["email"] = "admin@example.com";

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if ($_POST["email"] === "admin@example.com") { // 完全一致しているのでtrueを返す。
//     echo "管理者のアクセスです<br>";
// } else {
//     echo "一般ユーザーのアクセスです<br>";
// }

// 🔘【選択肢】
// A. 管理者のアクセスです<br>
// B. 一般ユーザーのアクセスです<br>
// C. エラーが発生する
// D. 何も表示されない

// A.管理者のアクセスです<br>


// **PHPミニテスト 第7問、正解は A「管理者のアクセスです<br>」**で正解です。

// ✅ 採点結果
// 評価項目	                判定	    コメント
// スーパーグローバルの読み取り	✅	$_POST["email"] に直接代入された値を読み取れています
// 比較式の評価（===）	✅	値が完全一致 → true → ifブロックに入る流れを正確に判断
// 表示内容の選択	✅ Aを選択	表示内容を含めて正しく出力を予測できています

// 🔍 解説まとめ
// $_POST["email"] = "admin@example.com";

// if ($_POST["email"] === "admin@example.com") {
//     // 条件は true → 表示：管理者のアクセスです<br>
// }

// 💡 Laravelでの応用例
// Laravelでは $_POST を使わず、以下のように Request オブジェクトで同じことを行います：

// if ($request->input('email') === 'admin@example.com') {
//     // 管理者処理
// }

// このように、**「フォームから送られた値で条件を分岐する」**のが、実務で最も多い使い方の一つです。
// KOHがLaravelで Request を使い始めたとき、「これは $_POST と同じだな」と思えるようになることが大切です☕



// ☑ PHPミニテスト 第8問（テーマ：戻り値 × 否定 × 複合条件（発展））
// 特定の条件をすべて満たさない場合に「利用不可」となる処理です。

// function isVerified($email)
// {
//     return $email === "verified@example.com"; // 完全一致のみtrueを返す。
// }

// function isActive($status)
// {
//     return $status === "active"; // 完全一致のみtrueを返す。
// }

// $email = "verified@example.com"; // 完全一致しているのでtrue。
// $status = "banned"; // 完全一致していないのでfalse。
// ここまではtrue & false。

// 🎯【問題】
// 以下のコードを実行したとき、画面には何が表示されますか？

// if (!isVerified($email) || !isActive($status)) { // 「||」なので、どちらか一つの条件を満たせばtrue。！true と ！false。 → false と true。
// よってtrueに進む。利用できません<br>を表示する。
//     echo "利用できません<br>";
// } else {
//     echo "利用可能です<br>";
// }

// 🔘【選択肢】
// A. 利用できません<br>
// B. 利用可能です<br>
// C. エラーが発生する
// D. 何も表示されない

// 回答：A.利用できません<br>


// PHPミニテスト 第8問（発展）、正解は **A「利用できません<br>」**です。

// ✅ 採点結果
// 評価項目	       判定	        コメント
// 各関数の戻り値	✅	isVerified(...) → true、isActive(...) → false の判断が的確
// 否定演算子の評価	✅	!true → false、!false → true の理解が正確
// 複合条件（OR判定）✅	    `false
// 表示結果	        ✅  正解：A	表示内容まで明確に言語化できています


// 🔍 解説まとめ
// $email = "verified@example.com";  // isVerified → true
// $status = "banned";               // isActive → false

// if (!true || !false)
// → if (false || true) → true
// → 表示：利用できません<br>

// 💡 Laravel実務での応用場面（よくある構造）
// if (!$user->isVerified() || !$user->isActive()) {
//     return redirect('/denied');
// }
// KOHが今後取り組むユーザー管理やアクセス制御などで、
// **「どちらかの条件が満たされていないなら拒否」**という判定は非常に頻出します。

// 今回のような論理演算子と否定を含む条件式を自然に読めていることは、Laravel実装において大きなアドバンテージです。

