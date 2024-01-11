<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cover Countdown Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper video-background">
    <!-- Video from YouTube -->
    <!-- Have Questions? How To: https://github.com/pupunzi/jquery.mb.YTPlayer/wiki -->
    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=k_okcNVZqqI', containment:'body', autoPlay:true, mute:true, startAt:5, stopAt: 120, quality:'small', opacity:1, }"></a>

    <div class="overlay"></div>

    <div class="site-wrapper-inner">

        <div class="masthead clearfix">
            <div class="inner">
                <h3 class="masthead-brand"><i class="fa fa-phone fa-fw"><a href="tel:1234567890"></i> (123) 456-7890<br><small>click to call <i class="fa fa-level-up"></i></small></a></h3>
                <nav>
                    <ul class="nav masthead-nav">
                        <li><a href=""><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li><a href=" "><i class="fa fa-envelope fa-fw"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="inner cover">
            <h1 class="cover-heading">Регистрация</h1>

            <form action="/register.php" method="post"> <!-- Изменен action на "register.php" -->
                <label for="name">Имя:</label>
                <input type="text" name="name" required>

                <label for="pass">Пароль:</label>
                <input type="password" name="pass" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="phone">Телефон:</label>
                <input type="tel" name="phone" required>

                <label for="company">Компания:</label>
                <input type="text" name="company" required>

                <label for="share_link">Ссылка для обмена:</label>
                <input type="text" name="share_link" required>

                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>



        <div class="mastfoot">
            <div class="inner">
                <p>Copyright &copy; <a href="https://github.com/YaiLung">Your Website</a></p>
                <p>Cover template by <a href="https://github.com/YaiLung">ForBetterWeb</a></p>
            </div>
        </div>

    </div>

</div>
</div>

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/device.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>

<!--
Google Analytics
Demo Purpose Only
Change UA-XXXXXXX-X to be your site's ID
 -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-1057679-2', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>


