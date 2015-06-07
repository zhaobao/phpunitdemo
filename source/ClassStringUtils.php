<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 上午9:17
 */

namespace dao;


class ClassStringUtils {

    public static function trimString($string) {
        return trim($string);
    }

    public static function getExtensionByPath($path) {
        $offset = strrpos(trim($path), '.') + 1;
        return substr($path, $offset);
    }

}