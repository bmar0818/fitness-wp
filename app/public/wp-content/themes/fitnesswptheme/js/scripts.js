jQuery(document).ready(function($){

    //Responsive Menu
   $('#menu-main-menu').slicknav({
       label : '',
       appendTo : '.navigation-bar'
    });

    //Run BX Slider
    $('.test-list').bxSlider({
       auto: true,
        controls: false,
         mode: 'horizontal',
         pause: 7000
    });


    const headerScroll = document.querySelector('.navigation-bar');
    const rect = headerScroll.getBoundingClientRect();
    const topDistance = Math.abs(rect.top);
    fixedNav(topDistance);

});

window.onscroll = () => {
    const scroll = window.scrollY;

    fixedNav(scroll);
}

//Fixed top  nav menu
function fixedNav(scroll) {
    const headerScroll = document.querySelector('.navigation-bar');

    if(scroll > 300) {
        headerScroll.classList.add('fixed-top');
    } else {
        headerScroll.classList.remove('fixed-top');
    }
}