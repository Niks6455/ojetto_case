<meta http-equiv='refresh'>
<meta charset="UTF-8" />
<?php
$email = $_POST['email'];

$var =  rand(1001, 9999);
$Key = (string)$var;

$note_text="Ваш код для авторизации в игре.";

   $send= mail($email,$note_text,"Код: $Key" );  

    
if ($send == 'true') {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../style/style_index.css">
    <title>Document</title>
</head>
<body>
    
    <header class="header" id="header">
        <div class="container">
            <div class="head__inner">
                <div class="head__logo"><img src="./../assets/img/icon/logo.png"></div>
                <div class="head__text">
                   <p>Оджетто</p> 
                </div>
            </div>
        </div>
    </header>


    <div class="page"><!-- page -->


        <div class="wriper">
            <div class="container">
                <div class="form">
                    <form method="post" action="./php/Email.php" id="form">
                        <div class="form__bg">

                            <div class="form__bg__text">
                                <div class="form__bg__text__inner">
                                    <p>Авторизация</p>
                                </div>
                            </div>
                            <div class="form__inner">

                                <div class="form__text">
                                    <p>Эл.почта</p>
                                </div>

                                <div class="form__pole">
                                    <input placeholder="Email..." id="GET-email" type="text" name="email">
                                </div>
                            
                            </div>
                            <div class="form__button">
                                <button> 
                                    <p>ОК</p>
                                </button>
                            </div>

                            <div class="form__pop__str active"><!-- Сюда нужно добавлять active "form__pop__str active" -->
                                <div class="form__pop">
                                    <div class="form__pop__inner">
                                        <div class="form__pop__bg">
                                            <div class="form__pop__Title">
                                                <p>Код для авторизации отправлен на почту</p>
                                            </div>
                                            <div class="form__pop__kod">
                                                <div class="form__pop__kod__inner">
                                                    <input placeholder="_ _ _ _"id="GET-kod" type="text" name="name">
                                                    <div class="form__pop__button">
                                                        <button type = "submit">
                                                            <p>Авторизироваться</p>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__text"> ⓒ Оджетто, 2008-2022. Интернет Магазины и продающие приложения</div>
                </div>
            </div>
        </div>

    </div><!-- /page -->
</body>
</html>';
}
else{
    echo 'Error';
}

?>

