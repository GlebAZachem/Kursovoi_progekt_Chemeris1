<!DOCTYPE html>
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
      <style>
   .m1 {
    position: fixed; /* Фиксированное положение */
    right: 10px; /* Расстояние от правого края окна браузера */
    top: 20%; /* Расстояние сверху */
    padding: 10px; /* Поля вокруг текста */ 
    background: #FFFFFF; /* Цвет фона */ 
    border: 1px solid #333; /* Параметры рамки */ 
   }
      .m2 {
    position: fixed; /* Фиксированное положение */
    left: 0px; /* Расстояние от правого края окна браузера */
    top: 10%; /* Расстояние сверху */
    padding: 10px; /* Поля вокруг текста */ 
    background: #FFFFFF; /* Цвет фона */ 
    border: 1px solid #333; /* Параметры рамки */ 
   }

   .textb {
  color: rgb(255, 255, 255);
}

  </style>
    <link rel="stylesheet" type="text/css" href="assets/css/Dis.css">

</head>
<body>

    <!-- Профиль -->

            <div class="m2">
            <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout"><p>Выход</a>
    </form>
    <p>
    <p>

                <td bgcolor="#87CEEB" align="center">

                    <h1>Меню</h1>

            <br>
            <p>
                <h2>
                    <a href="profile.php">

                        <span style="margin-left:5px;">О сайте </span>
                    </a>

            </p>
          
            <br>
            <p>
                <a href="katalog.php">
                    <span style="margin-left:5px;">Каталог </span>
                </a>
            </p>
            </p>
            </h2>
            </p>
</td>
</div>


    <tr>
    <td>

        <table bgcolor="#c5c5e0"
               cellpadding="20"
               style="width: 90%; border-radius: 20px; margin: auto;">
            <tr>
                <th>

                    <h1>Библиотека "КНИЖНЫЙ ЧЕРВЬ"</h1>
                    <h3></h3>
                </th>
            </tr>
        </table>





        <table style="width: 100%;">
            <td rowspan="1"
                style="width:100%; height:50px">
            </td>
        </table>





        <table style="width: 100%;">
            <td rowspan="1"
                style="width:100%; height:50px">
            </td>
        </table>





        <table bgcolor="#c5c5e0"
               cellpadding="20"
               style="width: 90%; border-radius: 20px; margin: auto; border-spacing: 10px 10px; ">

            <tr>
                <td bgcolor="#87CEEB"
                    align="center"
                    style="width: 70%; border-radius: 20px; margin: auto; ">

                    <h1>В каталоге представленны все имеющиеся книги</h1>
                    <p>
                    <h1>По возможности мы добаляем все больше книг</h1>
                    <p>

                </td>





        <table style="width: 100%;">
            <td rowspan="1"
                style="width:100%; height:50px">
            </td>
        </table>







        <table bgcolor="#c5c5e0"
               cellpadding="20"
               style="width: 90%; border-radius: 20px; margin: auto;">
            <tr>
                <td rowspan="3"
                    style="width:80%">

                    <table bgcolor="#FFFFFF"
                           cellpadding="20"
                           style="width: 90%; border-radius: 20px; margin: auto;" align="center">
                        <tr>
                            <td>&nbsp;</td>
                            <td>Название книги</td>
                            <td>Автор</td>
                            <td>Стоимость</td>
                            <td>Год издания</td>
                        </tr>
                        <tr>
                            <td><img src="image/203.png" width="50" height="60"></td>
                            <td>Оруэлл Джордж</td>
                            <td>Джордж Оруэлл</td>
                            <td>510</td>
                            <td>1984</td>
                        </tr>
                        <tr>
                            <td><img src="image/202.png" width="50" height="60"></td>
                            <td>Сияй!</td>
                            <td>Ольга Лишина</td>
                            <td>450</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <td><img src="image/201.png" width="50" height="60"></td>
                            <td>Рубиновый лес</td>
                            <td>Анастасия Гор</td>
                            <td>700</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <td><img src="image/200.png" width="50" height="60"></td>
                            <td>Аня с острова Принца Эдуарда</td>
                            <td>Люси Монтгомери</td>
                            <td>900</td>
                            <td>2023</td>
                        </tr>
                    </table>
                    <p>

                        <img src="image/1.jpg" width="550" height="500">
                        <img src="image/2.jpg" width="800" height="500">
                        <img src="image/3.jpg" width="800" height="500">
                        <h2>
                            <p style="text-indent:20px">
                                -
                            </p>
                        </h2>
                </td>

            </tr>
        </table>





        <table style="width: 100%;">
            <td rowspan="1"
                style="width:100%; height:50px">
            </td>
        </table>




        <table border="1"
               bgcolor="#87CEEB"
               height="100"
               cellpadding="10"
               style="width:100%; border-radius:5px;">
            <tr>

                <th>
                    <h3>
                        <p style="text-indent:20px"> Тел.: 0 000 000 00 00 </p>
                        <p style="text-indent:20px"> Эл. почта: Glebchemeris@mail.ru </p>
                        <p style="text-indent:20px"> Сайт: www.KnijNiiCherv.ru
                    </h3> </p>
                </th>
            </tr>
        </table>

    </td>
</tr>

</body>
</html>
</body>
</html>