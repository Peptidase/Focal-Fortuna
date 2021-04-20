var i = 0;



function move(){
    if(i==0){
        
        i=1;
        var value = 100;
        var elem = document.getElementById("myBar");
        
        var width = 1;
        var id = setInterval(frame,22);
        function frame(){
            if(width >=value){
                clearInterval(id);
                i=0;
            }else{
                width++;
                elem.style.width = width+"%";
                elem.innerHTML = width + "%";
            }


        }
    }

}


function movedelay(){
    setTimeout(move,500);
}


