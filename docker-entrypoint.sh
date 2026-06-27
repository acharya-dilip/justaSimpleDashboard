#!/bin/bash
set -e

touch .env

if [ -n "$APP_KEY" ]; then
    if grep -q "^APP_KEY=" .env; then
        sed -i "s@^APP_KEY=.*@APP_KEY=$APP_KEY@" .env
    else
        echo "APP_KEY=$APP_KEY" >> .env
    fi
fi

if ! grep -q "^APP_KEY=" .env || grep -q "^APP_KEY=$" .env; then
    if ! grep -q "^APP_KEY=" .env; then
        echo "APP_KEY=" >> .env
    fi
    php artisan key:generate --force
fi

php artisan storage:link --force 2>/dev/null || true
php artisan migrate --force 2>/dev/null || true

rm -f bootstrap/cache/config.php bootstrap/cache/routes-v7.php bootstrap/cache/packages.php

php artisan config:cache 2>/dev/null || true
php artisan route:cache 2>/dev/null || true
php artisan view:cache 2>/dev/null || true

exec "$@"

# helo
