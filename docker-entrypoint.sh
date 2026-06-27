#!/bin/bash
set -e

if [ ! -f .env ]; then
    touch .env
fi

if [ -n "$APP_KEY" ]; then
    if ! grep -q "^APP_KEY=" .env; then
        echo "APP_KEY=$APP_KEY" >> .env
    fi
elif ! grep -q "^APP_KEY=" .env; then
    php artisan key:generate --force
fi

php artisan storage:link --force 2>/dev/null || true

php artisan migrate --force 2>/dev/null || true

php artisan config:cache 2>/dev/null || true
php artisan route:cache 2>/dev/null || true
php artisan view:cache 2>/dev/null || true

exec "$@"

# helo
