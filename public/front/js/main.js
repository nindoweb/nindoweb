$(document).ready(function()
{
    // $(".navItem").click(function()
    // {
    //     if($('.navItem').hasClass('active')){
    //         $('.navItem').removeClass('active');
    //         $(this).addClass('active')
    //     }else{
    //         $('.navItem').addClass('active')
    //         $(this).removeClass('active')

    //     }    
    // });
    $("#section2 .item").click(function()
    {
        if($('#section2 .item').hasClass('active')){
            $('#section2 .item').removeClass('active');
            $(this).addClass('active')
        }else{
            $('#section2 .item').addClass('active')
            $(this).removeClass('active')
        }    
    });
});
$(window).ready(function(){
    var pathnameLetter = window.location.pathname.toLowerCase().split('/')[1].split('.')[0];
    document.title = "nindoWeb"+' '+pathnameLetter;
});
function changeUrl(pathname) {
    var pathnameLetter = pathname.toLowerCase();
    document.location.pathname = pathnameLetter+'.'+'html';
    document.title = "nindoWeb"+' '+pathnameLetter;
}
function goToLucnh(){
    document.location.pathname = 'lunch'+'.'+'html';

}



