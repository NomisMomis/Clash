<!-- @reference https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black --> 
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
                    $("#box").load("shop.php");
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
        <!-- @reference https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black --> 
        <span id="account" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Username</span>
        <div id="container">
             
         <div id="header">
            
             <h1>Clash</h1></div>
             </div>
             <br>
             <br>
        <div id="topblock">
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <img src="images/profinew.jpg" alt="profile picture">
              <h2>Username</h2>
              
              <br>
              <p class="profitext">Points: </p>
              <br>
              <h2 class="profitext">Topics</h2>
              
             
              <h2 class="profitext">Likes</h2>
              
                <ul>
                  <li>Dogs</li>
                  <br>
                  <li>Football</li>
                  <br>
                  <li>Coffee</li>
                  
                </ul>  

              <br>
              <h2 class="profitext">Dislikes</h2>
              <ul>
                  <li>Cats</li>
                    <br>
                  <li>Tea</li>
                    <br>
                  <li>Rugby</li>
            </ul>  

            </div>
           </div>
        <div id="wrapper">
            <div id="navContainer">
            <ul>
                  <li><a  id="homebtn" class="active" >Home</a></li>
                  <li><a id="boardbtn" href="#boards">Boards</a></li>
                  <li><a id="chatbtn" href="#onetoone">One-to-one</a></li>
                  <li><a id="shopbtn" href="#shop">Shop</a></li>
            </ul>
            </div>
            <div id="box">
            </div>
        </div>
    </body>
       <!-- @referenc --> 
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  
}
</script>
</html>