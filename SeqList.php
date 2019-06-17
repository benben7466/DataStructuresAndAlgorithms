<?php

/**
 * User: 贲志强
 * Date: 2019/6/15
 * Description: 顺序表的实现
 *
 * 顺序表基本操作
 *
 * 1.顺序表任意位置插入元素       add
 * 2.删除某一位置的元素（保序）   delItem
 * 3.修改某一位置的元素          setItem
 * 4.获取某一位置的元素          getItem
 * 5.顺序表是否为空            isEmpty
 * 6.统计元素的个数            count
 * 7.顺序表末尾插入元素          append
 * 8.输出顺序表                 output
 * 9.销毁顺序表                 clear
 *
 */
class SeqList
{
    private $num;//元素个数
    private $item;//具体元素

    public function __construct()
    {
        $this->num = 0;
        $this->item = [];
    }

    public function add($index, $value)
    {
        if (!is_int($index)) {
            exit("index format error");
        }

        if ($index < 0 || $index > $this->num) {
            exit("index overflow");
        }

        for ($i = $this->num - 1; $i >= $index; $i--) {
            $this->item[$i + 1] = $this->item[$i];
        }

        $this->item[$index] = $value;
        $this->num++;

    }

    public function delItem($index)
    {
        if (!is_int($index)) {
            exit("index format error");
        }

        if ($index < 0 || $index >= $this->num) {
            exit("index overflow");
        }

        for ($i = $index; $i < $this->num - 1; $i++) {
            $this->item[$i] = $this->item[$i + 1];
        }

        $this->num--;

    }

    public function setItem($index, $value)
    {
        if (!is_int($index)) {
            exit("index format error");
        }

        if ($index < 0 || $index >= $this->num) {
            exit("index overflow");
        }

        $this->item[$index] = $value;
    }

    public function getItem($index)
    {
        if (!is_int($index)) {
            exit("index format error");
        }

        if ($index < 0 || $index >= $this->num) {
            exit("index overflow");
        }

        return $this->item[$index];
    }

    public function isEmpty()
    {
        if ($this->num <= 0) {
            return true;
        }

        return false;
    }

    public function count()
    {
        return $this->num;
    }

    public function append($value)
    {
        $this->item[$this->num] = $value;
        $this->num++;
    }

    public function output()
    {
        for ($i = 0; $i < $this->num; $i++) {
            echo $this->item[$i] . '<br/>';
        }
    }

    public function clear()
    {
        $this->__construct();
    }

}


$listObj = new SeqList();
$listObj->add(0, '1');
$listObj->add(1, '2');
$listObj->add(2, '3');

$listObj->delItem(1);

$listObj->output();