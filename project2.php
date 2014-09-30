<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
/**
 * User: Pamela Lim
 * Date: 9/28/14
 * Time: 2:27 PM
 */
include "header.html"; ?>
    <script>
        function findPwd() {
            var restmsg = "project2/logic.php?numword="+document.forms["search"]["numword"].value+"&case="+
            document.forms["search"]["case"].value;
            if (document.getElementById("symbol").checked){
                restmsg = restmsg + '&symbol=on';
            }
            if (document.getElementById("num").checked) {
                restmsg = restmsg + '&num=on';
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("demo").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET",restmsg,true);
            xmlhttp.send();
        }
    </script>

<!-- begin:header -->
<section id="header" class="heading" style="background: url(http://imgs.xkcd.com/comics/password_strength.png);">
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

        <p>Everyone has a password problem once in a while, and while we devise our own ways of solving the problem,
            few have made it as famous as this one using xkcd password generator, and in a creative way, too.
        </p>
        <p>Here's  a simple version from me. You can choose between 3-8 words, in Camel, snake or space cases. Then,
        you can choose to add a symbol and a number.</p>
        <p>The rationale for such a password is as documented in the cartoon below.</p>
        <p>I've tried to maximize the performance of this password search, downloaded a local database of English words
            in the same server, and included an ajax form for the search to minimize data transfer. You can see the time
            the page is loaded, and that does not reload with every new search. This saves hosting/bandwidth costs for me,
            and download time for the user.
        </p>
        <p><img src="http://imgs.xkcd.com/comics/password_strength.png"></p>
        <p>To make sense, I believe restricting the number of words to between 3 to 8 makes sense, so there won't be a chance
        the user will key in non-integers or put in too big the number of words to cause a problem to the system.
        </p>
        <p>There is no validation of the form required as it is really quite a simple form, and I have
            tried to make it as simple, fuss-free and user-friendly as relevant for a password generator.</p>
    </div>
</div>

<hr>

<!-- end:post-comment -->
</div>
<!-- end:article -->

<!-- begin:sidebar -->
<div class="col-md-4 col-sm-4 sidebar">
    <p>Time page loaded:  <?php echo date('m/d/Y h:i:s a', time()); ?>
    </p>
    <h3>Search for password</h3>
    <div class="widget-sidebar">

        <form id="search" class="navbar-form search" method="GET" role="search" action = "project2/logic.php">


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
                    <input type='checkbox' id="symbol" value='symbol' name="symoption" unchecked>Add a symbol<br>
                    <input type='checkbox' id="num" value='num' name="numoption" unchecked>Add a number<br>
                </div>
                </div>
            </div>

            <div class="col-md-6">
            <label class="control-label col-md-5">
            </div>
            <button type="button" onmouseup="findPwd()">Search</button>
        </form>
    <h3>Password Suggestion:</h3>
    <p><span id="demo">Your password suggestion appears here.</span></p>
    </div>


</div>
<!-- end:sidebar -->

</div>
</div>
</section>
<!-- end:content -->
 <?php include "footer.php"; ?>