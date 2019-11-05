<?php

    session_start();

    //if(!empty($_SESSION['email'])) {
    //    header('Location: golos.php');
    //}

    // Подключение БД
    require_once 'app/pdo/connect.php';

    // Отправка формы
    if(!empty($_POST['btn'])) {
        
        // Блок ошибок
        $err = [];

        // Проверка имени
        if(!empty($_POST['email'])) {
            $email = trim($_POST['email']);
            $email = htmlentities($email);

            // Проверка на существование логина
            $sql = 'SELECT * FROM users WHERE email = "'. $email .'"';
            $res = $pdo->query($sql);
            $res = $res->fetch(PDO::FETCH_ASSOC);
            
            if($res['email'] !== $email) {
                $err = '<p class="error">Пользователь с таким именем не зарегистрирован</p>';
            }else{

                // Проверка пароля
                if(!empty($_POST['pass'])) {
                    $pass = trim($_POST['pass']);
                    $pass = htmlentities($pass);

                    $sqlLog = 'SELECT `pass` FROM users WHERE email = "'. $email .'"';
                    $resLog = $pdo->query($sqlLog);

                    $resLog = $resLog->fetch(PDO::FETCH_ASSOC);
                    
                    if(password_verify($pass, $resLog['pass'])) {

                        $_SESSION['email'] = $email;
                        header('Location: golos.php');
                    }else{
                        $err = '<p class="error">Не верный парль</p>';
                    }
                }else{
                    $err = '<p class="error">Введите пароль!</p>';
                }
            }
        }else{
            $err = '<p class="error">Введите email!</p>';
        }
    }

    // Проверка существование ошибок
    if(!empty($err)) {
        echo $err;
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

        <form action="" method="post" class="form">
            <p class="pInp">
                <label for="email" class="label">электрондық поштаны енгізіңіз</label>
                <input type="email" class="inp" name="email" placeholder="">
            </p>    
            <p class="pInp">
                <label for="pass" class="label">құпия сөзді еңгізіңіз</label>
                <input type="password" class="inp" name="pass" placeholder="">
            </p>
            <input type="submit" class="btn" name="btn" value="Кіру"> 
            <p>
                <a href="register.php" class="aReg">Тіркеу</a>
            </p>
        </form>
    <!-- JS scripts -->

</body>
</html>