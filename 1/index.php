<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ads Trial</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>

            .floating-ads{
                position:fixed;
                top:25%;
                left:25%;
                width:50%;
                height:50%;
                border:1.3px solid #000;
                opacity:0;
            }

            @font-face{
                font-family: Consolas;
                src: url(http://billiez.rf.gd/font/Consolas.ttf);
            }

            .popup{
                animation-name:popup;
                animation-iteration-count:1;
                animation-duration:1s;
                animation-fill-mode:both;
            }

            @keyframes popup{
                from{
                    transform:scale(0.5);
                    opacity:0;
                }

                to{
                    transform:scale(1);
                    opacity:1;
                }
            }

            .close{
                float:right;
                padding-right:10px;
                font-size:30px;
                cursor:pointer;
                width:auto;
                font-family:Consolas;
            }

            .name{
                height:40px;
                line-height:40px;
                font-size:20px;
                padding-top:15px;
                padding-left:20px;
                font-family:Consolas;
            }

            #welcome{
                text-align:center;
                font-size:30px;
                font-family:Consolas;
            }

            #response{
                padding-left:20px;
                margin-top:15px;
                font-family:Consolas;
                font-size:20px;
            }

            #submitter{
                font-size:25px;
                background-color:yellow;
                border:1.5px solid #000;
                border-radius:5px;
                margin-left:20px;
                cursor:pointer;
                margin-top:10px;
            }

            #submitter:hover,
            #submitter:active{
                background-color:#b2c73e;
            }

            input[type="text"]{
                width:60%;
            }

        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="welcome"></div>
        <div class="floating-ads">
            <div class="close">x</div>
            <form method="post" action="work.php" id="form">
            <div class="name">Your Name:<input type="text" name="textinput"></div><br><br>
            <div><input type="submit" id="submitter"></div>
            </form>

            <div id="response"></div>

            <script>
$("#submitter").click( function() {
 
   $.post( $("#form").attr("action"),
           $("#form :input").serializeArray(),
       function(info) {
 
         $("#response").empty();
         $("#response").html(info);
    
       });
 
  $("#form").submit( function() {
     return false;  
  });
});
 
</script>
        </div>

        <script type="text/javascript" lang="javascript">

            var div = document.getElementById("welcome");
            var inner = document.getElementById("submitter");
            inner.addEventListener("click",showname);

            function showname(){
                var text = document.getElementsByName("textinput");
                if (text[0].value == ""){
                    return;
                }
                else{
                    var namer = text[0].value.toUpperCase();
                    div.innerHTML = "Welcome, " + namer;
                    return;
                }
            }
            var ads = document.getElementsByClassName("floating-ads")[0];
            var close = document.getElementsByClassName("close")[0];
            var body = document.body;
            const myTimeout = setTimeout(show,3000);

            function show(){
                ads.classList.add("popup");
            }

            close.addEventListener("click",closeads);
            function closeads(){
                ads.classList.remove("popup");
            }

        </script>
    </body>
</html>