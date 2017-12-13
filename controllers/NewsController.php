<?php

//require_once __DIR__ . "/../models/News.php";
// вместо этого рнр автоматически вызовет функцию автолоад и будет искать класс с именем $controllerClassName.php


class NewsController
{
    public function actionAll() //получить все новости из базы и вывести
    {
        $items = News::getAll();
        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne() //получить одну новости из базы по ид и вывести
    {
        $id = $_GET['id'];
        $items = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
    }
}