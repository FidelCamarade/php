<?php

class View
{
//    const PATH = __DIR__ . '/../views/';

    protected $data = array();

    public function __set($name, $value) //в параметрах имя несущесвтующего свойства и то, что ему пытаются передать
    {
        /**
         * //если в коде происходит попытка присвоить несуществующему свойству значение,
         * то вызывается сеттер (магический метод __set с параметреми имя не найденного свойства и передаваемое значение
         * и создаёт эмулирует создание этого свойства проделывая операции указанные в определении метода
         */
        $this->data[$name] = $value;
        // TODO: Implement __set() method.
    }

    public function assign($name, $value) // больше не нужен, т.к. заменён на сеттер
    {
        $this->data[$name] = $value; //назначает нужной нам переменной входящий массив (массив объектов новостей, например)
    }

    public function render($template)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;  //переменная, имя которой содержится в переменной
        }
        ob_start();
//        include PATH . $template;
        include __DIR__ . '/../views/' . $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}