var i = 0
var text="//Junior Software Developer";
var speed=150;
var item = document.getElementById("type");

function type(){

    item.innerHTML += text.charAt(i);
    i++;

    if (i < text.length) {
        setTimeout(type, speed);
    }
    
    console.log(i);
}

type();