FROM php:8.2-cli

WORKDIR /app

# ソースコードをコンテナ内にコピー
COPY ./src /app

EXPOSE 8000

# コンテナ起動時に index.php を実行
CMD ["php", "-S", "0.0.0.0:8000"]
