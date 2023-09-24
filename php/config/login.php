<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Вход в административную панель</title>
</head>
<body>
    <div class="php-login">

                    <div class="login__form">

                        <h3 class="login__h3">Добро пожаловать в административную панель!</h3>
                        <p class="login__p">Войдите,чтобы продолжить </p>

                        <form class="login__input" method="POST" action="admin-connect.php">
                            <input type="email" id="1" name="email" class="input__email" placeholder="Email">
                            <input type="password" id="2" name="password" class="input__password" placeholder="Пароль">
                            <div class="g-recaptcha" data-sitekey="6Lf62xkoAAAAAH0giRJIkuIYEaMi6IG3LASMvMNq"></div>
                            <input type="submit" name = "submit" id="3"  class="login__button" value="Войти"> 
                        </form> 


                    </div>

    </div>
</body>
</html>