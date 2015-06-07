<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 下午5:23
 */

namespace test;
use dao\ClassStringUtils;

include "../source/ClassStringUtils.php";

class ClassStringUtilsTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider trimStringProvider
     */
    public function testTrimString($expected, $input) {
        $this->assertEquals($expected, ClassStringUtils::trimString($input));
    }

    public function testGetExtensionByPath() {
        $this->assertEquals('jpg', ClassStringUtils::getExtensionByPath('a/b/c.jpg'));
    }

    public function trimStringProvider() {
        return array(
            array('abc', 'abc      '),
            array('abc', '      abc')
        );
    }
}
