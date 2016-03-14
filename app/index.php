<?php
// CONNECT TO THE DATABASE
// CONFIG.PHP IS HIDDEN FROM GIT REPO FOR SECURITY

// require 'config.php';
// try {
//     $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
// }
// catch(PDOException $e) {
//     header('location: sorry.html');
// }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Together with Tessa</title>
    <meta name="description" content="">
    <meta name="author" content="Alwin Hui and Max Yeo">

    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <meta name="theme-color" content="">

    <meta property="og:title" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="Tessa"/>
    <meta property="og:description" content=""/>

    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="loader">
        <div id="loader-logo"></div>
        <span></span>
    </div>
    <div id="unloader"></div>
<div id="page-wrap">
	<div id="wrapper">
        <div id="heart"><i class="fa fa-heart"></i></div>
        <a href="" id="logo"><div></div></a>
        <div id="corner"></div>
	    <div id="pic">
            <div id="pic-image" style="background-image: url(img/sample.jpg);"></div>
        </div>
        <div id="message">
            <h1>Get Well Soon! You're the kindest and most beautiful person I know!</h1>
            <h3>- Alwin Hui</h3>
        </div>
        <!-- <div id="message">
            <h1>Get Well Soon! You're the kindest and most beautiful person I know!</h1>
            <h2>Candy oat cake jelly beans sugar plum candy canes cake jelly beans. Donut caramels sweet roll lemon drops. Candy canes jelly-o chupa chups cookie soufflé. Bonbon jelly beans tart candy croissant. Tootsie roll croissant lemon drops gummi bears wafer marshmallow macaroon caramels macaroon. Danish dragée toffee cotton candy danish icing. Cupcake pie pie donut lollipop. Candy canes chocolate brownie. Dessert jelly lemon drops muffin dessert macaroon. Sweet cake halvah soufflé sweet roll. Chupa chups powder cake. Cotton candy cake sweet.<br><br>
            Powder toffee cookie jujubes cupcake icing jelly beans. Pie jelly soufflé halvah jelly beans bear claw wafer jelly-o. Jelly jujubes cotton candy sweet roll. Powder wafer tootsie roll icing bear claw bear claw donut croissant. Cake marzipan brownie. Pie halvah cupcake gingerbread. Dragée pastry toffee cake. Wafer pudding soufflé toffee ice cream halvah tiramisu cake muffin. Fruitcake candy canes chocolate cake pudding. Cotton candy candy canes donut. Toffee fruitcake sweet tiramisu. Tootsie roll marshmallow brownie.<br><br>
            Lollipop marzipan topping croissant liquorice dragée. Ice cream dragée donut pudding. Liquorice gummies pudding apple pie oat cake liquorice sesame snaps. Toffee tiramisu toffee oat cake. Tootsie roll lemon drops wafer croissant chocolate cake carrot cake caramels sweet roll. Wafer sweet roll oat cake gummies jelly beans fruitcake chocolate bar ice cream. Chupa chups pie cake candy bonbon tiramisu. Wafer chupa chups macaroon fruitcake topping candy oat cake brownie. Cotton candy pastry jujubes lollipop lollipop pastry cake powder. Marshmallow lollipop jelly beans. Dragée soufflé tart chocolate cake dessert sweet roll cotton candy chocolate cake. Cake bear claw soufflé. Cookie fruitcake jujubes ice cream powder cotton candy donut.
            Marshmallow sesame snaps danish. Bear claw bonbon ice cream pastry cookie cake gummi bears toffee. Cheesecake liquorice marzipan gummies marzipan. Jelly beans sesame snaps sesame snaps halvah halvah cheesecake pudding. Chocolate jelly-o danish lemon drops muffin caramels sugar plum. Gummi bears tootsie roll sesame snaps pie candy canes donut. Carrot cake jelly-o topping caramels sweet roll oat cake bonbon. Cupcake carrot cake lollipop candy canes dessert. Halvah macaroon gingerbread brownie chupa chups. Fruitcake macaroon dragée muffin pie cookie icing. Ice cream sweet roll lollipop tootsie roll croissant candy tart cookie marzipan. Dragée candy canes danish jelly beans bear claw halvah brownie oat cake.<br><br>
            Jelly beans ice cream tart dessert. Muffin croissant chupa chups carrot cake gummies cheesecake cookie. Cheesecake gummi bears cotton candy pie jujubes candy tart sweet roll. Soufflé topping topping powder gummies cake chupa chups macaroon macaroon. Chupa chups oat cake candy canes. Bonbon halvah sweet roll gummies bonbon cotton candy cookie croissant muffin. Icing tart candy canes. Caramels gummies toffee powder oat cake icing. Marzipan topping apple pie. Biscuit jelly beans sesame snaps sesame snaps toffee lemon drops sweet roll. Soufflé croissant pie lollipop cotton candy liquorice muffin muffin. Dragée liquorice cheesecake pie jelly-o cake muffin.</h2>
            <h3>- Alwin Hui</h3>
        </div> -->

        <footer>
            <div id="footer-left">
                <a href="submit.php" id="submit-link">
                    <h6>SUBMIT</h6>
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="archive.php" id="archive-link">
                    <h6>ARCHIVES</h6>
                    <i class="fa fa-th-large"></i>
                </a>
                <a id="about-link">
                    <h6>ABOUT</h6>
                    <i class="fa fa-times"></i>
                    <i class="fa fa-info-circle"></i>
                </a>
            </div>
        </footer>
    </div>

    <div id="about">
        <div id="about-content">
            <div id="about-logo"></div>
            <p>Tessa Wiseman is the one of the most unique and kindest person in the world.  Please join us in wishing her the best on her road to recovery.  No on fights cancer alone.  </p>
            <div id="about-close">
                <div id="close-icon">
                    <span></span>
                    <span></span>
                </div>
                <h6>Close</h6>
            </div>
        </div>
    </div>

</div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
</body>
</html>