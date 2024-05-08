<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="log.png">
    <title>MONYWEL</title>
</head>

<body>
    <header>
        <a href="index.php" style="text-decoration: none;color: black; font-size: 25px;">
            <p><img src="log.png" height="50px" style="margin: 0 10px;">MONYWEL</p>
        </a>
        <ul>
            <a href="index2.html" class="a1">
                <li>Склады</li>
            </a>
        </ul>
        <ul>
            <a href="#onas" class="a1">
                <li>О нас</li>
            </a>
        </ul>
        <ul>
            <a href="#kak" class="a1">
                <li>Как мы работаем</li>
            </a>
        </ul>
        <ul>
            <a href="#obr" class="a1">
                <li>Обратная связь</li>
            </a>
        </ul>

    </header>

    <div style="display: flex; width: 100%;">
        <div class="i1"><img src="1.jpg" height="400px" class="i11"></div>

        <div style="border-width: 0 2px 0 ;border: 2px solid black; position: relative; left: 110px; top: 130px; height: 395px;"></div>
        <div class="i2">
            <h1 style="font-size: 90px;">MONYWEL</h1>
            <p style="font-size: 60px;">Аренда складов и помощений</p>
            <a href="#onas" class="a">
                <div class="kn">
                    <p>Подробнее</p>
                </div>
            </a>
            <a href="index2.html" class="a">
                <div class="kn1">
                    <p>Склады</p>
                </div>
            </a>

        </div>

    </div>
    </div>
    <div class="onas" id="onas">
        <h1>O MONYWEL </h1>
        <p style="font-size: 25px;  width: 50%; margin: 0 auto;">Все проекты, находящиеся под управлением MONYWEL, соответствуют высоким международным стандартам, предъявляемым к складским комплексам класса «А». Они определяют не только техническое оснащение и качество строительства, но и местоположение объекта.</p>
    </div>
    <img class="onas1" src="onas.jpg">
    <div class="onas2">
        <h2 style="font-size: 35px;">СКЛАДЫ ЛЮБОГО ТИПА НА ВАШЕ УСМОТРЕНИЕ</h2>
        <p style="font-size: 25px;">— блоки от 400 м2: можно увеличить площадь, объединив блоки <br>

            — идеально под производство, склад, офис, шоу-рум<br>
            
            — выгодная локация с выездом на МКАД и ЦКАД<br>
            
            — рассрочка на 1 год, промышленная ипотека 5%</p>
    </div>

    <div class="onas3">
        <h2 style="font-size: 35px;">УДОБСТВО В РАЗМЕЩЕНИИ И ПОИСКА</h2>
        <p style="font-size: 25px; ">Помощь и содействие в сдаче, покупке и взятие в аренду помощений<br>Сотрудничество с компаниями и частинками</p>

    </div>




    <div class="kak " id="kak ">
        <h1>Как мы работаем</h1>
    </div>

    <div class="kak1 ">

        <div class="srok ">
            <h3 style="font-size: 30px;text-align: center ">Срок выставления объявления<br>____________________________</h3>
            <p style="font-size: 20px; text-align: center">Быстро проверим и выставим на сайт</p>
        </div>
        <div class="stoim ">
            <h3 style="font-size: 30px;text-align: center;">Стоимость<br>____________________________</h3>
            <p style="font-size: 20px; text-align: center">Самая низкая цена на рынке по продвежению объявления</p>
        </div>

        <div class="dogovr ">
            <h3 style="font-size: 30px; text-align: center">Договор, предоплата и покупка<br>____________________________</h3>
            <p style="font-size: 20px; text-align: center">Поможем во всех организиционных и бумажных сделках</p>
        </div>
    </div>



    <div class="obr " id="obr ">
        <h1>Обратная связь</h1>
    </div>

    <form action="feedback.php" method="post" id="feedback_form">

        <input type="text" placeholder="ФИО " name="name" class="name " required>
        <input type="text" placeholder="Телефон " name="phone" class="tel " required>
        <button type="submit" class="button ">Отправить</button>

    </form>

    <?php
        if (isset($_GET['feedback'])) {
            if ($_GET['feedback'] == 'success') {
                echo '<p style="text-align: center; position: relative; top: 480px;">Заявка отправлена, мы свяжемся с вами позже!</p>';
            }
        } 
    ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="f ">

            <a href="index2.html " class="af ">
                <li>Склады</li>
            </a>


            <a href="#onas " class="af ">
                <li>О нас</li>
            </a>


            <a href="#kak " class="af ">
                <li>Как мы работаем</li>
            </a>


            <a href="#obr " class="af ">
                <li>Обратная связь</li>
            </a>

        </div>


        <p style="text-align: center; font-size: 20px; position: relative; top: 1px; ">©MONYWEL</p>
    </footer>


</body>

</html>