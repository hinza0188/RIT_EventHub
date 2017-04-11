

function slideshowNode(classname, dot_classname) {
    return {

        slideIndex: 1,
        init: function () {
            this.showSlides(this.slideIndex);
        },
        plusSlides: function (n) {
            this.showSlides(this.slideIndex += n);
        },
        currentSlide: function (n) {
            this.showSlides(this.slideIndex = n);

        },
        showSlides: function (n) {
            var i;
            var slides = document.getElementsByClassName( classname );
            var dots = document.getElementsByClassName( dot_classname );
            if (n > slides.length) {this.slideIndex = 1}
            if (n < 1) {this.slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            if(dot_classname !== undefined) {
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                dots[this.slideIndex - 1].className += " active";
            }
            slides[this.slideIndex-1].style.display = "block";

        }


    };

}


var trending = slideshowNode("trending-slides","dot");
trending.init();

var upcoming = slideshowNode("upcoming-slides");
upcoming.init();

