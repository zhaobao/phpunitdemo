<?php
/**
 * Created by PhpStorm.
 * User: zb
 * Date: 15-6-7
 * Time: 上午9:21
 */

/**
 * @param $path
 * @return string
 */
function getExtensionByPath($path) {
    $offset = strrpos(trim($path), '.') + 1;
    return substr($path, $offset);
}