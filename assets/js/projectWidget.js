var leftElements = document.querySelectorAll('.left');
var rightElements = document.querySelectorAll('.right');

setInterval(function() {
    if (window.innerWidth >= 500) {
        var sectionWidth = document.querySelector('.projectsWidgetArea').offsetWidth;

        leftElements.forEach(el => {
            el.style.width = sectionWidth / 2 + 'px';
        });

        rightElements.forEach(el => {
            el.style.width = sectionWidth / 2 + 'px';
            el.style.marginLeft = sectionWidth / 2 - 3 + 'px';
        })
    }
}, 1);