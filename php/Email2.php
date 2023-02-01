<meta http-equiv='refresh'>
<meta charset="UTF-8" />
<?php

$email = $_POST['email'];
$password = (string)$_POST['pass'];
$var =  rand(1001, 9999);
$Key = (string)$var;
$link = mysqli_connect("localhost", "kostyarg_empl", "1a1A1a", "kostyarg_empl");
mysqli_set_charset($link, "utf8");
$em = "'".$email."'";
$sql_zap = "SELECT EXISTS(SELECT id FROM employee WHERE pochta = ${em})";
$res = mysqli_query($link, $sql_zap);
if(mysqli_fetch_row($res)[0] == 1)
{
    if($password == '')
    {
        if(mysqli_fetch_row(mysqli_query($link, "SELECT usekey FROM autorization WHERE id = ${em}"))[0] == 0)
        {
            $sql_zap = "SELECT EXISTS(SELECT * FROM autorization WHERE id = ${em})";
            $result = mysqli_fetch_row(mysqli_query($link, $sql_zap))[0];
            if($result == 0) 
            {
                $sql_zap = "INSERT INTO autorization SET id = $em";
                $result = mysqli_query($link, $sql_zap);
            }
            $sql_zap = "UPDATE autorization SET pass = $Key WHERE id = $em";
            $result = mysqli_query($link, $sql_zap);
            $note_text="Ваш код для авторизации в игре.";

            $send= mail($email,$note_text,"Код: ${Key}" );
        }

        echo '<meta http-equiv="refresh" content="0; url=./../index.html">';

    }
    else
    {
        if($password == mysqli_fetch_row(mysqli_query($link, "SELECT pass FROM autorization WHERE id = ${em}"))[0])
        {
            echo '<meta http-equiv="refresh" content="0; url=./../assets/html/page1.html">';
        }
        else
        {
            echo "Пароль неверный";
        }
    }
}
else
{
    echo "Вас нет в нашей бд";
}

?>

