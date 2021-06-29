class typer{

    constructor(text, retypeText){
        this.i = 0;
        this.x = 0;
        this.item = document.getElementById("type");
        this.text = text;
        this.retypeText = retypeText;
        this.type();
    }

    type(){
        this.item.innerHTML += this.text[this.x].charAt(this.i);
        this.i++;

        if (this.i < this.text[this.x].length) {
            setTimeout(() => {
                this.type();
            }, 150);
        }else{
            if(this.retypeText == true){
                this.i = 0;
                setTimeout(() => {
                    this.retype();
                }, 3000);
            }
        }
    }

    retype() {
        this.item.innerHTML = this.item.innerHTML.substring(0, this.item.innerHTML.length-1);

        if (this.item.innerHTML.length > 0) {
            setTimeout(() => {
                this.retype();
            }, 100);
        }else{
            this.x++;
            //this.x > this.text.length -1 == loop
            if(this.x >= this.text.length - 1){
                //this.x = 0;
                this.retypeText = false;
            }
            this.type();       
        }
    }
}

var work = new typer(["//Junior Software Developer", "//Aspiring Backend Engineer"], true);