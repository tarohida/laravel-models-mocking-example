## Enviroment

```
$ php --version
PHP 7.4.5 (cli) (built: Apr 19 2020 07:36:30) ( NTS )
```

```
$ composer info laravel/framework
name     : laravel/framework
descrip. : The Laravel Framework.
keywords : framework, laravel
versions : * v8.10.0
```

Homestead: v10.12.0
OS: Ubuntu18.04 LTS

## how to use

```
git clone https://github.com/tarohida/laravel-models-mocking-example.git
cd laravel-models-mocking-example/
composer install
vendor/bin/phpunit tests/Unit/ExampleTest.php
```

you will get successfull output!

```
$ vendor/bin/phpunit tests/Unit/ExampleTest.php 
PHPUnit 9.4.1 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)
---- $mock の中身を出力 ----
/home/vagrant/blog/laravel-models-mocking-example/tests/Unit/ExampleTest.php:29:
class App\Models\ExampleModel#419 (20) {
  protected $_mockery_expectations =>
  array(1) {
    'method_do_not_exists' =>
    class Mockery\ExpectationDirector#418 (5) {
      protected $_name =>
      string(20) "method_do_not_exists"
      protected $_mock =>
              ...

      protected $_expectations =>
      array(1) {
        ...
      }
      protected $_expectedOrder =>
      NULL
      protected $_defaults =>
      array(0) {
        ...
      }
    }
  }
  protected $_mockery_expectations_count =>
  int(0)
  protected $_mockery_ignoreMissing =>
  bool(false)
  protected $_mockery_deferMissing =>
  bool(false)
  protected $_mockery_verified =>
  bool(false)
  protected $_mockery_name =>
  NULL
  protected $_mockery_allocatedOrder =>
  int(0)
  protected $_mockery_currentOrder =>
  int(0)
  protected $_mockery_groups =>
  array(0) {
  }
  protected $_mockery_container =>
  class Mockery\Container#391 (7) {
    protected $_mocks =>
    array(1) {
      'App\Models\ExampleModel' =>
              ...

    }
    protected $_allocatedOrder =>
    int(0)
    protected $_currentOrder =>
    int(0)
    protected $_groups =>
    array(0) {
    }
    protected $_generator =>
    class Mockery\Generator\CachingGenerator#392 (2) {
      protected $generator =>
      class Mockery\Generator\StringManipulationGenerator#393 (1) {
        ...
      }
      protected $cache =>
      array(1) {
        ...
      }
    }
    protected $_loader =>
    class Mockery\Loader\EvalLoader#407 (0) {
    }
    protected $_namedMocks =>
    array(1) {
      'App\Models\ExampleModel' =>
      string(32) "95c5da8bb7bddd34eca21eca8f6393f1"
    }
  }
  protected $_mockery_partial =>
  NULL
  protected $_mockery_disableExpectationMatching =>
  bool(false)
  protected $_mockery_mockableProperties =>
  array(0) {
  }
  protected $_mockery_mockableMethods =>
  array(0) {
  }
  protected $_mockery_allowMockingProtectedMethods =>
  bool(false)
  protected $_mockery_receivedMethodCalls =>
  NULL
  protected $_mockery_defaultReturnValue =>
  NULL
  protected $_mockery_thrownExceptions =>
  array(0) {
  }
  protected $_mockery_instanceMock =>
  bool(true)
  protected $_mockery_ignoreVerification =>
  bool(true)
}
-------------------------------

Time: 00:00.096, Memory: 20.00 MB

OK (1 test, 2 assertions)
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
