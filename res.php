<?php

    // Подключение БД
    require_once 'app/pdo/connect.php';
    
    $sql = 'SELECT * FROM golos';
    $res = $pdo->query($sql);
    $res = $res->fetchAll(PDO::FETCH_ASSOC);

    $g1_1 = 0;  $g2_1 = 0;  $g3_1 = 0;  $g4_1 = 0;  $g5_1 = 0;  $g6_1 = 0;  $g7_1 = 0;
    $g1_2 = 0;  $g2_2 = 0;  $g3_2 = 0;  $g4_2 = 0;  $g5_2 = 0;  $g6_2 = 0;  $g7_2 = 0;
    $g1_3 = 0;  $g2_3 = 0;  $g3_3 = 0;  $g4_3 = 0;  $g5_3 = 0;  $g6_3 = 0;  $g7_3 = 0;
                            $g3_4 = 0;

    $g8_1 = 0;  $g9_1 = 0;  $g10_1 = 0;  $g11_1 = 0;  $g12_1 = 0;  $g13_1 = 0;  $g15_1 = 0;
    $g8_2 = 0;  $g9_2 = 0;  $g10_2 = 0;  $g11_2 = 0;  $g12_2 = 0;  $g13_2 = 0;  $g15_2 = 0;
    $g8_3 = 0;  $g9_3 = 0;  $g10_3 = 0;  $g11_3 = 0;  $g12_3 = 0;  $g13_3 = 0;  $g15_3 = 0;
    $g8_4 = 0;
    $g8_5 = 0;

    $g14_1 = 0;
    $g14_2 = 0;
    $g14_3 = 0;  
    $g14_4 = 0;

    foreach($res as $k => $v) {
        if($v['g1'] == 1) {
            $g1_1++;
        }
        if($v['g1'] == 2) {
            $g1_2++;
        }
        if($v['g1'] == 3) {
            $g1_3++;
        }
        //
        if($v['g2'] == 1) {
            $g2_1++;
        }
        if($v['g2'] == 2) {
            $g2_2++;
        }
        if($v['g2'] == 3) {
            $g2_3++;
        }
        //
        if($v['g3'] == 1) {
            $g3_1++;
        }
        if($v['g3'] == 2) {
            $g3_2++;
        }
        if($v['g3'] == 3) {
            $g3_3++;
        }
        if($v['g3'] == 3) {
            $g3_4++;
        }
        //
        if($v['g4'] == 1) {
            $g4_1++;
        }
        if($v['g4'] == 2) {
            $g4_2++;
        }
        if($v['g4'] == 3) {
            $g4_3++;
        }
        //
        if($v['g5'] == 1) {
            $g5_1++;
        }
        if($v['g5'] == 2) {
            $g5_2++;
        }
        if($v['g5'] == 3) {
            $g5_3++;
        }
        //
        if($v['g6'] == 1) {
            $g6_1++;
        }
        if($v['g6'] == 2) {
            $g6_2++;
        }
        if($v['g6'] == 3) {
            $g6_3++;
        }
        //
        if($v['g7'] == 1) {
            $g7_1++;
        }
        if($v['g7'] == 2) {
            $g7_2++;
        }
        if($v['g7'] == 3) {
            $g7_3++;
        }
        //
        if($v['g8'] == 1) {
            $g8_1++;
        }
        if($v['g8'] == 2) {
            $g8_2++;
        }
        if($v['g8'] == 3) {
            $g8_3++;
        }
        if($v['g8'] == 2) {
            $g8_4++;
        }
        if($v['g8'] == 3) {
            $g8_5++;
        }
        //
        if($v['g9'] == 1) {
            $g9_1++;
        }
        if($v['g9'] == 2) {
            $g9_2++;
        }
        if($v['g9'] == 3) {
            $g9_3++;
        }
        //
        if($v['g10'] == 1) {
            $g10_1++;
        }
        if($v['g10'] == 2) {
            $g10_2++;
        }
        if($v['g10'] == 3) {
            $g10_3++;
        }
        //
        if($v['g11'] == 1) {
            $g11_1++;
        }
        if($v['g11'] == 2) {
            $g11_2++;
        }
        if($v['g11'] == 3) {
            $g11_3++;
        }
        //
        if($v['g12'] == 1) {
            $g12_1++;
        }
        if($v['g12'] == 2) {
            $g12_2++;
        }
        if($v['g12'] == 3) {
            $g12_3++;
        }
        //
        if($v['g13'] == 1) {
            $g13_1++;
        }
        if($v['g13'] == 2) {
            $g13_2++;
        }
        if($v['g13'] == 3) {
            $g13_3++;
        }
        //
        if($v['g15'] == 1) {
            $g15_1++;
        }
        if($v['g15'] == 2) {
            $g15_2++;
        }
        if($v['g15'] == 3) {
            $g15_3++;
        }
        //
        if($v['g14'] == 1) {
            $g14_1++;
        }
        if($v['g14'] == 2) {
            $g14_2++;
        }
        if($v['g14'] == 3) {
            $g14_3++;
        }
        if($v['g14'] == 3) {
            $g14_4++;
        }
    }
?>

<h1>Elorda Jastary 2019</h1>
<hr>
<h2>Эстрада</h2>
<p>
    <p>Мирас Жүгінісов</p>
    <p><?=$g1_1;?></p>
    <p>Әмре </p>
    <p><?=$g1_2;?></p>
    <p>Ақылбек Бахтияр</p>
    <p><?=$g1_3;?></p>
