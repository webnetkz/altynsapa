<?php

    session_start();

    if(empty($_SESSION['email'])) {
        header('Location: index.php');
    }

    if(!empty($_POST['lang'])) {
        if($_POST['lang'] == 'ru') {
            header('Location: rugolos.php');
        }
        if($_POST['lang'] == 'kaz') {
            header('Location: golos.php');
        }
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
        if($res['g1'] == '') {
            $btn = $_POST['btn1'];
            $sqlL = 'UPDATE `golos` SET `g1`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn2'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g2'] == '') {
            $btn = $_POST['btn2'];
            $sqlL = 'UPDATE `golos` SET `g2`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn3'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g3'] == '') {
            $btn = $_POST['btn3'];
            $sqlL = 'UPDATE `golos` SET `g3`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn4'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g4'] == '') {
            $btn = $_POST['btn4'];
            $sqlL = 'UPDATE `golos` SET `g4`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn5'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g5'] == '') {
            $btn = $_POST['btn5'];
            $sqlL = 'UPDATE `golos` SET `g5`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn6'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g6'] == '') {
            $btn = $_POST['btn6'];
            $sqlL = 'UPDATE `golos` SET `g6`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn7'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g7'] == '') {
            $btn = $_POST['btn7'];
            $sqlL = 'UPDATE `golos` SET `g7`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn8'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g8'] == '') {
            $btn = $_POST['btn8'];
            $sqlL = 'UPDATE `golos` SET `g8`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn9'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g9'] == '') {
            $btn = $_POST['btn9'];
            $sqlL = 'UPDATE `golos` SET `g9`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn10'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g10'] == '') {
            $btn = $_POST['btn10'];
            $sqlL = 'UPDATE `golos` SET `g10`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn11'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g11'] == '') {
            $btn = $_POST['btn11'];
            $sqlL = 'UPDATE `golos` SET `g11`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn12'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g12'] == '') {
            $btn = $_POST['btn12'];
            $sqlL = 'UPDATE `golos` SET `g12`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn13'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g13'] == '') {
            $btn = $_POST['btn13'];
            $sqlL = 'UPDATE `golos` SET `g13`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
        }
    }

    if(!empty($_POST['btn14'])) {
        $sql = 'SELECT * FROM golos WHERE email = "'.$email.'"';
        $res = $pdo->query($sql);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if($res['g14'] == '') {
            $btn = $_POST['btn14'];
            $sqlL = 'UPDATE `golos` SET `g14`="'.$btn.'" WHERE `email`="'.$email.'"';
            $r = $pdo->query($sqlL);
            echo '<p class="error">Спасибо! Ваш голос принят. Вы можете проголосовать в других категориях по одному разу!</>';
        }else{
            echo '<p class="error">Вы уже голосовали в этой номинации!</>';
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

        <form action="" method="post" class="lang">
            <button value="ru" name="lang" class="btn" type="submit" style="font-size: 1em;">Русский</button>
            <button value="kaz" name="lang" class="btn" type="submit" style="font-size: 1em;">Қазақ</button>
        </form>
        <div>
            <a href="index.php">
                <img src="public/img/logo.png" alt="logo elorda jastary" class="logo">
            </a>
            <img src="public/img/logo2.png" alt="logo elorda jastary" class="logo2">
        </div>

        <div class="preview">
            <h1>Elorda Jastary 2019</h1>
            <h1>8</h1>
            <h2>декабря</h2>
            <h1>19:00</h1>
        </div>
            <p>
                <b>Введение</b>: Первый Президент Республики Казахстан Нурсултан Абишевич Назарбаев в своем Послании Президенту Республики Казахстан «Повышение благосостояния Казахстана: повышение качества жизни и процветания» объявил 2019 год Годом молодежи. Глава государства посчитал заботу о сегодняшней и будущей молодежи ключевой частью своей политики. Молодежь - самая активная часть любого государства, движущая сила общества. Роль молодежи в вхождении Казахстана в топ-30 развитых стран мира.
            </p>
            <p>
            Целью и целью проекта является повышение любви молодежи к Родине, к стране, развитие их любви к молодому поколению, развитие их профессионального творчества.
            Поддержка активной молодежи на государственном уровне, ее научной, творческой и общественной деятельности, а также развитие сотрудничества между молодежью и неправительственными организациями, формирование идеального молодежного идеала. Демонстрировать людям свои достижения, формировать конкурентные и профессиональные навыки.
            Активная молодежь в возрасте от 14 до 29 лет в городе Нур-Султан, победители международных и республиканских конкурсов, фестивалей и различных мероприятий, лучшие специалисты в своей области, внесшие свой вклад в развитие страны.
            Все победители будут удостоены звания «Молодежный приз столицы», а также будут награждены дипломами и специальными статуэтками.
            </p>

        <form action="" method="post">
        <div id="all">
            <div class="line">
                    <h3>«Елорда жастары сыйлығы 2019» байқауына үміткерлер</h3>
                    <p>Эстрада</p>
                <div class="cart">
                    <img src="public/img/people/1/1.jpg" class="cartI">
                    <p class="small">Мирас Жугинисов-исполнитель популярных песен «Әндетемін», «Сүйем». За короткое время в видеопортале YouTube набрал более 3 млн просмотров. Победитель международного конкурса  (Грузия) (2019).

                    </p>
                    <p>
                    <button value="1" name="btn1" class="btn" type="submit" style="font-size: 1em;">голосовать</button>

                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/2.jpg" class="cartI">
                    <p class="small">Әмре - победитель многих международных и республиканских конкурсов, 1 место в конкурсе "Славянский базар 2018".Широко известен среди населения по имени Амре.

                    </p>
                    <p>
                    <button value="2" name="btn1" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/3.jpg" class="cartI">
                    <p class="small">Акылбек Бахтияр-студент 4 курса Казахского национального университета искусств, специальности саксофон, финалист телевизионной шоу программы «Топжарған», победитель многих республиканских конкурсов.

                    </p>
                    <p>
                    <button value="3" name="btn1" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Кино және театр</p>
                <div class="cart">
                    <img src="public/img/people/2/1.jpg" class="cartI">
                    <p class="small">Мейірғат Амангелдин - актер театра Жастар. В исторической драме многосерийного сериала Казахское ханство» роль Касыма хана, фильм  «Ауыл кэмп» глваный роль 

                    </p>
                    <p>
                    <button value="1" name="btn2" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/2/2.jpg" class="cartI">
                    <p class="small">Самат Азимкулов – актер театра«Astana Musical».  Сериал  «Тауекел» главный роль, известный актер, сыгравший роль олимпийского чемпиона Бекзата Саттарханова в художественном фильме «БЕКЗАТ»
 
                    </p>
                    <p>
                    <button value="2" name="btn2" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/2/3.jpg" class="cartI">
                    <p class="small">Елубаева Асем-лауреат в номинации цирка Международного фестиваля Шабыт. В 2019 году был приглашен на фестиваль в Испании и лауреат Международного циркового фестиваля Азия Жаңғырығы

                    </p>
                    <p>
                    <button value="3" name="btn2" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Ұлттық өнер</p>
                <div class="cart cart4">
                    <img src="public/img/people/3/1.png" class="cartI">
                    <p class="small">«Тұран»
фольклорно-этнографический ансамбль. Победитель многих международных и республиканских конкурсов.

                    </p>
                    <p>
                        <button value="1" name="btn3" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/3/2.jpg" class="cartI">
                    <p class="small">Әлібекова Әсел – солист Президентского оркестра Службы государственной охраны Республики Казахстан


                    </p>
                    <p>
                        <button value="2" name="btn3" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/3/3.jpg" class="cartI">
                    <p class="small">Сырым Әуезхан – айтыскер ақын. Призер международных и республиканских айтысов

                    </p>
                    <p>
                        <button value="3" name="btn3" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/3/4.jpg" class="cartI">
                    <p class="small">Мұқият Асқар – традиционный певец,
финалист мега проекта «Мен қазақпын», победитель многих международных и республиканских конкурсов.

                    </p>
                    <p>
                        <button value="4" name="btn3" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Спорт</p>
                <div class="cart">
                    <img src="public/img/people/4/1.jpg" class="cartI">
                    <p class="small">Динара Садуақасова – Международный гроссмейстер среди женщин. Четырехкратная чемпионка Мира. Мастер спорта Республики Казвхстан

                    </p>
                    <p>
                        <button value="1" name="btn4" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/4/2.jpg" class="cartI">
                    <p class="small">Абзал Ажгалиев – Капитан сборной Казахстана по Шорт Треку. Мастер спорта международного класса по шорт-треку

                    </p>
                    <p>
                        <button value="2" name="btn4" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/4/3.jpg" class="cartI">
                    <p class="small">Мусаифов Мадияр- Студент Казахской Национальной академии хореографии. Мастер спорта Республики Казахстан по спортивным бальным танцам, победитель многих международных и республиканских конкурсов.

                    </p>
                    <p>
                        <button value="3" name="btn4" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>

                </div>
            </div>
            <div class="line">
                    <p>Өндірістің үздік қызметкері</p>
                <div class="cart">
                    <img src="public/img/people/5/1.jpg" class="cartI">
                    <p class="small">Мерей Бейсембаев – сотрудник строительной компании «Базис А»


                    </p>
                    <p>
                        <button value="1" name="btn5" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/5/2.jpg" class="cartI">
                    <p class="small">Отарова Сабина - «Астана су арнасы» Лучший специалист ГКП.

                    </p>
                    <p>
                        <button value="2" name="btn5" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>

                </div>
                <div class="cart">
                    <img src="public/img/people/5/3.jpg" class="cartI">
                    <p class="small">Нұрмұханбетұлы Данабек – 
Ведущий инженер-конструктор АО «Локоматив құрастыру»

                    </p>
                    <p>
                        <button value="3" name="btn5" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>

                </div>
            </div>
            <div class="line">
                    <p>Қоғамдық қызмет</p>
                <div class="cart">
                    <img src="public/img/people/6/1.jpg" class="cartI">
                    <p class="small">Түстікбаев Ілияс - Президент Альянса студентов Казахстана. 

                    </p>
                    <p>
                        <button value="1" name="btn6" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/6/2.jpg" class="cartI">
                    <p class="small">Абдурашитов Асылбек Председатель «Конвент молодежи Казахстана»


                    </p>
                    <p>
                        <button value="2" name="btn6" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/6/3.jpg" class="cartI">
                    <p class="small">Али Салтанат-Агентство РК по противодействию коррупции. Главный эксперт департамента добропорядочности.

                    </p>
                    <p>
                        <button value="3" name="btn6" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Заманауи шығармашылық өнер
</p>
                <div class="cart">
                    <img src="public/img/people/7/1.jpg" class="cartI">
                    <p class="small">Токтасынова Акбота-дизайнер Дом моды "ZEKEN MODA". Победитель международных и республиканских конкурсов моды.

                    </p>
                    <p>
                        <button value="1" name="btn7" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/7/2.jpg" class="cartI">
                    <p class="small">Аден Гульнар-фотограф, фрилансер. Победитель фотоконкурса «Мен Қазақстанды сүйемін»

                    </p>
                    <p>
                        <button value="2" name="btn7" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Үздік студент</p>
                <div class="cart cart5">
                    <img src="public/img/people/8/1.jpg" class="cartI">
                    <p class="small">Абдрауф Орал-активный студент Евразийского национального университета им.Л. Н. Гумилева.

                    </p>
                    <p>
                        <button value="1" name="btn8" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/2.jpg" class="cartI">
                    <p class="small">Тулешов Райымбек-активный студент Казахского гуманитарно-юридического университета им.М. С. Нарикбаева
 
                    </p>
                    <p>
                        <button value="2" name="btn8" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/3.jpg" class="cartI">
                    <p class="small">Кумекбаева Асия-активная студентка Казахского университета экономики, финансов и международной торговли

                    </p>
                    <p>
                        <button value="3" name="btn8" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/4.jpg" class="cartI">
                    <p class="small">Нуркен Адилхан-активный студент Казахского агротехнического университета им.С. Сейфуллина.

                    </p>
                    <p>
                        <button value="4" name="btn8" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart5">
                    <img src="public/img/people/8/5.jpg" class="cartI">
                    <p class="small">Шымыр Манап-активный студент Назарбаев Университета.

                    </p>
                    <p>
                        <button value="5" name="btn8" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Журналистика</p>
                <div class="cart">
                    <img src="public/img/people/9/1.jpg" class="cartI">
                    <p class="small">Азганбаев Жалгас-корреспондент республиканского телеканала ATAMEKEN BUSINESS.

                    </p>
                    <p>
                        <button value="1" name="btn9" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/9/2.jpg" class="cartI">
                    <p class="small">Данияр Риза-ведущий нескольких программ на телеканале «Балапан». Победитель республиканских конкурсов

                    </p>
                    <p>
                        <button value="2" name="btn9" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/9/3.jpg" class="cartI">
                    <p class="small">Муканов Бауыржан-журналист республиканской газеты "Егемен Қазақстан" основатель портала экономических новостей. Naryk.kz

                    </p>
                    <p>
                        <button value="3" name="btn9" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Ғылым</p>
                <div class="cart">
                    <img src="public/img/people/10/1.jpg" class="cartI">
                    <p class="small">Нұртаза Айдана – Сотрудник «Национального центра биотехнологии» 

                    </p>
                    <p>
                        <button value="1" name="btn10" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/10/2.jpg" class="cartI">
                    <p class="small">Доля Александр – сотрудник Министерства обороны Республики Казахстан

                    </p>
                    <p>
                        <button value="2" name="btn10" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/10/3.jpg" class="cartI">
                    <p class="small">Ерсаханов Куаныш-сотрудник Назарбаев Университета.

                    </p>
                    <p>
                        <button value="3" name="btn10" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Әлеуметтік салының үздік қызметкері</p>
                <div class="cart">
                    <img src="public/img/people/11/1.jpg" class="cartI">
                    <p class="small">Сенсенбай Шәкәрім – директор Школа-лицей № 54, 

                    </p>
                    <p>
                        <button value="1" name="btn11" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/11/2.jpg" class="cartI">
                    <p class="small">Семья Жунисалиевых. Исанханова Сулушаш-резидент НАО «МУА», преподаватель кафедры патофизиологии НАО «МУА». Жунисалиев Елдос сотрудник АО» Национальный научный кардиохирургический центр»

                    </p>
                    <p>
                        <button value="2" name="btn11" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/11/3.jpg" class="cartI">
                    <p class="small">Жанат Бибижамал – Национальный научный кардиохирургический центр. Медицинская сестра Детского кардиологического отделения

                    </p>
                    <p>
                        <button value="3" name="btn11" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Үздік мемлекеттік қызметкер</p>
                <div class="cart">
                    <img src="public/img/people/12/1.jpg" class="cartI">
                    <p class="small">Ерманова Таңшолпан - Главный эксперт Комитета по делам молодежи и семьи Министерства информации и общественного развития Республики Казахстан

                    </p>
                    <p>
                        <button value="1" name="btn12" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/12/2.jpg" class="cartI">
                    <p class="small">Төлеутаев Әділет - Специалист отдела по работе с религиозными объединениями, миссионерами и теологическими учебными заведениями управления по делам общественного развития города Нур-Султан

                    </p>
                    <p>
                        <button value="2" name="btn12" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Жыл волонтеры</p>
                <div class="cart">
                    <img src="public/img/people/13/1.jpg" class="cartI">
                    <p class="small">Кузембаева Балкен – Волонтер  «Ассоциация молодежных работников»

                    </p>
                    <p>
                        <button value="1" name="btn13" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/13/2.jpg" class="cartI">
                    <p class="small">Базилжанов Санжар – школа-Лицей «NURORDA». Председатель и основатель Молодежный организаций «Adal Volunteer Club»
                    </p>
                    <p>
                        <button value="2" name="btn13" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/13/3.jpg" class="cartI">
                    <p class="small">Мурат Мирас –Ученик 11 класса средней школы № 66. Волонтер «Астана жастары». 


                    </p>
                    <p>
                        <button value="3" name="btn13" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            <div class="line">
                    <p>Ұлттық өнер</p>
                <div class="cart cart4">
                    <img src="public/img/people/14/1.jpg" class="cartI">
                    <p class="small">Театр «Назар аудар»

                    </p>
                    <p>
                        <button value="1" name="btn14" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/14/2.jpg" class="cartI">
                    <p class="small">детский театр «Өнерлі өрендер»

                    </p>
                    <p>
                        <button value="2" name="btn14" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/14/3.jpg" class="cartI">
                    <p class="small">студенческий театр «Шаңырақ»

                    </p>
                    <p>
                        <button value="3" name="btn14" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
                <div class="cart cart4">
                    <img src="public/img/people/14/4.jpg" class="cartI" style="width: 90%;">
                    <p class="small">Номад театр
                    </p>
                    <p>
                        <button value="4" name="btn14" class="btn" type="submit" style="font-size: 1em;">голосовать</button>
                    </p>
                </div>
            </div>
            </form>
        </div>
        <div style="background-color: rgba(0, 0, 0, 0.2);">
            <h2>Наши контакты:</h2>
                <p>
                    <a href="tel:+77074341799" style="color: white;">8 707 434 17 99</a>
                </p>
                <p>Email: elorda.jastary2019@gmail.com</p>
                <p>Instagram: <a href="https://www.instagram.com/elorda_jastary/" style="color: white;">
                    elorda_jastary
                </a></p>
                <p>
                    <a href="https://elordajastary2019.kz">elordajastary.kz</a>
                    <br>
                </p>
        </div>


    <!-- JS scripts -->

</body>
</html>