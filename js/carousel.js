class carouseltext{

    constructor(elements, carousel, period){
        this.elements = elements;
        this.carousel = carousel;
        this.period = parseInt(period, 10) || 2000;
        this.loop = 0;
        this.isDeleting = true;
        this.text;
    }

    tick(){
        var i = this.loop % this.carousel.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting == true) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        }else{
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.element.innerHTML = '<span class="wrap">'+this.txt+'</span>';


        var that = this;
        var delta = 300 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        //Hold the function from executing again until delta time has passed.
        setTimeout(function() {
            that.tick();
          }, delta);

    }

    textLoad() {
        var elements = document.getElementsByClassName('txt-rotate');
        for (var i=0; i<elements.length; i++) {
          var carousel = elements[i].getAttribute('data-rotate');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new Text(elements[i], JSON.parse(carousel), period);
            }
        }
    }


}