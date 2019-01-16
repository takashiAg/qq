下のコマンドで動きます
```
git clone https://github.com/takashiAg/qq
cd qq/source
npm install 
npm start
```

phpサーバーあれば、ドキュメントルートが`./source`になってるのでそれを`/var/www/html`とかにしてください。\\
もしもphpが入ってなければ、インストールするかdockerとdocker-composeをつかってphp動かしてください
```
git clone https://github.com/takashiAg/qq
cd qq/source
docker-compose up
```