<?php

return [
    'db' => [
        'database' => (env('APP_ENV') == 'local') ? env('DB_DATABASE') : 'bean1344_mouny_laravel',
        'username' => (env('APP_ENV') == 'local') ? env('DB_USERNAME') : 'bean1344_mouny',
        'password' => (env('APP_ENV') == 'local') ? env('DB_PASSWORD') : 'qVzrda57AAnK',
    ],
    'mail' => [
        'host' => (env('APP_ENV') == 'local') ? env('MAIL_HOST') : 'mail.mouny.fr',
        'port' => (env('APP_ENV') == 'local') ? '2525' : '465',
        'username' => (env('APP_ENV') == 'local') ? env('MAIL_USERNAME') : 'contact@mouny.fr',
        'password' => (env('APP_ENV') == 'local') ? env('MAIL_PASSWORD') : 'UPZIIqFuktj6',
    ],
    'site' => [
        'name' => env('APP_NAME'),
        'acronyme' => 'JDM', // Jeu de Mouny
        'keywords' => ', PACA, bouches-du-rhône, 13',
        'url' => (env('APP_ENV') == 'local') ? env('APP_URL') : 'https://www.mouny.fr/',
        'url_private' => 'https://www.private.mouny.fr/',
    ],
    'info' => [
        'author' => 'Mouny',
        'fullname' => 'Harmony Tessier',
        'firstname' => 'Harmony',
        'lastname' => 'Tessier',
        'pseudo' => 'Mouny',
        'address' => 'Résidence la rose des vents, route de la plage, 13700 MARIGNANE',
        'region' => 'PACA',
        'department' => 'Bouches-du-rhône (13)',
        'city' => 'Marignane',
        'GPS' => '43.07442048101067, 2.21718812548963', // 45.847266, 3.529116
        'phone' => '07 45 07 55 78',
        'mail' => 'contact@mouny.fr',
        'mail_angelique' => 'mouny@gmail.com',
        'mail_jeremy' => 'bey.jeremy@gmail.com',
        'siret' => '793 849 70400044',
    ],
    'path' => [
        'css_front' => 'asset/front/css/',
        'css_back' => 'asset/tinydash/css/',
        'js_front' => 'asset/front/js/',
        'js_back' => 'asset/tinydash/js/',
        'vendor' => 'asset/vendor/',
        'img_avatars' => 'asset/img/avatars/',
        'img_favicons' => 'asset/img/favicons/',
        'img_logos' => 'asset/img/logos/',
        'img_portfolio' => 'asset/img/portfolio/',
        'img_partnership' => 'asset/img/website/partnership/',
        'img_prices' => 'asset/img/website/prices/',
        'img_techniques' => 'asset/img/website/techniques/',
        'img_website' => 'asset/img/website/',
        'pdf' => 'pdf/',
    ],
    'social' => [
        'fb_app_id' => '379087299216903',
        'facebook' => 'https://www.facebook.com/Mouny/',
        'github' => 'https://github.com/tigrouuu',
        'instagram' => 'https://instagram.com/mouny',
    ],
    'google' => [
        'analytics' => 'UA-166288335-1',
        'tag-manager' => 'GTM-TRDFS7X',
        'recaptcha-public' => (env('APP_ENV') == 'local') ? '6LeR1_cUAAAAAPFIjqc2HGWBFEeFsUJUPCkGGwH1' : '6LfWu_QUAAAAAAks0-Ol5mLiK1pzzVKNDfaHlJam',
        'recaptcha-secret' => (env('APP_ENV') == 'local') ? '6LeR1_cUAAAAALpCuZb6XiIaBJZmrTx804o_N4Lt' : '6LfWu_QUAAAAAPnovtKR_09B6vLYM0Zl62LXBEiI',
    ],
    'stripe' => [
        'public' => 'pk_test_51IPAl0EO1J6LawILWi0GFHDHTgm1h6PsuTrfcyUHwLloWJtjPGPFub3vQ4ANuptCSyCPTVKsweFydkRisD06NSJF00PhC4H5nr',
        'secret' => 'sk_test_51IPAl0EO1J6LawILhQgHGKDgye2ykLl10IHGU1dzMrKEFSqgbNoyL5rpxFs0DlGG2pKIuJv3l2REJYvCYH3izAUI00wzjuA1qy',
    ],
];
