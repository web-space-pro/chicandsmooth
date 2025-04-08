$(document).ready(function(){
    $('#burger-icon').click(function(e){
        $('#burger-icon, .mobile-menu, .my-head').toggleClass('open');
        $('body').toggleClass('ov-hidden');
    });
});





