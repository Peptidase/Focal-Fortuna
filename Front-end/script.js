var i = 0;

var ls = localStorage.getItem('namespace.visited');
if (ls == null || ls == 0) {
    localStorage.setItem('namespace.visited', 1);
    // Simulate an HTTP redirect:
    window.location.replace("landingpage.html");
}


function moveSelf(size)
{
    setTimeout(function(){moveSelf2(size)}, 500);
    console.log("TIMEOUT RUNNING");
}


function moveSelf2(size){
    if(i==0){
        var name1 = "myBar";
        var name2 = size;
        var elem = document.getElementById(name1.concat(name2));
        var value = size;
        var width = 1;
        var time = 15;
        var id = setInterval(frame,time);
        function frame(){
            elem.style.display = "block";

            if(width >=value){
                
                i=0;
            }else{
                width++;
                elem.style.width = Math.floor(width)+"%";
                elem.innerHTML = width + "%";
                
                if(width % 10 == 0){
                    time = time + 10;
                }
            }

            if(elem.innerHTML == "100%"){
                elem.innerHTML = "Funded!";
            }
        }
        
    }

}

function togglehide(class1,class2)
{
    var class1 = document.getElementsByClassName("MapItems");
    var class2 = document.getElementsByClassName("ListItems");
    if(class1[0].style.display == "block"){
        class1[0].style.display = "none";
        class2[0].style.display = "flex";


    }else{
        class2[0].style.display = "none";
        class1[0].style.display = "block";
    }
}

