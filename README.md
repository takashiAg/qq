下のコマンドで動きます
`docker`と`docker-compose`をつかってphp動かしてください

```
git clone https://github.com/takashiAg/qq
cd qq
docker-compose build
docker-compose up
```

phpを通常通りインストールする形でも構いません。phpサーバーあれば、ドキュメントルートが`./source`になってるのでそれを`/var/www/html`とかにしてください。

```bash:bash
git clone https://github.com/takashiAg/qq
cd qq
cp -r source/* /var/www/html/ # (default)
# or "cp -r source/* /path/to/apacherootdirectory/"
# maybe needs sudo
```