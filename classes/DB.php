<?php

class DB
{
    public function __construct() // конструктор: метод, автоматически запускаемый при создании объекта
    {
        mysql_connect('localhost', 'terrian', '1sWUL3Jg');
        mysql_select_db('camarade');
    }

    public function queryAll($sql, $class = 'stdClass') //параметр класса делаем необязательным (по умолчанию - стандартный класс)
    {
        $res = mysql_query($sql);
        if (false === $res) { // (!$res) - идентично?
            return false;
        }
        $ret = array();
        while ($row = mysql_fetch_object($res, $class)){ //возвращает результаты в виде объекта (как экз. класса stdClass или того, что будет передан методу
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }
}