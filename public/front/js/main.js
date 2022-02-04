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
    document.getElementById('IndexSkilInfo').innerHTML = 'Using the best latest technologies, specified for IOS and Android, makes you able to rock the market through the smartphone platform. We guarantee your app will be the best in the field. Technologies we use for mobile app development:'

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

        var postHeight = $('.blog1').children();
        for (let post = 0; post < postHeight.length; post++) {
            var element = postHeight[post].textContent.split("\n").length;
            if(element>12){
                $('.blog1').children()[post].getElementsByClassName('heightPost')[0].classList.add("bottom-overflow-fade")
            }
        }
})

function Web(){
    var oddIndex = document.getElementsByClassName('skilLogo')[0].childNodes;
        for (let i = 0 ; i < oddIndex.length; i++) {
            if(i % 2 != 0){
                const element = oddIndex[i]
                console.log(element.firstChild.title);
                document.getElementsByClassName('skilLogo')[0].childNodes[i].firstChild.src = `./../images/${element.firstChild.title}.svg`
            }
        }
    if($(window).width() < 991){
        var top = $('.InfoSkil').offset().top;
        $(window).scrollTop(top - 80)
        document.getElementById('IndexSkilInfo').innerHTML = 'Security, agility, and stability all together mean NindoWeb’s standards. By using the latest technologies, we guarantee your website will be the best in the field. We keep improving all aspects until the best. Technologies we use for web development:'
    }else{
        document.getElementById('IndexSkilInfo').innerHTML = 'Security, agility, and stability all together mean NindoWeb’s standards. By using the latest technologies, we guarantee your website will be the best in the field. We keep improving all aspects until the best. Technologies we use for web development:'

    }
}

function MobileApp(){
    var oddIndex = document.getElementsByClassName('skilLogo')[0].childNodes;
        for (let i = 0 ; i < oddIndex.length; i++) {
            if(i % 2 != 0){
                const element = oddIndex[i]
                console.log(element.firstChild.title);
                document.getElementsByClassName('skilLogo')[0].childNodes[i].firstChild.src = `./../images/${element.firstChild.title}.svg`
            }
        }
    if($(window).width() < 991){
        var top = $('.InfoSkil').offset().top;
        $(window).scrollTop(top - 80)
        document.getElementById('IndexSkilInfo').innerHTML = 'Using the best latest technologies, specified for IOS and Android, makes you able to rock the market through the smartphone platform. We guarantee your app will be the best in the field. Technologies we use for mobile app development:'
    }else{
        document.getElementById('IndexSkilInfo').innerHTML = 'Using the best latest technologies, specified for IOS and Android, makes you able to rock the market through the smartphone platform. We guarantee your app will be the best in the field. Technologies we use for mobile app development:'
    }
}
function Ui(){
    var oddIndex = document.getElementsByClassName('skilLogo')[0].childNodes;
        for (let i = 0 ; i < oddIndex.length; i++) {
            if(i % 2 != 0){
                const element = oddIndex[i]
                console.log(element.firstChild.title);
                document.getElementsByClassName('skilLogo')[0].childNodes[i].firstChild.src = `./../images/${element.firstChild.title}.svg`
            }
        }
    if($(window).width() < 991){
        var top = $('.InfoSkil').offset().top;
        $(window).scrollTop(top - 80)
        document.getElementById('IndexSkilInfo').innerHTML = 'Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design: Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design:         '
    }else{
        document.getElementById('IndexSkilInfo').innerHTML = 'Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design: Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design:         '
    }
}



