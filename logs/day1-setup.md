※　このページでは、PHP復習環境（Docker）の初期セットアップを記録しています。

### ✅ 実施内容

- DockerベースのシンプルなPHP開発環境を構築
- Laravel環境ではなく、PHP単体で学習できる構成
- コンテナは1つ【PHPのみ】
- `src/`ディレクトリでコードを作成・実行
- GitHubへ初回コミット済み

### 🔗 GitHub リンク

- [GitHubリポジトリ](https://github.com/kohsai/php-practice)

---

### 📂 ディレクトリ構成（Day1時点）

```
php-practice/
├── docker/
│   └── php/
│       └── Dockerfile           ← PHPのDocker環境構築
├── docker-compose.yml          ← コンテナ定義（PHPのみ）
├── src/
│   └── index.php               ← 初回のPHP実行確認用（現在は day2/に整理）
├── README.md                   ← 環境説明と学習ログリンク
```

---

### 💬 補說メモ

- Laravelではなく、**PHP単体で復習や出力確認ができる構成**
- WebサーバーやDBは不要のため、`php -S localhost:8000` で簡易動作確認
- 最初は `src/index.php` にコードを書いていたが、**dayごとに整理するためフォルダ分けに移行**
- 今後の学習内容は `src/day2/index.php` のように日付別に保存

