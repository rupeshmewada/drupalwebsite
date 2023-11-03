jQuery(document).ready(function(){
    jQuery('.menu').on('click', function(){
        jQuery('.main-header').toggleClass('show') 
        jQuery('.menu-open').toggle(300)
        jQuery('.menu-close').toggle(300)
     });
})