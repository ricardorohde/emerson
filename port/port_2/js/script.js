//JavaScript

//slideShow
var imageCount = 1;
var total = 4;

function photo(x) {
    var image = document.getElementById('image');
    imageCount = imageCount + x;
    if(imageCount > total){imageCount = 1;}
    if(imageCount < 1){imageCount = total;}
    image.src = "pics/slide"+ imageCount +".jpg";
}

window.setInterval(function photoA() {
    var image = document.getElementById('image');
    imageCount = imageCount + 1;
    if(imageCount > total){imageCount = 1;}
    if(imageCount < 1){imageCount = total;}
    image.src = "pics/slide"+ imageCount +".jpg";
},10000);
//end slideShow


//facebook
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//end facebook




//preload images
function preloader() {
	if (document.getElementById) {
		document.getElementById("circle_1").style.background = "url(pics/circle_1.jpg) no-repeat -9999px -9999px";		
		document.getElementById("circle_2").style.background = "url(pics/circle_2.jpg) no-repeat -9999px -9999px";	
		document.getElementById("circle_3").style.background = "url(pics/circle_3.jpg) no-repeat -9999px -9999px";
		
		document.getElementById("pdf_1").style.background = "url(pics/pdf_11.png) no-repeat -9999px -9999px";
		document.getElementById("pdf_2").style.background = "url(pics/pdf_22.png) no-repeat -9999px -9999px";
	}
}
