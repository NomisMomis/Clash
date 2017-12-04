<!DOCTYPE html>
<html>
    <head>
        <title>Clash</title>
        <link rel="stylesheet" href="style/style.css" type="text/css" />
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- temporary usage of bootstrap over the web -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script>
            /* global $ */
            $(document).ready(function(){
                $("#box").load("homepage.html");
                $("#boardbtn").click(function(){
                    $("#box").load("board.html");
                    $("homepage.html").hide();
                });
                $("#chatbtn").click(function(){
                    $("#box").load("singlechat.html");
                    $("homepage.html").hide();
                });
                 $("#shopbtn").click(function(){
                    $("#box").load("shop.html");
                    $("homepage.html").hide();
                });
                 $("#homebtn").click(function(){
                    $("#box").load("homepage.html");
                    $("homepage.html").hide();
                });
            });
        </script>
    </head>
    <body>
        <!-- temporary usage of bootstrap over the web --> 
        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <div id = "main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <div id="header"><h1>Clash</h1></div>
        <p>text</p>
        <div id="wrapper">
            <div id="navContainer">
            <nav>
                <a onclick = "home" type="button" id="homebtn" class="btn btn-primary">Home</a>
                <a onclick = "boards" type="button" id="boardbtn" class="btn btn-primary">Boards</a>
                <a onclick = "singlechat" type="button" id="chatbtn" class="btn btn-primary">One-to-One</a>
                <a onclick = "shop" type="button" id="shopbtn" class="btn btn-primary">Shop</a>
            </nav>
            </div>
            <p>where all the shit is in </p>
            <div id="box">
                
            </div>
        </div>
        </div>
    </body>
       <!-- temporary usage of bootstrap over the web --> 
    <script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</html>