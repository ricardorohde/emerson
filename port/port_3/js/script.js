//JavaScript

//slideShow
var imageCount = 1;
var total = 4;

function photo(x) {
    var image = document.getElementById('image');
    imageCount = imageCount + x;
    if(imageCount > total){imageCount = 1;}
    if(imageCount < 1){imageCount = total;}
    image.src = "images/slide"+ imageCount +".jpg";
}

window.setInterval(function photoA() {
    var image = document.getElementById('image');
    imageCount = imageCount + 1;
    if(imageCount > total){imageCount = 1;}
    if(imageCount < 1){imageCount = total;}
    image.src = "images/slide"+ imageCount +".jpg";
},10000);
//end slideShow