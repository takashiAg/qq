下のコマンドで動きます
`docker`と`docker-compose`をつかってphp動かしてください

```
git clone https://github.com/takashiAg/qq
cd qq
docker-compose build
docker-compose up
```

phpを通常通りインストールする形でも構いません。phpサーバーあれば、ドキュメントルートが`./source`になってるのでそれを`/var/www/html`とかにしてください。\\
