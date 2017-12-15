<?php

//require_once __DIR__ . "/../models/News.php";
// вместо этого рнр автоматически вызовет функцию автолоад и будет искать класс с именем $controllerClassName.php


class NewsController
{
    public function actionAll() //получить все новости из базы и вывести
    {
        $news = News::getAll();
        $view = new View();
//        $view->assign('items', $news); // уже не нужен, используется сеттер
        $view->items = $news;

        $view->display('news/all.php');
//        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne() //получить одну новости из базы по ид и вывести
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
//        $view->assign('item', $item); // уже не нужен, используется сеттер
        $view->item = $item;
        $view->display('news/one.php');
//        include __DIR__ . '/../views/news/one.php';
    }
}