<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dropdown</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">

            body{
                background-color: white;
            }

            .dropdown{
                background-color: aquamarine;
                width:400px;
                height:50px;
                margin-top:10px;
                margin-left:30px;
                font-size:30px;
                font-family:'Courier New', Courier, monospace;
                font-weight:550;
            }

            .dripdown{
                background-color: rgb(127, 195, 255);
                width:400px;
                height:50px;
                margin-top:10px;
                margin-left:30px;
                font-size:30px;
                font-family:'Courier New', Courier, monospace;
                font-weight:550;
            }

            .octave,
            .dripdown.hover{
                background-color: rgb(113, 98, 177);
                cursor:pointer;
            }

            .active,
            .dropdown:hover{
                background-color:rgb(70, 176, 104);
                cursor:pointer;
            }

            .content{
                background-color: rgb(183, 249, 227);
                width:385px;
                margin-left:30px;
                padding-left:15px;
                color: #000;
                transition: max-height 0.2s ease-out;
                overflow:hidden;
                max-height:0;
            }

            .contents{
                background-color: rgb(199, 210, 247);
                width:385px;
                margin-left:30px;
                padding-left:15px;
                color: #000;
                transition: max-height 0.2s ease-out;
                overflow:hidden;
                max-height:0;
            }

        </style>
    </head>
    <body>
        <button type="button" class="dropdown">Holinization</button>
        <div class="content">ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC</div>

        <button type="button" class="dripdown">2nd</button>
        <div class="contents">ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC</div>

        <button type="button" class="dripdown">3rd</button>
        <div class="contents">ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC<br>ABC</div>

        
<script type="text/javascript" lang="javascript">
    var dropdown = document.getElementsByClassName("dropdown");
    var i;

    dropdown[0].addEventListener("click",holinization)
        function holinization(){
        
        this.classList.toggle("active");
        var content = this.nextElementSibling;

        if (content.style.maxHeight){
            content.style.maxHeight = null;
        }

        else{
            content.style.maxHeight = content.scrollHeight + "px";
        }

    }

    var dripdown = document.getElementsByClassName("dripdown")
    var i;

    for (i = 0;i < dripdown.length;i++){
    dripdown[i].addEventListener("click",anotherHolinization)

    function anotherHolinization(){
        this.classList.toggle("octave");
        var contents = document.querySelectorAll(".contents");

        if (contents.style.maxHeight){
            contents.style.maxHeight = null;
        }

        else{
            contents.style.maxHeight = contents.scrollHeight + "px";
        }
    }}
</script>
    </body>
</html>