# template_ph3_website_private

## 環境構築手法

以下の内容を、.env.exampleと同じ階層に.envファイルを作成し、貼り付けてください。
```console
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:yVzcgQHV4yTgrXrv7f0/nJ1WSM1ul0kfnle9KDyx6rI=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=website
DB_USERNAME=root
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```


## 以下のコマンドを一行ずつ実行してください

```console
docker-compose build --no-cache
docker-compose up -d
docker-compose exec app sh
```

以下は、shでappコンテナの中に入ったと思うので、そこで実行してください
```console
composer install
php artisan migrate:refresh --seed
```

これでtailwindを使えるようになります
```console
docker-compose exec node sh
npm install
npm run build

## 以下のURLにアクセスして、画面が表示されたら成功です
http://localhost