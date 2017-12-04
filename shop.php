   <!-- @reference https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_modal&stacked=h-->
<html>
    <head>
        <link rel="stylesheet" href="style/style.css" type="text/css" />
    </head>
    <body>

       <a data-toggle="modal" data-target="#myModal3">
           <div class="boardbox">
            <span><h2> emoji packs</h2></span>
        </div>
        </a>
         <a data-toggle="modal" data-target="#myModal4">
        <div class="boardbox">
            <span><h2>profile pictures</h2></span>
        </div>
         <a>
        </a>
        <a data-toggle="modal" data-target="#myModal2">
        <div class="boardbox">
            <span> <h2>theme</h2></span>
        </div>
        </a>
        
           <!-- @reference https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_modal&stacked=h-->
    <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Emoji Packs</h4>
        </div>
        <div class="modal-body">
                 <img src="images/emojipack1.jpg" height="100" width="100"></img>
       <br>
       <br>
       <img src="images/emojipack3.jpeg" height="100" width="100"></img>
       <br>
       <br>
       <img src="images/eomojipack2.jpg" height="100" width="100"></img>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   </div>
    <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile Pictures</h4>
        </div>
        <div class="modal-body">

       <img src="images/profiset.png" height="100" width="100"></img>
       <br>
       <br>
       <img src="images/profiset2.png" height="100" width="100"></img>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
    </body>
</html>