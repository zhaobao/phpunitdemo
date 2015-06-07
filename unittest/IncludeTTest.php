<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 下午5:45
 */

namespace test;
include '../source/IncludeT.php';

class IncludeTTest extends \PHPUnit_Framework_TestCase {

    public function testGetName() {
        $this->assertEquals('zhaobao', getName());
    }
}
