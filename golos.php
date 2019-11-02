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

        <form action="" method="post">
            <p class="pInp">
                <label for="email" class="label">электрондық поштаны енгізіңіз</label>
                <input type="email" class="inp" name="email" placeholder="">
            </p>    
            <p class="pInp">
                <label for="pass" class="label">құпия сөзді еңгізіңіз</label>
                <input type="password" class="inp" name="pass" placeholder="">
            </p>
            <button type="submit" class="btn" name="btn"> 
                Кіру
            </button>
            <p>
                <a href="register.php" class="aReg">Тіркеу</a>
            </p>
        </form>

    <!-- JS scripts -->

</body>
</html>