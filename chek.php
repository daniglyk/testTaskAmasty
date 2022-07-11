<?php

$pizzacost = $_POST['pizaselect'];
if ($pizzacost == '12') {
    $pizzaname = 'Пепперони';
}
if ($pizzacost == '17') {
    $pizzaname = 'Деревенская';
}
if ($pizzacost == '22') {
    $pizzaname = 'Гавайская';
}
if ($pizzacost == '25') {
    $pizzaname = 'Грибная';
}
$pizzasize = $_POST['sizeselect'];

if ($pizzasize == '25') {
    $pizzasizecost = 0;
}
if ($pizzasize == '30') {
    $pizzasizecost = 3;
}
if ($pizzasize == '35') {
    $pizzasizecost = 5;
}
if ($pizzasize == '40') {
    $pizzasizecost = 7;
}

$summa = (int)$pizzacost + $pizzasizecost;
$souse = $_POST['souseselect'];
$output = '';
$output .= "<h2>ЗАКАЗ ПРИНЯТ!</h2><br>";
$output .= "Ваш заказ: <br>";
$output .= "Пицца: " . $pizzaname . " - " . $pizzacost . " б.р.<br>";
$output .= "Размер пиццы: " . $pizzasize . " см + " . $pizzasizecost . " б.р. к стоимости заказа<br>";
if ($souse == "no") {
    $output .= "Без соуса <br>";
} else {
    $output .= "Соус: " . $souse . "<br>";
};
$output .= "ИТОГО: <b>" . $summa . " Б.Р.</b>";
echo $output;
