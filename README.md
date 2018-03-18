# explodan
Bachelor project for webdev 2017
[Invisionapp prototype](https://invis.io/Y6DCT9HKA)

### Quick start
`npm i`

`composer install`

### Algolia search 

Setup Laravel Scout


`composer require laravel/scout`


`composer require algolia/algoliasearch-client-php`


`php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"`


Manually import data from model to Algolia

`php artisan scout:import "App\Post"`
