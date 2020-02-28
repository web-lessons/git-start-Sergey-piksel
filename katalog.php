<?php 
$name = array('OnePlus 7T', 'OnePlus 7T Pro', 'OnePlus 7 Pro', 'OnePlus 7');

$haracteristiki = array('Основные параметры:
                        Экран Super AMOLED,1440 x 3120 (Wide QHD+), 6.67″, ~515 ppi;
                        Процессор Qualcomm Snapdragon 855+ (SM8150-AC) Octa core;
                        Память ОЗУ: 8 Gb/12 Gb, Flash: 128 Gb/256 Gb;
                        Аккумулятор 4500 мА·ч;
                        ОС Android 9.0 Pie;
                        Размеры 162.6 x 75.9 x 8.8 мм', 
                       'SoC Qualcomm Snapdragon 855+, 8 ядер (1×Kryo 485 Gold @2,96 ГГц + 3×Kryo 485 Gold @2,42 ГГц + 4×Kryo 485 Silver @1,8 ГГц);
                        GPU Adreno 640 (700 МГц);
                        Операционная система Android 10.0; OxygenOS 10.0.4;
                        Сенсорный дисплей Super AMOLED 6,67″, 3120×1440, 19,5:9, 516 ppi, 90 Гц;
                        Оперативная память (RAM) 8/12 ГБ, внутренняя память 256 ГБ;
                        Камера 48 Мп (f/1,6) + 8 Мп (f/2,4) + 16 Мп (f/2,2), видео 4K@60 fps;
                        Фронтальная камера 16 Мп (f/2,0);
                        Размеры 163×76×8,8 мм;
                        Масса 206 г',
                        'SoC Qualcomm Snapdragon 855, 8 ядер (1×Kryo 485 Gold @2,84 ГГц + 3×Kryo 485 Gold @2,42 ГГц + 4×Kryo 485 Silver @1,78 ГГц);
                        GPU Adreno 640;
                        Операционная система Android 10; OxygenOS 10.0.2;
                        Сенсорный дисплей Super AMOLED 6,67″, 3120×1440, 19,5:9, 516 ppi, 90 Гц;
                        Оперативная память (RAM) 6/8/12 ГБ, внутренняя память 128/256 ГБ;
                        Камера 48 Мп (f/1,6) + 8 Мп (f/2,4) + 16 Мп (f/2,2), видео 4K@60 fps;
                        Фронтальная камера 16 Мп (f/2,0);
                        Аккумулятор 4000 мА·ч, быстрая зарядка 30 Вт;
                        Размеры 163×76×8,8 мм;
                        Масса 206 г', 
                        'Экран: 6.41″, Optic AMOLED, FHD+ (2340×1080), 19.5:9, 402 ppi.;
                        Процессор: Snapdragon 855 (8×1.8-2.84 ГГц, 7 нм), графика Adreno 640;
                        Постоянная память: 128/256 ГБ UFS 3.0;
                        Оперативная память: 6/8/12 ГБ LPDDR4X;
                        Основная камера: 48 МП (Sony IMX586, f/1.7, 1/2″, 0.8 мкм, OIS) + 5 МП (f/2.4, 1.12 мкм, сенсор глубины), запись 4К/60fps видео;
                        Фронтальная камера: 16 МП (f/2.0, 1/3.1″, 1 мкм, ЭФР 25 мм), видео 1080p/30fps;
                        Аккумулятор: 3700 мАч, быстрая зарядка Warp Charge 20 Вт;
                        ОС: Android 9 Pie + Oxygen OS 9;
                        Размеры: 157.7 x 74.8 x 8.2 мм, вес — 182 г.');
$price = array('BUY (600 $)', 'BUY (700 $)', 'BUY (650$)', 'BUY (500 $)');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="center">Каталог:</h1>
    <div class="center">
    <div class="card" style="width: 50rem;">
        <img src="https://pood.telia.ee/staticCDN/tooted2/49831/215037/OnePlus%207T%20mobiiltelefon%20sinine%20tagant%20kuljelt.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text"><?php echo($name[0]);?></h5>
            <p class="card-text"><?php echo($haracteristiki[0]); ?></p>
            <a href="" class="btn btn-primary"><?php echo($price[0]); ?></a>
        </div>
    </div>
</div>

<div class="center">
    <div class="card" style="width: 50rem;">
        <img src="https://static-eu.insales.ru/images/products/1/3507/262827443/oneplus-7t-pro7677147338145424151.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo($name[1]); ?></h5>
            <p class="card-text"><?php echo($haracteristiki[1]);?></p>
            <a href="#" class="btn btn-primary"><?php echo ($price[1]);?></a>
        </div>
    </div>
</div>

    <div class="center">
    <div class="card" style="width: 50rem;">
        <img src="https://ae01.alicdn.com/kf/H5fc21b4deb3547f18550ea7f87e9065cl/OnePlus-7-Pro-Global-rom-4G-256GB-Snapdragon-855-48-6-67-Fluid.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo( $name[2]);?></h5>
            <p class="card-text"><?php echo($haracteristiki[2]);?></p>
            <a href="#" class="btn btn-primary"><?php echo($price[2]);?></a>
        </div>
    </div>
</div>

    <div class="center">
    <div class="card" style="width: 50rem;">
        <img src="https://05.ru/upload/iblock/827/8273b1bd2004a0ba71bcaff3ce7132b3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo( $name[3]);?></h5>
            <p class="card-text"><?php echo($haracteristiki[3]);?></p>
            <a href="#" class="btn btn-primary"><?php echo($price[3]);?></a>
        </div>
    </div>
</div>
</div>

</body>
</html>



