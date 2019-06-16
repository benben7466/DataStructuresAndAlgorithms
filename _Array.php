<?php
/**
 * User: 贲志强
 * Date: 2019/6/15
 * Description: 实现数组的增删改查
 */

$_array = [];

init();

//find(2);//实现查找
insert(7, 4);//实现新增

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

//插入
function insert($idx, $val)
{
    checkIndex($idx, $_is_insert = true);

    global $_array;
    $_count = count($_array);

    for ($i = $_count - 1; $i >= $idx; $i--) {
        $_array[$i + 1] = $_array[$i];
    }

    $_array[$idx] = $val;

    output($_array);

}

//检测
function checkIndex($idx, $is_insert = false)
{
    global $_array;

    if (!is_int($idx)) {
        exit("index format error");
    }

    $idxMaxLength = count($_array) - 1;//默认查找操作
    if ($is_insert) {//如果是插入操作
        $idxMaxLength = count($_array);
    }

    if ($idx < 0 || $idx > $idxMaxLength) {
        exit("index overflow");
    }
}

//打印
function output($_obj)
{
    print_r($_obj);
}