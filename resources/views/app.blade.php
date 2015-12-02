<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <title>The Crystarium</title>
</head>
<body>
<div class="top">
    <a href="#"><img alt="The Crystarium" class="img-responsive" width="140" height="140" style="z-index: 1" src="img/Crystarium-Logo-sm.png"></a>
</div>

<nav class="navbar navbar-inverse fixed">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/reviews">Reviews</a></li>
                <li><a href="http://www.twitch.tv/evenglare/profile">Twitch</a></li>
                <li><a href="#">Campaigns</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">Submissions</a></li>
                <li><a href="#">Character Sheets</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="#">The Legend of Zelda </a></li>
                <li><a href="#">Final Fantasy</a></li>
                <li><a href="#">Chrono Series</a></li>
                <li><a href="#">Mass Effect</a></li>
                <li><a href="#">Phantasy Star</a></li>
                <li><a href="#">Tales of Diablo</a></li>
                <li><a href="#">Legend of Dragoon</a></li>
                <li><a href="#">Fire Emplem</a></li>
                <li><a href="#">Etc.</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @yield('content')
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
</html>