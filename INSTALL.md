# Use git clone

```
git clone https://github.com/tigrouuu/mouny_app.git
cd ./mouny-app && sail build --no-cache
sail up -d
php artisan migrate:refresh --seed
```

Update hosts's file with `sudo nano etc/hosts` :
```
127.0.0.1 mouny-app
127.0.0.1 mysql
```

# Or follow the steps to achieve the same result

## Laravel 11 fresh install

Sail on Linux (Ubuntu with Docker) :
```
curl -s https://laravel.build/mouny-app | bash
```

Modify .env :
```
APP_URL=http://mouny-app

APP_LOCALE=fr
APP_FALLBACK_LOCALE=fr
APP_FAKER_LOCALE=fr_FR

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

Modify docker-compose.yml to add phpMyAdmin :
```
laravel.test:
    build:
        ...
    depends_on:
        ...
        - phpmyadmin

phpmyadmin:
    image: "phpmyadmin:latest"
    ports:
        - 8080:80
    networks:
        - sail
    environment:
        - PMA_ARBITRARY=1
```

```
cd ./mouny-app && sail build --no-cache
sail up -d
php artisan migrate:refresh --seed
php artisan storage:link
```

Update hosts's file with `sudo nano etc/hosts` :
```
127.0.0.1 mouny-app
127.0.0.1 mysql
```

## How to launch the application

```
sail up -d
sail down -v
```

Or :
```
sail up
sail stop
sail down
docker stop $(docker ps -aq)
docker compose down -v
```

## Links

Link to use all site functions :

- [The site link](http://mouny-app/)
- [phpMyAdmin](http://mouny-app:8080/)
- [Mailpit](http://mouny-app:8025/)

## Git

Initialize git and push code for the first time :
```
git init
git branch -m master main
git branch
git status
git push -u origin main
git add .
git commit -m "Laravel 11 fresh install"
git remote add origin https://github.com/tigrouuu/mouny_app.git
git pull origin main --rebase
git push -u origin main
git push origin --delete master
```
## Install MaryUI

MaryUI / Volt :
```
composer require robsontenorio/mary
php artisan mary:install
npm run dev
php artisan migrate
```

`yarn add --D daisyui tailwindcss postcss autoprefixer`

Then, install Breeze
