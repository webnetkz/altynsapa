<?php

    session_start();

    // Подключение БД
    require_once 'app/pdo/connect.php';

    // Если кнопка отправить нажата
    if(!empty($_POST['btn'])) {
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

                // Проверка пароля
                if(!empty($_POST['pass'])) {
                    $pass = trim($_POST['pass']);
                    $pass = htmlentities($pass);
                }else{
                    $err = '<p class="error">Введите пароль!</p>';
                }
                
                // Проверка повторного пароля
                if($_POST['pass2'] && $_POST['pass2'] == $_POST['pass']) {
                    $pass2 = trim($_POST['pass2']);
                    $pass = password_hash($pass, PASSWORD_DEFAULT);

                    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $ip.'/'.$_SERVER['HTTP_CLIENT_IP'];
                    }
                    if(!empty($_SERVER['REMOTE_ADDR'])) {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }

                    $iin = $_POST['iin'];

                    // Регистрация
                    $sqlReg = 'INSERT INTO users(`email`, `pass`, `ip`, `iin`) VALUES("'.$email.'", "'.$pass.'", "'.$ip.'", "'.$iin.'");';
                    $resReg = $pdo->query($sqlReg);
            
                    // Редирект при успешной регистрации
                    if(!empty($resReg)) {
            
                        $_SESSION['email'] = $email;

                        
                        header('Location: golos.php');
                    }
                }else{
                    $err = '<p class="error">Заполните поля с паролями</p>';
                }

            }else{
                $err = '<p class="error">Пользователь с таким email существует</p>';
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
        <title>Тіркеу</title>
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
                <label for="iin" class="label">жеке сјйкестендіру нґмір ЖСН</label>
                <input type="number" class="inp" name="iin" placeholder="">
            </p>    
            <p class="pInp">
                <label for="pass" class="label">құпия сөзді еңгізіңіз</label>
                <input type="password" class="inp" name="pass" placeholder="">
            </p>
            <p class="pInp">
                <label for="pass2" class="label">құпия сөзді қайта еңгізіңіз</label>
                <input type="password" class="inp" name="pass2" placeholder="">
            </p>
            <input type="submit" class="btn" name="btn" value="Тіркеу"> 
                
            </button>
        </form>

    <!-- JS scripts -->

</body>
</html>