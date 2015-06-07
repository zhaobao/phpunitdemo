<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 上午9:07
 */

namespace dao;

class ClassApk {

    private $name;
    private $path;

    public function __construct($apkName, $apkPath) {
        $this->name = $apkName;
        $this->path = $apkPath;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($path){
        $this->path = $path;
    }

}