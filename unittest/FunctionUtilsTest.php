<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 下午5:43
 */

namespace test;
include '../source/FunctionUtils.php';

class FunctionUtilsTest extends \PHPUnit_Framework_TestCase {

    public function testGetExtensionByPath() {
        $this->assertEquals("apk", getExtensionByPath("/a/b/c.apk"));
    }
}
