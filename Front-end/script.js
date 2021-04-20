var i = 0;



function move(){
    if(i==0){
        
        i=1;
        var value = 100;
        var elem = document.getElementById("myBar");
        
        var width = 1;
        var time = 10;
        var id = setInterval(frame,time);
        function frame(){
            if(width >=value){
                clearInterval(id);
                i=0;
            }else{
                width++;
                elem.style.width = width+"%";
                elem.innerHTML = width + "%";
                if(width % 10 == 0){
                    time = time + 10;
                }
            }
        }
    }

}


function movedelay(){
    setTimeout(move,500);
}

function togglehide(){
    var coll = document.getElementsByClassName("content");
    if(coll[0].style.display == "block"){
        coll[0].style.display = "none";
        coll[0].style.height = "230px";


    }else{
        coll[0].style.display = "block";
        coll[0].style.height = "auto";


    }
}