</p>
<hr>
<h2>Кино және театр

</h2>
<p>
    <p>Мейірғат Амангелдин </p>
    <p><?=$g2_1;?></p>
    <p>Самат Әзімқұлов </p>
    <p><?=$g2_2;?></p>
    <p>Елубаева Асем</p>
    <p><?=$g2_3;?></p>
</p>
<hr>
<h2>Ұлттық өнер

</h2>
<p>
    <p>Тұран </p>
    <p><?=$g3_1;?></p>
    <p>Әлібекова Әсел </p>
    <p><?=$g3_2;?></p>
    <p>Сырым Әуезхан</p>
    <p><?=$g3_3;?></p>
    <p>Мұқият Асқар</p>
    <p><?=$g3_4;?></p>
</p>
<hr>
<h2>Спорт

</h2>
<p>
    <p>Динара Садуақасова </p>
    <p><?=$g4_1;?></p>
    <p> Абзал Ажгалиев</p>
    <p><?=$g4_2;?></p>
    <p>Мусаифов Мадияр</p>
    <p><?=$g4_3;?></p>
</p>
<hr>
<h2>Өндірістің үздік қызметкері

</h2>
<p>
    <p>Мерей Бейсембаев </p>
    <p><?=$g5_1;?></p>
    <p> Отарова Сабина</p>
    <p><?=$g5_2;?></p>
    <p>Нұрмұханбетұлы Данабек</p>
    <p><?=$g5_3;?></p>
</p>
<hr>
<h2>Қоғамдық қызмет

</h2>
<p>
    <p>Түстікбаев Ілияс </p>
    <p><?=$g6_1;?></p>
    <p> Абдурашитов Асылбек</p>
    <p><?=$g6_2;?></p>
    <p>Али Салтанат</p>
    <p><?=$g6_3;?></p>
</p>
<hr>
<h2>Заманауи шығармашылық өнер

</h2>
<p>
    <p>Тоқтасынова Ақбота </p>
    <p><?=$g7_1;?></p>
    <p> Аден Гульнар</p>
    <p><?=$g7_2;?></p>
    <p>Темиржан Нурлан</p>
    <p><?=$g7_3;?></p>
</p>
<hr>
<h2>Үздік студент

</h2>
<p>
    <p>Абдрауф Орал </p>
    <p><?=$g8_1;?></p>
    <p> Тулешов Райымбек</p>
    <p><?=$g8_2;?></p>
    <p>Кумекбаева Асия</p>
    <p><?=$g8_3;?></p>
    <p>Нүркен Әділхан</p>
    <p><?=$g8_4;?></p>
    <p>Шымыр Манап</p>
    <p><?=$g8_5;?></p>
</p>

<hr>
<h2>Журналистика

</h2>
<p>
    <p>Азғанбаев Жалға </p>
    <p><?=$g9_1;?></p>
    <p> Данияр Риза</p>
    <p><?=$g9_2;?></p>
    <p>Муканов Бауыржан</p>
    <p><?=$g9_3;?></p>
</p>
<hr>
<h2>Ғылым

</h2>
<p>
    <p>Нұртаза Айдана </p>
    <p><?=$g10_1;?></p>
    <p> Доля Александр</p>
    <p><?=$g10_2;?></p>
    <p>Ерсаханов Қуаныш</p>
    <p><?=$g10_3;?></p>
</p>
<hr>
<h2>Әлеуметтік салының үздік қызметкері



</h2>
<p>
    <p>Сейсенбай Шәкәрiм </p>
    <p><?=$g11_1;?></p>
    <p> Жүнісәлиівтер отбасы</p>
    <p><?=$g11_2;?></p>
    <p>Жанат Бибіжамал</p>
    <p><?=$g11_3;?></p>
</p>
<hr>
<h2>Үздік мемлекеттік қызметкер

</h2>
<p>
    <p>Ерманова Таңшолпан </p>
    <p><?=$g12_1;?></p>
    <p> Төлеутаев Әділет</p>
    <p><?=$g12_2;?></p>
    <p>Сапарбаев Жансұлтан Бердібекұлы</p>
    <p><?=$g12_3;?></p>
</p>
<hr>
<h2>Жыл волонтеры
</h2>
<p>
    <p>Кузембаева Балкен  </p>
    <p><?=$g13_1;?></p>
    <p> Базилжанов Санжар</p>
    <p><?=$g13_2;?></p>
    <p>Мурат Мирас</p>
    <p><?=$g13_3;?></p>
</p>
<hr>
<h2>Үздiк жастар театры
</h2>
<p>
    <p>Назар аудар» театры  </p>
    <p><?=$g14_1;?></p>
    <p> Өнерлі өрендер» балалар театры</p>
    <p><?=$g14_2;?></p>
    <p>Шаңырақ» студенттік театры</p>
    <p><?=$g14_3;?></p>
    <p>Номад театры</p>
    <p><?=$g14_4;?></p>
</p>
<hr>
<h2>Жас кәсіпкер
</h2>
<p>
    <p>Бапанова Айгерім  </p>
    <p><?=$g15_1;?></p>
    <p> Абдукаримова Аягоз </p>
    <p><?=$g15_2;?></p>
    <p>Қанат Ұзақ</p>
    <p><?=$g15_3;?></p>
</p>