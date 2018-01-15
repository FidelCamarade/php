<?php

/**
 * Interface IModel - контракт, в котором указано какие методы обязан содержать класс, который будет реализовывать этот договор
 * методы нужно только объявить, описание методов будет в классах уже
 * объявляться методы могут только как PUBLIC
 */
interface IModel
{
    public static function getAll();
    public static function getOne($id);
}