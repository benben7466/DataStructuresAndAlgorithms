<?php
/**
 * User: 贲志强
 * Date: 2019/6/15
 * Description: 实现数组的增删改查
 */

$_array = [];

init();

find(2);//实现查找

//初始化数据
function init()
{
    global $_array;
    $_array = [5, 3, 9, 6, 1, 3, 7];
}

//查找
function find($idx)
{
    checkIndex($idx);

    global $_array;
    $cur = $_array[$idx];

    output($cur);
}

//检测
function checkIndex($idx)
{
    global $_array;

    if (!is_int($idx)) {
        exit("index format error");
    }

    $idxMaxLength = count($_array) - 1;
    if ($idx < 0 || $idx > $idxMaxLength) {
        exit("index overflow");
    }
}

//打印
function output($_obj)
{
    print_r($_obj);
}