<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelperTest extends TestCase
{
    public function testSum() {
        $data = [1,2,3];
        $result = Helper::sum($data);
        $this->assertEquals(6, $result);
    }
}

class Helper {
    public static function sum($arr) { return array_sum($arr); }
}
