<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Free Bootstrap Themes Designed by 365Bootstrap"/>
    <meta name="author" content="http://www.365bootstrap.com"/>
    <title>@yield('title')</title>


    <!-- Bootstrap Core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom Theme files -->
    <link href="/public/css/style.css" rel='stylesheet' type='text/css'/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/public/js/html5shiv.js"></script>
    <script src="/public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- /////////////////////////////////////////Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Nav -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.365bootstrap.com">365Bootstrap.com</a>
        </div>
        <!-- Nav collapse -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-left">

                @yield('About')

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Navigation -->

<!-- /////////////////////////////////////////Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <div id="main-content" class="col-md-8">
                <article>
                    <div class="art-header">
                        <div class="entry-title">

                            @yield('header-title')

                        </div>
                        <div class="info">

                            @yield('header-data')

                        </div>
                    </div>
                    <div class="art-content">
                        <div class="excerpt">

                            @yield('header-article')

                            </div>
                        <img src="/public/images/3.jpg"/>

                        @yield('content')

                        <hr>
                        <div class="comment">

                            @yield('comments')

                        </div>
                    </div>
                </article>
            </div>
            <div id="sidebar" class="col-md-4">
                <div class="widget wid-search">
                    <div class="heading">

                        @yield('Search')
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="widget wid-category">
                    <div class="heading"><h4>Categories</h4></div>
                    <div class="content">
                        <div class="row">

                            @yield('Categories')

                        </div>
                    </div>
                </div>
                <div class="widget wid-about">
                    <div class="heading"><h4>About Us</h4></div>
                    <div class="content">

                        @yield('About Us')

                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- /////////////////////////////////////////Footer -->
<footer>
    <div class="wrap-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @yield('footer')

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/public/js/jquery.min.js"></script>
<!-- Core JavaScript Files -->
<script src="/public/js/bootstrap.min.js"></script>

</body>
</html>

