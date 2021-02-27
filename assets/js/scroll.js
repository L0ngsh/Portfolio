// Smooth Scroll
var links = document.querySelectorAll('a[href^="#"]');
var allOffsets = new Array();

links.forEach(l => {
    let id = l.getAttribute('href');
        
    let targetOffset = document.querySelector('section'+id).offsetTop;

    if (id == "#home") {
        targetOffset = 0;
    }

    l.onclick = function(e) {
        e.preventDefault();
        
        links.forEach(s => {
            s.setAttribute('active', '0');
        });
        document.querySelector('a[href="'+id+'"]').setAttribute('active', '1');

        window.scroll({
            top: targetOffset,
            behavior: 'smooth'
        });
    }
});

// Scriot to change header's vakground color
var header = document.querySelector('header'); 
setInterval(function() {
    if(window.innerWidth > 500) {    
        if (window.scrollY >= 100) {
            header.style.backgroundColor = "#1D1C22";
        } else {
            header.style.backgroundColor = "#1D1B26";
        }
    }
}, 10);