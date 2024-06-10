## Links

Link to use all site functions :

- [The site link](http://mouny-app/)
- [phpMyAdmin](http://mouny-app:8080/)
- [Mailpit](http://mouny-app:8025/)

## How to install the application

MaryUI / Volt :
```
php artisan mary:install
npm run dev
php artisan migrate
```

`yarn add --D daisyui tailwindcss postcss autoprefixer`

Then, install Breeze

## How to launch the application

```
sail up -d
sail stop
sail down
docker stop $(docker ps -aq)
docker compose down -v
sail down -v
```

## License

The Mouny-app is under the [MIT license](https://opensource.org/licenses/MIT).


## Ordre d'installation

- `curl -s https://laravel.build/mouny-app | bash`
- `sudo nano etc/hosts`, add : `127.0.0.1 mouny-app 127.0.0.1 mysql`
- `cd ./mouny-app && sail build --no-cache`
- `sail up -d`
- `php artisan migrate:refresh --seed`




- `ez`, then `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`
