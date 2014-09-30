<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
/**
 * User: Pamela Lim
 * Date: 9/28/14
 * Time: 2:27 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Project 2</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><i class="fa fa-recycle"></i> <span>Dani</span>sh.</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="active"><a href="project2.php">Project 2</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="single.html">Single</a></li>
                        <li><a href="archive.html">Archives</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- end:navbar -->

<!-- begin:header -->
<section id="header" class="heading" style="background: url(img/img05.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-desc">
                    <h2>Project 2</h2>
                    <p>xkcd Password Generator</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- end:header -->

<!-- begin:content -->
<section id="content">
<div class="container">

<div class="row">
<!-- begin:article -->
<div class="col-md-8 col-sm-8">
<div class="row">
    <div class="col-md-12 post-single">
        <div class="heading-title">
            <h2><a href="http://p2.pamelalim.org">xkcd Password Generator</a></h2>
        </div>
        <div class="post-meta">
            <span><em>By <a href="http://p1.pamelalim.org">Pamela Lim</a></em></span>
            <span><em>On September 30, 2014</em></span>
            <span><em>In <a href="http://dwa15.com">DWA</a></em></span>
        </div>

        <p>I very seldom have problems with passwords, so I did not even realize there is such a thing called
            the xkcd password generator, and such a creative way to generate passwords.
        </p>
        <p>Here's  a simple version from me. You can choose between 3-8 words, in Camel or snake cases. Then,
        you can choose to add a symbol and a number.</p>
        <p>The rationale for such a password is as documented in the cartoon below. Your comments are welcomed!</p>
        <p><img src="http://imgs.xkcd.com/comics/password_strength.png"></p>
    </div>
</div>

<hr>

<!-- begin:comments -->
<div class="row">
    <div class="col-md-12">
        <div class="comment">
            <h3>Discussion</h3>
            <ul class="comments list-unstyled">
                <li class="clearfix">
                    <img src="img/avatar.png" class="avatar" alt="danish personal blog and magazine template">
                    <div class="post-comments">
                        <p class="meta">Dec 18, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam a sapien odio, sit amet
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end:comments -->

<hr>
<!-- begin:post-comment -->

<div class="row">
    <div class="col-md-12">
        <h3>Post Comment</h3>
        <form class="comment-form">
            <div class="row">
                <div class="col-md-6 col-sm-6">

                    <input type="text" class="form-control" placeholder="Enter Your Name : ">
                    <input type="email" class="form-control" placeholder="Enter Your Email : ">
                    <input type="text" class="form-control" placeholder="Enter Your URL : ">
                </div>
                <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" rows="4" placeholder="Type Your Comment : "></textarea>
                    <input type="submit" class="btn btn-info btn-lg btn-block">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end:post-comment -->
</div>
<!-- end:article -->

<!-- begin:sidebar -->
<div class="col-md-4 col-sm-4 sidebar">
    <div class="widget-sidebar">
        <h3>Search for password</h3>
        <?php require 'logic.php'; ?>

        <form id="search" class="navbar-form search" method="GET" role="search" action = "project2.php">


            <div class="row">
                <label class="col-md-6 control-label">No. of words</label>
                <div class="col-md-6">
                    <select class="form-control" name="numword">
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label class="col-md-6">Choose a case</label>
                <div class="col-md-6">
                    <select class="form-control col-md-2" name="case">
                        <option value="snake" selected>Snake</option>
                        <option value="camel">Camel</option>
                        <option value="space">Space</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label class="control-label col-md-6">Other Options</label>
                <div class="col-md-6">
                    <input type='checkbox' name='symbol'>Add a symbol<br>
                    <input type='checkbox' name='num'>Add a number<br>
                </div>
                </div>
            </div>

            <div class="col-md-6">
            <label class="control-label col-md-5">
            </div>
            <button type="submit" class="btn featured-container"><i class="fa fa-check"></i> Submit</button>
        </form>
    </div>


</div>
<!-- end:sidebar -->

</div>
</div>
</section>
<!-- end:content -->


<!-- begin:footer -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h3>Recent Post</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Lorem sit</a></li>
                        <li><a href="#">Lorem dolor sit</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h3>Useful Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorem sit</a></li>
                        <li><a href="#">Lorem dolor sit</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="footer-logo">
                    <h2><i class="fa fa-recycle"></i> Danish.</h2>
                    <p>1024 Main Street, Jejeran Plrt Btl<br>+62 (123) 456-7890</p>
                    <br>
                    <p class="muted">© 2014 Brand Inc.</p>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end:footer -->

<!-- begin:copyright -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 copy-left">
                <p>Copyright &copy; 2014 <strong>avriqqlabs</strong>. All Right Reserved.</p>
            </div>

            <div class="col-md-6 col-sm-6 copy-right">
                <ul class="list-inline social-icon">
                    <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#" class="icon-youtube" rel="tooltip" title="" data-placement="top" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="icon-instagram" rel="tooltip" title="" data-placement="top" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end:copyrigt -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/script.js"></script>
</body>
</html>