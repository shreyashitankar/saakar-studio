 <!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  </head>
<body >
  
      <img class="lazy" src="img/loading.gif" data-src="img/am/2.jpg">
      <img class="lazy" src="img/loading.gif" data-src="img/am/3.jpg">
      <img class="lazy" src="img/loading.gif" data-src="img/am/4.jpg">
      <img class="lazy" src="img/loading.gif" data-src="img/am/5.jpg">
      <img class="lazy" src="img/loading.gif" data-src="img/am/6.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/8.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/9.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/10.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/11.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/12.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/13.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/14.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/15.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/16.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/17.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/18.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/19.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/20.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/21.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/22.JPG">
      <img class="lazy" src="img/loading.gif" data-src="img/am/23.JPG">
  

	
	<script>

window.onscroll=function(ev){
    lazyload();
};

 function lazyload(){
    var lazyImage = document.getElementByClassName('lazy');
    for(var i=0;i<lazyImage.length;i++){
    if(elementInViewport(lazyImage[i])){
            lazyImage[i].setAttribute('src',lazyImage[i].getAttribute('data-src'));
        }
    }
 
 }

function elementInViewport(el){
     var rect = el.getBoundingClientRect(); 
     return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth) 
     );
}

</script>
	
	
	
	
	

	
</body>
</html>