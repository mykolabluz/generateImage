<?php

if (isset($_GET['submit'])) {

    $width = $_GET['width'];
    $height = $_GET['height'];
    $radius = $_GET['radius'];
    $quantity = $_GET['quantity'];

    // Узнаем минимальное и максимльное значение координат
    $minCx = $radius / 2 + 1;
    $maxCx = $width - $radius / 2 - 2;
    $minCy = $radius / 2 + 1;
    $maxCy = $height - $radius / 2 - 2;

    // Создаем изображение с белым фоном
    $im = imageCreateTrueColor($width, $height);
    $back = imageColorAllocate($im, 255, 255, 255);
    imageFilledRectangle($im, 0, 0, $width - 1, $height - 1, $back);

    // Создаем массив цветов
    $color[] = imageColorAllocate($im, 255, 255, 0);
    $color[] = imageColorAllocate($im, 255, 0, 0);
    $color[] = imageColorAllocate($im, 0, 0, 255);
    $color[] = imageColorAllocate($im, 0, 128, 0);
    $color[] = imageColorAllocate($im, 0, 0, 0);

    // Создаем окружности
    for ($i = 0; $i < $quantity; $i++) {
        $cx = rand($minCx, $maxCx);
        $cy = rand($minCy, $maxCy);
        $key = array_rand($color, 1);
        imageFilledEllipse($im, $cx, $cy, $radius, $radius, $color[$key]);
    }

    // Генерируем случайное имя
    $filename = rand(1, 500);
    // Сохранеям изображение
    imagePng($im, $filename . '.png');
    // Переадресовуем на 
    header('Location: /');
}

