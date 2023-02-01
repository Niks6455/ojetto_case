<meta http-equiv='refresh'>
<meta charset="UTF-8" />
<?php
$gorod = 'Таганрог';//$_POST['city'];

$gorod = "'".$gorod."'";
$link = mysqli_connect("localhost", "kostyarg_empl", "1a1A1a", "kostyarg_empl");
$massOfEmploy = array();
if ($link == false)
{
    echo "Ошибка: Невозможно подключиться к бд";
}
else
{
    //echo "Соединение установлено успешно";
    
    mysqli_set_charset($link, "utf8");
    $sql_zap = "SELECT * FROM employee WHERE mesto = ${gorod}";
    $result = mysqli_query($link, $sql_zap);
    $i = 0;
     foreach($result as $row){
         $arr = array(
            'id' => $row['id'],
            'name' => $row['names'],
            'surname' => $row['surnames'],
            'f1' => $row['fact1'],
            'f2' => $row['fact2'],
            'f3' => $row['fact3'],
            'role' => $row['roles']

        );
        $massOfEmploy[$i] = $arr;
        unset($arr);
        $i = $i + 1;
    }
    // $randInt = rand(0,$i-1);
    // echo $massOfEmploy[$randInt]['id'];
    // echo '<br>';
    // unset($massOfEmploy[$randInt]);
    // $i = $i - 1;
    // $massOfEmploy = array_values($massOfEmploy);
    
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../style/style_page3.css">
    <title>Document</title>
</head>
<body>
    

    <header class="header" id="header">
        <div class="container">
            <div class="head__inner">
                <div class="head__logo"><img src="./../../assets/img/icon/logo.png"></div>
                <div class="head__text">
                   <p>Оджетто</p> 
                </div>
            </div>
        </div>
    </header>



    

     <div class="page"> <!-- page -->
';
    $w = 10;
    $arrComp = array(123, 213, 231, 312, 321);
    $dopPer = 0;
    while(($i != 1) & ($w != 0))
    {
        $numOfCompare = rand(0, 4);
        $massDojn = array('Системный администратор', 'Руководитель проектов', 'Бекенд-разработчик', 'Бухгалтер', 'Веб-аналитик', 'Дизайнер', 'Фронтенд-разработчик', 'Инженер техподдержки', 'Менеджер по персоналу', 'Маркетолог', 'Контент-менеджер');
        $randInt = rand(0,$i-1);
        unset($massDojn[array_search($massOfEmploy[$randInt]['role'],$massDojn)]);
        $massDojn = array_values($massDojn);
        $arr[($arrComp[$numOfCompare] / 100)] = $massOfEmploy[$randInt]['role'];
        $dopRand = rand(0,9);
        $arr[($arrComp[$numOfCompare] % 100 / 10)] = $massDojn[$dopRand];
        unset($massDojn[$dopRand]);
        $massDojn = array_values($massDojn);
        $dopRand = rand(0,8);
        $arr[($arrComp[$numOfCompare] % 10)] = $massDojn[$dopRand];
        echo '<div class="main" id = "scrol';
        echo $dopPer;
        echo'">
        <div class="container">
                <div class="main__inner">
                    <div class="main__name">
                        <div class="main__name__inner">
                            <div class="main__name__line">
                                <div class="main__name__line__inner"></div>
                            </div>
                            <div class="main__name__text"><p>';
                echo $massOfEmploy[$randInt]['name'].' '.$massOfEmploy[$randInt]['surname'];//.' '.$i;
                echo '</p></div>
                </div>
            </div>
            <div class="main__info">
                <div class="main__photo">
                    <img src="./../../assets/img/people/1_people.png">
                </div>
                <div class="main__inftext">
                    <p>';
                        echo $massOfEmploy[$randInt]['f1'].'<br>'.$massOfEmploy[$randInt]['f2'].'<br>'.$massOfEmploy[$randInt]['f3'];
                        echo'</p>
                        </div>
                    </div>
                    <div class="main__questions">
                        <div class="main__1quest">
                            <p>ВЫБЕРИТЕ ДОЛЖНОСТЬ*</p>
                        </div>
                        <div class="main__question__inner">
                            <div class="main__question neverno" data-scroll="#scrol';
                            echo $dopPer + 1;
                            echo'">
                                <div class="main__siti__elips"></div>
                                <div class="main__question__text">
                                    <p>';
                            echo $arr[1];

                            echo '</p>
                            </div>
                        </div>
                        <div class="main__question verno" data-scroll="#scrol';
                            echo $dopPer + 1;
                            echo'">
                            <div class="main__siti__elips"></div>
                            <div class="main__question__text">
                                <p>';
                                echo $arr[2];
    
                                echo '</p>
                                </div>
                            </div>
                            <div class="main__question neverno" data-scroll="#scrol';
                            echo $dopPer + 1;
                            echo'">
                                <div class="main__question__text">
                                    <p>';
                                echo $arr[3];
    if($dopPer == 9)
    {
        echo '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

          
                <div class="button" id="">
                    <div class="button__str">  
                        <a href="./page4.html">
                            <div class="button__inner" data-scroll="#rezult">
                                <p>Просмотреть результат</p>
                            </div> 
                         </a>
                    </div>
                </div>
          
            </div>
        </div>';
    }
    else
    {
                                echo '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
        unset($massOfEmploy[$randInt]);
        $i = $i - 1;
        $w = $w - 1;
        $massOfEmploy = array_values($massOfEmploy);
        $dopPer = $dopPer + 1;
    }
    echo '
<div class="main2" >
<div class="container">
<div class="main2__inner">


    <div class="main__title" id="rezult">
        <div class="main__title__inner">
            <div class="main__Title_text"><p>Результаты</p></div>
            <div class="main__Title__ellips">
                <div class="main__Title__ellips__inner">
                    <p><span id="schet"></span>/10</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main__people">

    <div class="block1">
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
</div>
<div class="block2">
    <div class="people"> <a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people">  <a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people">  <a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div class="people"><a href="./page_info.html"><img src="./../assets/img/people/1_people.png"></a></div>
    <div

    </div>

    </div>
   
    <div class="main__button">
        <div class="main__button__inner">
            <a href="./../assets/html/page1.html"><button> На главную</button></a>
        </div>
    </div>
</div> 
</div>
</div>




</div><!-- /page --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./../../js/scrol.js"></script>
<script src="./../../js/question.js"></script>
</body>
</html>';
}

?>
    