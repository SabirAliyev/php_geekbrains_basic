<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Iphone',
            'desc' => 'Описание для Iphone',
            'img' => '/images/goods/iphone.jpg',
            'price' => '2000 $'
        ],
        [
            'id' => 2,
            'name' => 'HTC',
            'desc' => 'Описание для HTC',
            'img' => '/images/goods/htc.jpg',
            'price' => '1200 $'
        ],
        [
            'id' => 3,
            'name' => 'Samsung',
            'desc' => 'Описание для Samsung',
            'img' => '/images/goods/samsung.jpg',
            'price' => '1400 $'
        ],
    ];

    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        echo 'а тут у нас будет страница с открытым товаром';
    }
?>

</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brand</div>
    </div>
</footer>

</body>
</html>