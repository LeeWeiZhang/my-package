<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use WeiZhang\MyPackage\Addition;

class AdditionTest extends TestCase
{
    public function test_add()
    {
        $addition = new Addition(1,2,3);
        $result = $addition->getSum();

        $this->assertEquals(6, $result);
    }
}