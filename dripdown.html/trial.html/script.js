var one = document.getElementsByClassName("one");
var i;

for (i=0;i<one.length;i++){
    one[i].addEventListener("click",opentwo)
    function opentwo(){
        var two = this.nextElementSibling;
        if (two.style.maxHeight){
            two.style.maxHeight = null;
        }

        else{
            two.style.maxHeight = (two.scrollHeight + 100) + "px";
        }
    }
    
}

var sec = document.getElementsByClassName("sec");
var j;

for (j=0;j<sec.length;j++){
    sec[j].addEventListener("click",openthree);
    function openthree(){
        var three = this.nextElementSibling;
        if(three.style.maxHeight){
            three.style.maxHeight = null;
        }

        else{
            three.style.maxHeight = three.scrollHeight + "px";
        }
    }
}