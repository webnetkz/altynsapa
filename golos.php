<?php

    session_start();

    if(empty($_SESSION['email'])) {
        header('Location: index.php');
    }

    // Подключение БД
    require_once 'app/pdo/connect.php';

    $email = $_SESSION['email'];
    $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
    $res = $pdo->query($sql);
    $res = $res->fetch(PDO::FETCH_ASSOC);

    if(empty($res['email'])) {
        $ap = 'INSERT INTO golos(email) VALUES("'.$email.'")';
        $ap = $pdo->query($ap);
    }

    if(!empty($_POST['btn1'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if(!isset($res['g1'])) {
            $btn = $_POST['btn1'];
            $sqlL = 'UPDATE `golos` SET `g1`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации</>';
        }
    }

    if(!empty($_POST['btn2'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if(!isset($res['g2'])) {
            $btn = $_POST['btn2'];
            $sqlL = 'UPDATE `golos` SET `g2`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации</>';
        }
    }

    if(!empty($_POST['btn3'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if(!isset($res['g3'])) {
            $btn = $_POST['btn3'];
            $sqlL = 'UPDATE `golos` SET `g3`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации</>';
        }
    }

    if(!empty($_POST['btn4'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if(!isset($res['g4'])) {
            $btn = $_POST['btn4'];
            $sqlL = 'UPDATE `golos` SET `g4`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации</>';
        }
    }

    if(!empty($_POST['btn5'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if(!isset($res['g5'])) {
            $btn = $_POST['btn5'];
            $sqlL = 'UPDATE `golos` SET `g5`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации</>';
        }
    }


?>
<!-- HTML Content -->
<html>
    <head>
        <!-- HTML Metas -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Elorda Jastary</title>
        <!-- CSS styles -->
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/mstyle.css">
        <link rel="shortcut icon" href="public/img/logo.png" type="image/png">
        <style>
            body {
                background: no-repeat bottom fixed;
                background-image: url('public/img/bg.jpg');
                -webkit-background-size: cover;
                background-size: cover;
                height: 100%;
                box-sizing: border-box;
                margin: 0;
            }
        </style>
        <!-- Description meta -->

        <!-- JavaScript -->
    </head>
    <body>
    <!-- Append blocks -->
        <div>
            <a href="index.php">
                <img src="public/img/logo.png" alt="logo elorda jastary" class="logo">
            </a>
            <img src="public/img/logo2.png" alt="logo elorda jastary" class="logo2">
        </div>

        <div class="preview">
            <h1>Elorda Jastary 2019</h1>
            <h1>8</h1>
            <h2>желтоқсан</h2>
            <h1>19:00</h1>
        </div>

        <form action="" method="post">
        <div id="all">
            <div class="line">
                    <h3>«Елорда жастары сыйлығы 2019» байқауына үміткерлер</h3>
                    <p>Эстрада</p>
                <div class="cart">
                    <img src="public/img/people/1/1.jpg" class="cartI">
                    <p class="small">Мирас ЖүгінісовЖастар арасында 2019 
                        жылы кеңінен таралған «Әндетемін», «Сүйем» әндерінің 
                        орындаушысы. Бейнебаяндары аз уақыттың ішінде YouTube 
                        видеопорталында 3 млн қаралым жинаған. Батумида (Грузия) 
                        өткен xалықаралық ән байқауының жеңімпазы (2019).
                    </p>
                    <p>
                    <button value="1" name="btn1" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>

                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/2.jpg" class="cartI">
                    <p class="small">Ернар Сәдірбаев –көптеген халықаралық 
                        және республикалық байқаулардың жеңімпазы, «Славян базары 
                        2018 » байқауының 1ші орын иегері, «Топжарған», «Екі жұлдыз»
                        т.б шоу бағдарламасының белсенді қатысушысы.Халық 
                        арасында Әмре атымен кеңінен танымал.
                    </p>
                    <p>
                    <button value="2" name="btn1" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/3.jpg" class="cartI">
                    <p class="small">Ақылбек Бахтияр – Қазақ ұлттық өнер университетінің, 
                        соксофон мамандығының 4 курс студенті,
                         «Топжарған» телевизиялық шоу
                        бағдарламасының финалисі, 
                        көптеген республикалық 
                        байқаулардың жеңімпазы.
                    </p>
                    <p>
                    <button value="3" name="btn1" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Кино және театр</p>
                <div class="cart">
                    <img src="public/img/people/2/1.jpg" class="cartI">
                    <p class="small">Мейірғат Амангелдин – Жастар театрының актеры. «
                    Қазақ хандығы» көп сериалы тарихи драмасында Қасым хан рөлін, «Ауыл кэмп», «Кебенек»
                    фильмідерінде басты рөлді сомдаған актер
                    </p>
                    <p>
                    <button value="1" name="btn2" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/2/2.jpg" class="cartI">
                    <p class="small">Самат Әзімқұлов – «Astana Musical»
                    театрының актеры. «Тәуекел» телесериалында басты рөлді, «»
                    «БЕКЗАТ» көркем фильмінде Олимпиада чемпионы Бекзат 
                    Саттархановтың рөлін сомдаған танымал актер. 
                    </p>
                    <p>
                    <button value="2" name="btn2" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/2/3.jpg" class="cartI">
                    <p class="small">Елубаева Асем – Астана циркінің әртісі.  
                        Халықаралық Шабыт фестивальінің цирк номинациясының лауреаты. 
                        2019 ж Азия-Жанғырығы Халықаралық цирк фестивалінің лауреаты және 
                        Испания еліндегі фестивальға шақырту алынды
                    </p>
                    <p>
                    <button value="3" name="btn2" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Ұлттық өнер</p>
                <div class="cart cart4">
                    <img src="public/img/people/3/1.png" class="cartI">
                    <p class="small">«Тұран» фольклорлық- этнографиялық ансамбльі. 
                        Көптеген халықаралық және республикалық байқаулардың жеңімпазы.
                    </p>
                    <p>
                        <button value="1" name="btn3" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/3/2.jpg" class="cartI">
                    <p class="small">Әлібекова Әсел – Президент оркестірінің солисті. 
                        Көптеген халықарылық және республикалық байқаулардың жеңімпазы
                    </p>
                    <p>
                        <button value="2" name="btn3" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/3/3.jpg" class="cartI">
                    <p class="small">Сырым Әуезхан – айтыскер ақын. Халықаралық 
                        және республикалық айтыстардың жүлдегері.
                    </p>
                    <p>
                        <button value="3" name="btn3" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/3/4.jpg" class="cartI">
                    <p class="small">Мұқият Асқар – дәстүрлі әнші, «Мен қазақпын»
                    мега жобасының финалисі, Көптеген халықаралық 
                    және республикалық байқаулардың жеңімпазы
                    </p>
                    <p>
                        <button value="4" name="btn3" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Спорт</p>
                <div class="cart">
                    <img src="public/img/people/4/1.jpg" class="cartI">
                    <p class="small">Динара Садуақасова – Халықаралық әйелдер 
                        арасында Гроссмейстер. Шахматтан төртдүркін Әлем чемпионы. 
                        Азия елдері  әйелдер арасында 8жасынан  чемпион атанған жас шахматшы. 
                    </p>
                    <p>
                        <button value="1" name="btn4" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/4/2.jpg" class="cartI">
                    <p class="small">Абзал Ажгалиев -Шорт тректен Қазақстан 
                        құрамасының капитаны, Шорт тректен Әлемдік дәрежедегі спорт 
                        мастері, Бірнеше халықаралық олимпиадалардың жеңімпазы
                    </p>
                    <p>
                        <button value="2" name="btn4" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/4/3.jpg" class="cartI">
                    <p class="small">Мусаифов Мадияр- Қазақ ұлттық хареография 
                        академиясының студенті. Спорттық бал биінен Қазақстан 
                        Республикасының спорт мастері, көптеген халықаралық және республикалық 
                        байқаулардың жеңімпазы.
                    </p>
                    <p>
                        <button value="3" name="btn4" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>

                </div>
            </div>
            <div class="line">
                    <p>Өндірістің үздік қызметкері</p>
                <div class="cart">
                    <img src="public/img/people/5/1.jpg" class="cartI">
                    <p class="small">Мерей Бейсембаев – «Құлагер»
                    ЖШС қызметкері. Астана қаласының үздік прорабы -2018. «Құлагер»
                    компаниясының үздік өндірушісі.
                    </p>
                    <p>
                        <button value="1" name="btn5" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/5/2.jpg" class="cartI">
                    <p class="small">Отарова Сабина – «Астана су арнасы»
                    МКК нің үздік маманы. 
                    Жастар кеңісінің белсендісі.
                    </p>
                    <p>
                        <button value="2" name="btn5" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/5/3.jpg" class="cartI">
                    <p class="small">Нұрмұханбетұлы Данабек – «Локоматив құрастыру »
                    АҚ жетекші инженер –конструктор. Үздік қызметкер.
                    </p>
                    <p>
                        <button value="3" name="btn5" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>

                </div>
            </div>
            <div class="line">
                    <p>Қоғамдық қызмет</p>
                <div class="cart">
                    <img src="public/img/people/6/1.jpg" class="cartI">
                    <p class="small">Түстікбаев Ілияс -Қазақстан студенттер альянсының президенті
                    </p>
                    <p>
                        <button value="g6_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/6/2.jpg" class="cartI">
                    <p class="small">Абдурашитов Асылбек «Қазақстан Жастары Конвенті» 
                        ЖҚ / ЧФ- ДиректорАМАНАТ азазматтық платформасы Нұр-Сұлтан қ.- Жетекші
                    </p>
                    <p>
                        <button value="g6_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/6/3.jpg" class="cartI">
                    <p class="small">Али Салтанат - ҚР-ның Сыбайлас жемқорлыққа қарсы 
                        іс-қимыл агенттігі,  Парасаттылық департаментінің бас эксперті.
                    </p>
                    <p>
                        <button value="g6_3" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Заманауи шығармашылық қызмет</p>
                <div class="cart">
                    <img src="public/img/people/7/1.jpg" class="cartI">
                    <p class="small">Тоқтасынова Ақбота – «ZEKEN MODA» сән үйінің дизайнері. 
                        Халықарлық және республикалық сән байқауларының жеңімпазы.
                    </p>
                    <p>
                        <button value="g7_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/7/2.jpg" class="cartI">
                    <p class="small">Аден Гульнар – Фрилансер. «Мен Қазақстанды сүйемін»
                    фотобайқауының жеңімпазы.
                    </p>
                    <p>
                        <button value="g7_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Үздік студент</p>
                <div class="cart cart5">
                    <img src="public/img/people/8/1.jpg" class="cartI">
                    <p class="small">Абдрауф Орал- Л.Н. Гумилев атындағы Еуразия ұлттық 
                        университетінің белсенді студенті.
                    </p>
                    <p>
                        <button value="g8_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/2.jpg" class="cartI">
                    <p class="small">Тулешов Райымбек - М.С.Нарикбаев атындағы Қазақ 
                        Гуманитарлық заң университетінің  белсенді студенті 
                    </p>
                    <p>
                        <button value="g8_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/3.jpg" class="cartI">
                    <p class="small">Кумекбаева Асия -Қазақ экономика, қаржы 
                        және халықаралық сауда университетінің белсенді студенті
                    </p>
                    <p>
                        <button value="g8_3" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/4.jpg" class="cartI">
                    <p class="small">Нүркен Әділхан –С.Сейфуллин атындағы  
                    Қазақ агротехникалық университетінің белсенді студенті. 
                    </p>
                    <p>
                        <button value="g8_4" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/5.jpg" class="cartI">
                    <p class="small">Шымыр Манап – Назарбаев университетінің белсенді студенті.
                    </p>
                    <p>
                        <button value="g8_5" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Журналистика</p>
                <div class="cart">
                    <img src="public/img/people/9/1.jpg" class="cartI">
                    <p class="small">Азғанбаев Жалғас – ATAMEKEN BASINESS республикалық 
                    телеарнасының корреспонденті. 
                    </p>
                    <p>
                        <button value="g9_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/9/2.jpg" class="cartI">
                    <p class="small">Данияр Риза – «Балапан» телеарнасындағы 
                    бірнеше бағадарламаның жүргізушісі. Республикалық 
                    байқаулардың жеңімпазы.
                    </p>
                    <p>
                        <button value="g9_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/9/3.jpg" class="cartI">
                    <p class="small">Муканов Бауыржан - «Егемен Қазақстан» 
                        республикалық газетінің журналисті. Narlyk.kz – 
                        экономикалық жаңалықтар порталының негізін қалаушы.
                    </p>
                    <p>
                        <button value="g9_3" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Ғылым</p>
                <div class="cart">
                    <img src="public/img/people/10/1.jpg" class="cartI">
                    <p class="small">Нұртаза Айдана – «Ұлттық биотехнология орталығының» қызметкері
                    </p>
                    <p>
                        <button value="g10_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/10/2.jpg" class="cartI">
                    <p class="small">Доля Александр – Қазақстан Республикасы Қорғаныс 
                    министірлігінің қызметкері
                    </p>
                    <p>
                        <button value="g10_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/10/3.jpg" class="cartI">
                    <p class="small">Ерсаханов Қуаныш – Назарбаев университетінің қызметкері.
                    </p>
                    <p>
                        <button value="g10_3" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Әлеуметтік салының үздік қызметкері</p>
                <div class="cart">
                    <img src="public/img/people/11/1.jpg" class="cartI">
                    <p class="small">№54 мектеп-лицей, директоры
                    </p>
                    <p>
                        <button value="g11_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/11/2.jpg" class="cartI">
                    <p class="small">Жүнісәлиівтер отбасы. Исанханова Сұлушаш -НАО 
                    «МУА» резидент, НАО «МУА» патофизиология кафедрасының мұғалімі. 
                    Жүнісәлиів Елдос «Ұлттық ғылыми кардиохирургия орталығы» АҚ
                    </p>
                    <p>
                        <button value="g11_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/11/3.jpg" class="cartI">
                    <p class="small">Жанат Бибіжамал - Ұлттық ғылыми кардиохирургия 
                    орталығы – балалар кардиология бөлімшесі мейіргер маманы
                    </p>
                    <p>
                        <button value="g11_3" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Үздік мемлекеттік қызметкер</p>
                <div class="cart">
                    <img src="public/img/people/12/1.jpg" class="cartI">
                    <p class="small">Ерманова Таңшолпан - Қазақстан Республикасының 
                    Ақпарат және қоғамдық даму министрлігі Жастар және отбасы 
                    істері комитетінің бас сарапшысы
                    </p>
                    <p>
                        <button value="g12_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/12/2.jpg" class="cartI">
                    <p class="small">Төлеутаев Әділет -Нұр-Сұлтан қаласының Қоғамдық 
                    даму істері басқармасы, діни бірлестіктермен, миссионерлермен 
                    және теологиялық оқу орындармен жұмыс бөлімінің маманы
                    </p>
                    <p>
                        <button value="g12_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Жыл волонтеры</p>
                <div class="cart">
                    <img src="public/img/people/13/1.jpg" class="cartI">
                    <p class="small">Кузембаева Балкен – «Жастар қызметкерлері 
                    қауымдастығы» волонтері
                    </p>
                    <p>
                        <button value="g13_1" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/13/2.jpg" class="cartI">
                    <p class="small">Базилжанов Санжар - «NURORDA» мектеп-лицейінің оқушысы. 
                    «Adal Volunteer Club» жастар ұйымының негізін қалаушы
                    </p>
                    <p>
                        <button value="g13_2" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/13/3.jpg" class="cartI">
                    <p class="small">Мурат Мирас – 66 орта мектептің 11 сынып 
                    оқушысы. «Астана жастары» волонтеры.
                    </p>
                    <p>
                        <button value="g13_3" name="btn" class="btn" type="submit" style="font-size: 1em;">дауыс беру</button>
                    </p>
                </div>
            </div>
            </form>
        </div>

    <!-- JS scripts -->

</body>
</html>