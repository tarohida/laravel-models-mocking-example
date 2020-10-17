<?php

namespace Tests\Unit;

use Tests\TestCase;
use Mockery;
use App\Models\ExampleModelUse;

class ExampleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    // ExampleModelのmethod_do_not_exists()メソッドをモックする
    $mock = Mockery::mock('overload:App\Models\ExampleModel');
    $mock->shouldReceive('method_do_not_exists')
        ->once()->andReturn('mocked_value');

    echo "\n---- \$mock の中身を出力 ----\n";
    var_dump($mock);
    echo "-------------------------------";

    // テスト対象のメソッドを呼び出して，assertする
    $example_ret_value = ExampleModelUse::method_to_be_tested();
    $this->assertSame('mocked_value', $example_ret_value);
    }
}
