<?php

/**
 * 对直接的输出进行测试
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 下午5:37
 */

namespace test;


class EchoStringTest extends \PHPUnit_Framework_TestCase {

    public function testEcho() {
        $this->expectOutputString('echo');
        include '../source/EchoString.php';
    }

}
