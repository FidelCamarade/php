<?php

require_once __DIR__ . '/autoload.php'; //там функция которая будет пытаться искать классы по названию файла

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';
//require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
// вместо этого рнр автоматически вызовет функцию автолоад и будет искать класс с именем $controllerClassName.php
$controller = new $controllerClassName; // тут нужно было ставить скобки, но они не обязательны, если мы ничего не передаём в констркутор
$method = 'action' . $act;

$controller->$method();

//var_dump($items);