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

$(document).ready(function(){
    var postHeight = $('.BlogItem').children();
    for (let post = 0; post < postHeight.length; post++) {
        var element = postHeight[post].textContent.split("\n").length;
        if(element>12){
            $('.BlogItem').children()[post].getElementsByClassName('heightPost')[0].classList.add("bottom-overflow-fade")
        }
    }
        var text = $('.maniTitle').text();
        var pos = 0;
        var delay = 70; // milliseconds
        function typeon() {
        pos++;
        var typedText = text.substr(0, pos);
        if(pos < text.length){
            $('.maniTitle').text(typedText);
            if(pos < 60){
                if (pos < text.length) {
                    setTimeout(typeon, delay);       
                }
            }  
        }
        }
        typeon();
        cleartypeon();
})



