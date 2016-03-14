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
    <div id="submit">
        <div id="corner"></div>
        <a href="index.php" id="logo"><div></div></a>
        <footer>
            <a href="index.php" id="submit-link">
                <h6>HOME</h6>
                <i class="fa fa-home"></i>
            </a>
            <a href="index.php" id="archive-link">
                <h6>ARCHIVES</h6>
                <i class="fa fa-th-large"></i>
            </a>
        </footer>
        
        <form>
            <h2>Name (Optional)</h2>
            <input name="name" type="text" id="form-name">
            <h2>Email (Optional)</h2>
            <input name="email" type="email" id="form-email">
            <h2>Message</h2>
            <textarea name="message" id="form-message"></textarea>
            <div id="conditional">
                <h2>Title - Since your message is longer than 140 characters, please include a title that will be displayed (<span class="count"></span>/140 characters)</h2>
                <textarea name="title" id="form-title"></textarea>
            </div>
            <input type="submit" value="submit">
        </form>

    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
</body>
</html>