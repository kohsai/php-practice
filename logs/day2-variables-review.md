## Day2 - Variables Review：変数・定数・条件分岐・時刻設定など

### ✅ 学習トピックまとめ（教材 + 応用 + Ven との Q&A）

---

### 1. 変数とは？

- データを入れておく「箱」
- `$name = "KOH";` のように `$` を先頭に付けて使用
- **再代入が可能**（上書きされる）

```php
$name = "JavaScript";
$name = "PHP";
echo $name; // => PHP
```

---

### 2. 定数とは？（const / define）

#### 🧱 定数は「変えられない値」＝固定値を保持する

- `const`：静的定義。**関数の外**でのみ使用可能。
- `define()`：動的定義。**関数の中でも使用可能**。

```php
// const の例
const APP_NAME = "KOH's App";
echo APP_NAME;

// define の例
function setCreator() {
    define("CREATOR", "KOH");
    echo "このアプリの作成者は" . CREATOR . "です。";
}
setCreator();
```

---

### 3. .（ドット）演算子とは？（連結演算子）

- 文字列や変数を **くっつける** 演算子

```php
$name = "KOH";
echo "こんにちは、" . $name . "さん。"; // => こんにちは、KOHさん。
```

---

### 4. 関数の「中」と「外」

- `const` は**関数の外でのみ使える**（構文エラー回避）
- `define()` は**関数の中でも OK**（動的定義）

---

### 5. 静的（static）と動的（dynamic）

| 比較           | const（静的）          | define（動的）          |
| -------------- | ---------------------- | ----------------------- |
| 定義タイミング | スクリプトの読み込み時 | 実行中に決定            |
| 柔軟性         | 低い（条件分岐不可）   | 高い（関数内/条件内可） |

```php
// 動的な定数定義（条件分岐）
$hour = date("H");
if ($hour < 12) {
    define("GREETING", "おはようございます");
} elseif ($hour < 18) {
    define("GREETING", "こんにちは");
} else {
    define("GREETING", "こんばんは");
}
echo GREETING;
```

---

### 6. PHP で現在の時刻を扱う

- PHP はデフォルトで **UTC（世界標準時）** を使用する
- **日本時間を使いたい場合：**

```php
// 日本時間に設定
date_default_timezone_set("Asia/Tokyo");
echo "現在の時刻：" . date("H:i:s");
```

#### Laravel との違い：

Laravel では `config/app.php` 内の設定を変更：

```php
'timezone' => 'Asia/Tokyo',
```

設定変更後は以下を実行：

```bash
php artisan config:clear
```

---

### 7. Day2 のまとめ

- 変数・定数の違いと使い分け
- ドット演算子による文字列結合
- `const` と `define` の違い（使用場所・タイミング）
- 静的と動的な処理のイメージ
- 時刻の扱い（PHP / Laravel）

---

## 🔁 今後の運用案

- `day2-variables-review` ブランチをそのまま残して OK
- 「Day〇〇」の作業ごとにブランチを切ることで、進捗が振り返りやすくなる
- `main` への統合は、「Day〇〇」ブランチを終了するときで OK
- 学んだ内容を `README.md` にまとめて記録すると共有にも ◎

-‐‐