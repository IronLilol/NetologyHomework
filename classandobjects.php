<?php
//ошибки исправить когда верунсь: 1.выдаёт мол не задана функция 2.Посмотреть что выводит когда с функцией разберусь
class CarClass
{
    public $color;
    public $size;
    public $price;
    public $country;

    public function getInfo()
    {
        echo "Информация о данной машине: 1.Цена ". $this->price ." 2.Размер: " . $this->size ." 3.Цвет: " . $this->price ." 4.Страна производитель: " . $this->country ;
        ?> <br/> <?
    }
}
class TVClass
{
    public $resolution;
    public $size;
    public $price;

    public function getInfo()
    {
        echo "Информация о данном телевизоре : 1.Цена ". $this->price ." 2.Размер: " . $this->size ." 3.Разрешение: " . $this->resolution ;
        ?> <br/> <?
    }
}
class PencilClass
{
    public $color;
    public $lifetime;
    public $price;

    public function getInfo() {
        echo "Информация о данной ручке : 1.Цена ". $this->price ." 2.Цвет чернил: " . $this->color ." 3.Срок службы: " . $this->lifetime ;
        ?> <br/> <?
    }
}
class DuckClass
{
    public $tailsize;
    public $weight;
    public $age;
    public $price;


    public function getInfo()
    {
        echo "Информация о данной утке : 1.Цена ". $this->price ." 2.Вес: " . $this->weight ." 3.Возраст: " . $this->age ." 4.Длина хвоста: " . $this->tailsize ;
        ?> <br/> <?
    }
}
class ProductClass
{
    public $weight;
    public $price;


    public function getInfo()
    {
        echo "Информация о данной утке : 1.Цена ". $this->price ." 2.Вес: " . $this->weight ;
        ?> <br/> <?
    }
}



$carone = new CarClass();
$carone->color = 'Красный';
$carone->size = 'Большая';
$carone->price = 'Дорогая';
$carone->country = 'Китай';
$carone->getInfo();


$cartwo = new CarClass();
$cartwo->color = 'Зелёный';
$cartwo->size = 'Среди';
$cartwo->price = 'Дешёвая';
$cartwo->country = 'Россия';
$cartwo->getInfo();




$tvone = new TVClass();
$tvone->size = 'Большой';
$tvone->price = 'Дорогой';
$tvone->reslution = 'FullHD';
$tvone->getInfo();

$tvtwo = new TVClass();
$tvtwo->size = 'Маленький';
$tvtwo->price = 'Дешёвый';
$tvtwo->reslution = 'HD';
$tvtwo->getInfo();




$penciloneone = new PencilClass();
$penciloneone->color = 'Синяя';
$penciloneone->price = '8р';
$penciloneone->lifetime = '200страниц';
$penciloneone->getInfo();

$penciltwo = new PencilClass();
$penciltwo->color = 'Чёрная';
$penciltwo->price = '19р';
$penciltwo->lifetime = '250 страниц';
$penciltwo->getInfo();





$duckone = new DuckClass();
$duckone->tailsize = '15 см.';
$duckone->weight = '7 кг.';
$duckone->age = '2 года';
$duckone->price = '2000';
$duckone->getInfo();

$ducktwo = new DuckClass();
$ducktwo->tailsize = '20 см.';
$ducktwo->weight = '8 кг.';
$ducktwo->age = '5 лет';
$ducktwo->price = '5000';
$ducktwo->getInfo();





$productone = new ProductClass();
$productone->weight = '15 кг.';
$productone->price = '12900';
$productone->getInfo();

$producttwo = new ProductClass();
$producttwo->weight = '3 кг.';
$producttwo->price = '50000';
$producttwo->getInfo();
?>
