<?php

    session_start();

    if(empty($_SESSION['email'])) {
        header('Location: index.php');
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
        </div>

        <div>
            <h1>Elorda Jastary</h1>
                <hr>
            <h1>8</h1>
                <hr>
            <h2>желтоқсан</h2>
                <hr>
            <h1>19:00</h1>
        </div>

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
                        өткен xалықаралық ән байқауының жеңімпазы (2019).</p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/2.jpg" class="cartI">
                    <p class="small">Ернар Сәдірбаев –көптеген халықаралық 
                        және республикалық байқаулардың жеңімпазы, «Славян базары 
                        2018 » байқауының 1ші орын иегері, «Топжарған», «Екі жұлдыз»
                        т.б шоу бағдарламасының белсенді қатысушысы.Халық 
                        арасында Әмре атымен кеңінен танымал.
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/3.jpg" class="cartI">
                    <p class="small">Ақылбек Бахтияр – Қазақ ұлттық өнер университетінің, 
                        соксофон мамандығының 4 курс студенті, «Топжарған» телевизиялық шоу 
                        бағдарламасының финалисі, көптеген республикалық байқаулардың жеңімпазы.
                    </p>
                </div>
            </div>
            <div class="line">
                    <h3>«Елорда жастары сыйлығы 2019» байқауына үміткерлер</h3>
                    <p>Эстрада</p>
                <div class="cart">
                    <img src="public/img/people/1/1.jpg" class="cartI">
                    <p class="small">Мирас ЖүгінісовЖастар арасында 2019 
                        жылы кеңінен таралған «Әндетемін», «Сүйем» әндерінің 
                        орындаушысы. Бейнебаяндары аз уақыттың ішінде YouTube 
                        видеопорталында 3 млн қаралым жинаған. Батумида (Грузия) 
                        өткен xалықаралық ән байқауының жеңімпазы (2019).</p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/2.jpg" class="cartI">
                    <p class="small">Ернар Сәдірбаев –көптеген халықаралық 
                        және республикалық байқаулардың жеңімпазы, «Славян базары 
                        2018 » байқауының 1ші орын иегері, «Топжарған», «Екі жұлдыз»
                        т.б шоу бағдарламасының белсенді қатысушысы.Халық 
                        арасында Әмре атымен кеңінен танымал.
                    </p>
                </div>
                <div class="cart">
                    <img src="public/img/people/1/3.jpg" class="cartI">
                    <p class="small">Ақылбек Бахтияр – Қазақ ұлттық өнер университетінің, 
                        соксофон мамандығының 4 курс студенті, «Топжарған» телевизиялық шоу 
                        бағдарламасының финалисі, көптеген республикалық байқаулардың жеңімпазы.
                    </p>
                </div>
            </div>
        </div>

    <!-- JS scripts -->

</body>
</html>