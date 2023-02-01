<?php
$num = $_POST['id'];
$link = mysqli_connect("localhost", "kostyarg_empl", "1a1A1a", "kostyarg_empl");
mysqli_set_charset($link, "utf8");
$sql_zap = "SELECT * FROM employee WHERE id = ${num}";
$massOfData = mysqli_fetch_array(mysqli_query($link, $sql_zap));

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="./../../style/style_info.css">
    <title>Info</title>
</head>
<body>

    <header class="header" id="header">
        <div class="container">
            <div class="head__inner">
                <div class="head__logo"><img src="./../img/icon/logo.png"></div>
                <div class="head__text">
                   <p>Оджетто</p> 
                </div>
            </div>
        </div>
    </header>

    <div class="page"> <!-- page -->
    
        <div class="main">
            <div class="container">
                

                <div class="main__inner">
                    <div class="main__slame">
                        <div class="main__slame__inner">

                            <div class="main__icon">
                                <div class="main__icon__inner">
                                    <a href="./page1.html"><img src="./../img/info_img/icon1.png"></a>
                                </div>
                            </div>

                            <div class="main__icon__people">
                                <div class="main__icon__people__inner">
                                    <img src="./../img/info_img/man.png">
                                </div>
                            </div>
                        </div>

                    </div>
                       

                    <div class="main__block">
                        <div class="main__block__inner">
                            <div class="main__block_text"><p>';
                            echo $massOfData['names'].' '.$massOfData['surnames'];
                            echo '</p></div>
                            </div>
                            <div class="main__block__inner">
                                <div class="main__block_text_title"><p>';
                            echo $massOfData['roles'];
                            echo '</p></div> 
                            </div>
                            <div class="main__block__inner">
                                <div class="main__block_text_title_inner_t"><p>';
                                echo $massOfData['leves'];
                                echo '</p></div> 
                                <div class="main__block_text_title_inner"><p >';
                                echo $massOfData['brithday'];
                                echo '</p></div> 
                                </div>
                            </div>
        
                            <div class="block_f">
                                <div class="container">
                                    
                                    <div class="block_f__inner">
        
                                    <div class="block_fakt"> 
                                        <div class="main__siti__elips"></div>
                                        <div class="block_fakt_text">
                                            <p>';
                                            echo $massOfData['fact1'];
                                            echo '</p>
                                            </div>
                                           
                                        </div>
                                        <div class="block_fakt"> 
                                            <div class="main__siti__elips"></div>
                                            <div  class="block_fakt_text">
                                                 <p>';
                                                 echo $massOfData['fact2'];
                                                 echo '</p> 
                                                 </div>
                                             </div>
                                             <div class="block_fakt" >
                                                 <div class="main__siti__elips"></div>
                                                 <div  class="block_fakt_text">
                                                     <p>';
                                                     echo $massOfData['fact3'];
                                                     echo '</p>
                                                     </div>
                                                    
                                                 </div>
                     
                                             </div>
                                             </div>
                                         
                                         </div>
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
                         </div>
                         
                     </body>
                     </html>';

?>