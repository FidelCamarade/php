<?php

//require_once __DIR__ . '/../classes/DB.php';
// вместо этого рнр автоматически вызовет функцию автолоад и будет искать класс с именем $controllerClassName.php

class News
    extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'news'; // нужен для yнаследованного от AbstractModel метода getAll
    protected static $class = 'News'; // нужен для yнаследованного от AbstractModel метода getAll

    /**
     * от родительского класса AbstractModel наследуется два метода: getAll и getOne
     * Это позволяет в будущем легко создавать новые модели:
     * - создаём новый класс наследующий AbstractModel
     * - перечисляем поля, которые есть
     * - указывает имя таблицы с данными
     * - указываем имя класса
     */
}