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
    public $resolution;
    public $size;
    public $price;

    public function getinformation() {
        echo "Информация о данном телевизоре : 1.Цена ". $this->price ." 2.Размер: " . $this->size ." 3.Разрешение: " . $this->reslution ;
    }
}
class PencilClass
{
    public $color;
    public $lifetime;
    public $price;

    public function getinformation() {
        echo "Информация о данном телевизоре : 1.Цена ". $this->price ." 2.Цвет чернил: " . $this->color ." 3.Срок службы: " . $this->lifetime ;
    }
}
class TVClass
{
    public $resolution;
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




$tvone = new CarClass;
$carone->size = 'Большой';
$carone->price = 'Дорогой';
$carone->reslution = 'FullHD';

$tvtwo = new CarClass;
$carone->size = 'Маленький';
$carone->price = 'Дешёвый';
$carone->reslution = 'HD';




$penciloneone = new CarClass;
$carone->size = 'Большой';
$carone->price = 'Дорогой';
$carone->reslution = 'FullHD';

$penciltwo = new CarClass;
$carone->size = 'Маленький';
$carone->price = 'Дешёвый';
$carone->reslution = 'HD';
