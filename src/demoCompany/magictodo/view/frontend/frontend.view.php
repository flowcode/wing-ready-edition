<!DOCTYPE html >
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="icon" type="image/png" href="/images/comic_horse.gif" />
        <title>Demo | Wing Framework</title>
        <meta name="description" content="Demo page for Wing" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="/js/magictodo.js"></script>
    </head>

    <body>
        <!--  header -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Magic TODO</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/" ><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="/form" >Form</a></li>
                </ul>
            </div>
        </nav>

        <!-- Content  -->
        <div id="content" class="container">
            <?= $content ?>
        </div>

        <!-- footer  -->
        <hr>
        <div id="footer" class="footer">
            <div class="container">
                <p>Copyright info. Other stuff.</p>
            </div>
        </div>
    </body>
</html>