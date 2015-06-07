<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 上午9:08
 */

namespace test;
use dao\ClassApk;

include '../source/ClassApk.php';


class ClassApkTest extends \PHPUnit_Framework_TestCase {

    private $apk;

    protected function setUp() {
        $this->apk = new ClassApk("apkName", "apkPath");
    }

    public function testSetName() {
        $this->apk->setName("Name");
        $this->assertEquals("Name", $this->apk->getName());
    }

    public function testSetPath() {
        $this->apk->setPath("Path");
        $this->assertEquals("Path", $this->apk->getPath());
    }

    protected function tearDown() {
        unset($this->apk);
    }

}