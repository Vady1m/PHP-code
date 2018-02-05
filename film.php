<html>
 <head>
  <meta charset="UTF-8">
  <title>Фильмы</title>
 </head>
 <body>
  <style type="text/css">
    td a {

    width: 100%;
    height: 100%;
    display: block; 
    text-decoration: none;
    }

    a.knopka1 {
      color: #fff; /* цвет текста */
      text-decoration: none;
      user-select: none; /* убирать выделение текста */
      background: rgb(50, 205, 50); /* фон кнопки */
      padding: 1em 6.2em; /* отступ от текста */
      outline: none; /* убирать контур в Mozilla */
    } 
    a.knopka1:hover { background: rgb(0, 128, 0); } /* при наведении курсора мышки */
    a.knopka1:active { background: rgb(0, 100, 0); } /* при нажатии */
  </style>

<br/>
<center>
<a href="website.html" class = "knopka1"> ГЛАВНАЯ </a>
<a href="news.html" class = "knopka1"> НОВОСТИ </a>
<a href="actors.html" class = "knopka1"> АКТЕРЫ </a>
<a href="seach.html" class = "knopka1"> ПОИСК </a>
</center>

<br/>
<br/>
<br/>

<div class = "block2">

<table style="font-size:18;">

<tr> <td> <a href="janr.php?janr=biography&page=1"> Биография </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=melodramas&page=1"> Мелодрамы </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=military&page=1"> Военные </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=action&page=1"> Боевики </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=comedy&page=1"> Комедии </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=criminal&page=1"> Криминальные </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=historical&page=1"> Исторические </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=documentary&page=1"> Документальные </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=adventure&page=1"> Приключения </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=mystical&page=1"> Мистические </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=horrors&page=1"> Ужасы </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=family&page=1"> Семейные </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=sports&page=1"> Спортивные </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=fantastic&page=1"> Фантастика </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=fantasy&page=1"> Фэнтези </a> </td> </tr>
<tr> <td> <a href="janr.php?janr=musicals&page=1"> Мюзиклы </a> </td> </tr>

</table>

</div>

<br> </br>

<?php

$host='localhost'; // имя хоста (уточняется у провайдера)
$database='films'; // имя базы данных, которую вы должны создать
$user='root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd='server'; // заданный вами пароль


$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");


function select() {

$query = "SELECT * FROM films WHERE id_film = '" . $_GET['id'] . "'";
$res = mysql_query($query);
$row = mysql_fetch_array($res);

$query1 = "SELECT * FROM films_janr WHERE id_film = '" . $_GET['id'] . "'";
$query2 = "SELECT count(id_film) FROM films_janr WHERE id_film = '" . $_GET['id'] . "'";

$res1 = mysql_query($query1);
$res2 = mysql_query($query2);

$row2 = mysql_fetch_array($res2);

$count_janr = $row2['count(id_film)'];
$janrs_output = '';

for($g = 0; $g < $count_janr; $g++)
{
    if($g == 0) {
    $row1 = mysql_fetch_array($res1);
    $janrs_output = $janrs_output . ' ' . $row1['name_janr'];
    }
    else {
    $row1 = mysql_fetch_array($res1);
    $janrs_output = $janrs_output . ', ' . $row1['name_janr'];
    }
}
echo ' <div class="block1">
        <p> <b> <font size = "4" color = "red"> &#160 ' .  $row['name_film'] . ' </font> </b> </p>
        <img src= ' . $row['img_film'] . ' width="400" height="600" alt="" align="left" vspace="1" hspace="1"> 
        ' . $row['str'] . ' <p> <b> Год выпуска: </b> ' . $row['year_film'] . ' </p>
        <p> <b> Жанр: </b> ' . $janrs_output . ' </p> </div> <br></br> ';

}

select();

?>

<br/><br/>
<br/><br/>

<br/><br/>

<style type="text/css">

   a.class1 {
      color: #fff; /* цвет текста */
      text-decoration: none; /* убирать подчёркивание у ссылок */
      user-select: none; /* убирать выделение текста */
      background: rgb(212,75,56); /* фон кнопки */
      padding: .7em 1.5em; /* отступ от текста */
      outline: none; /* убирать контур в Mozilla */
    }

    a.class1:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
    a.class1:active { background: rgb(152,15,0); } /* при нажатии */

</style>

  <style type="text/css">
  
    a.knopka {
      color: #fff; /* цвет текста */
      text-decoration: none; /* убирать подчёркивание у ссылок */
      user-select: none; /* убирать выделение текста */
      background: rgb(212,75,56); /* фон кнопки */
      padding: .7em 1.5em; /* отступ от текста */
      outline: none; /* убирать контур в Mozilla */
    }

    a.knopka:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
    a.knopka:active { background: rgb(152,15,0); } /* при нажатии */

    input.knopka {
      color: #fff; /* цвет текста */
      text-decoration: none; /* убирать подчёркивание у ссылок */
      user-select: none; /* убирать выделение текста */
      background: rgb(212,75,56); /* фон кнопки */
      padding: .8em 1.5em; /* отступ от текста */
      outline: none; /* убирать контур в Mozilla */
      border: 0;
    }

    input.knopka:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
    input.knopka:active { background: rgb(152,15,0); } /* при нажатии */

    .block1 {
    width: 800px; /* Ширина слоя в пикселах */
    height: 644px; /* Высота слоя в пикселах */
    background: #ff0; /* Цвет фона */
    position: relative;
    top: 30px; 
    left: 300px; 
    }

    .block2 {
    width: 150px; /* Ширина слоя в пикселах */
    height: 420px; /* Высота слоя в пикселах */
    background: #ff0; /* Цвет фона */
    text-align: center;
    position: absolute; 
    top: 100px; 
    left: 120px;

    }
 
    a { 
    text-decoration: none; /* Отменяем подчеркивание у ссылки */
    }

    font:hover {
    color: #000;
    }

    a:hover {
    color: #000; /* Цвет ссылки при наведении на нее курсора мыши */  
    }
     
    .player {

    width: 800px; /* Ширина слоя в пикселах */
    height: 600px; /* Высота слоя в пикселах */
    text-align: center;
    position: relative; 
    top: 30px; 
    left: 300px;

    }

  </style>

  <br/>
  <br/>

 </body>
</html>
