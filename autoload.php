<?php

function __autoload($class)
    /**
     * магическая функция, которая принимает в аргументе имя класса
     * где будет подключен этот модуль, если будет встречаться незнакомое имя класса
     * рнр будет вызывать эту функцию и передавать ей имя этого класса.
     * если класс уже загружен, автолоад не будет загружать
     */
{
    if (file_exists(__DIR__ . '/controllers/' . $class . '.php')){
//        var_dump($class); die;
        require __DIR__ . '/controllers/' . $class . '.php';
    } elseif (file_exists(__DIR__ . '/models/' . $class . '.php')){
        require __DIR__ . '/models/' . $class . '.php';
    } elseif (file_exists(__DIR__ . '/classes/' . $class . '.php')){
        require __DIR__ . '/classes/' . $class . '.php';
    }
}