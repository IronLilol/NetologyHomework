<?php
class CarClass
{
    public $color;
    public $size;
    public $price;
    public $country;

    public function getinformation() {
        echo "Информация о данной машине: 1.Цена ". $this->price ." 2.Размер: " . $this->size ." 3.Цвет: " . $this->price ." 4.Страна производитель: " . $this->country ;
    }
}
class TVClass
{
    public $reslution;
    public $size;
    public $price;

    public function getinformation() {
        echo "Информация о данном телевизоре : 1.Цена ". $this->price ." 2.Размер: " . $this->size ." 3.Разрешение: " . $this->reslution ;
    }
}
$carone = new CarClass;
$carone->color = 'Красный';
$carone->size = 'Большая';
$carone->price = 'Дорогая';
$carone->country = 'Китай';


$cartwo = new CarClass;
$carone->color = 'Зелёный';
$carone->size = 'Среди';
$carone->price = 'Дешёвая';
$carone->country = 'Россия';


$TVOne = new CarClass;
$carone->size = '';
$carone->price = 'Дешёвая';
$carone->country = 'Россия';
