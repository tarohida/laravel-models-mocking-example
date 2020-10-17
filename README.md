## how to use

```
git clone https://github.com/tarohida/laravel-models-mocking-example.git
composer install
vendor/bin/phpunit tests/Unit/ExampleTest.php
```

## how it was made

```
$ history
  208  laravel new blog
  209  cd blog/
  211  git init
  212  git add -A
  243  git commit -m 'initial commit'
  215  php artisan make:model ExampleModel
  216  php artisan make:model ExampleModelUse
  223  vi app/Models/ExampleModel.php 
  224  vi app/Models/ExampleModelUse.php 
  239  vi tests/Unit/ExampleTest.php 
  251  phpunit ./tests/Unit/ExampleTest.php 
  252  git add -A
  253  git commit -m 'モック成功!'
  254  git remote add origin https://github.com/tarohida/laravel-models-mocking-example.git
  255  git branch -M main
  263  git push -u origin main
  266  history
```

## special thanks

- **https://stackoverflow.com/questions/26304009/mocking-an-eloquent-model**

### and...

- https://medium.com/@sameernyaupane/php-test-driven-development-part-4-enter-the-mock-106b4fdedd00
- https://readouble.com/laravel/8.x/ja/mocking.html

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
