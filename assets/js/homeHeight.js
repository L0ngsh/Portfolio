var homeContainer = document.querySelector('#home .container');
var socialElement = document.querySelector('.social');

setInterval(function() {
    var windowHeight =  window.innerHeight;
    if (window.innerWidth > 1100) {
       
        if (windowHeight > homeContainer.offsetHeight) {
            homeContainerHeight = windowHeight - 101;
            homeContainer.style.height = homeContainerHeight+"px";
        }
    }

    socialElement.style.top = (windowHeight / 2) + 'px'; 
}, 10);