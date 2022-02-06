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
    // document.getElementById('IndexSkilInfo').innerHTML = 'Using the best latest technologies, specified for IOS and Android, makes you able to rock the market through the smartphone platform. We guarantee your app will be the best in the field. Technologies we use for mobile app development:'

    $("#homesection2 .item").click(function()
        {
            if($('#homesection2 .item').hasClass('active')){
                $('#homesection2 .item').removeClass('active');
                $(this).addClass('active')
            }else{
                $('#homesection2 .item').addClass('active')
                $(this).removeClass('active')
            }    
        });
    $("#homesection2 .item").click(function()
    {
        if($('#homesection2 .item').hasClass('active')){
            $('#homesection2 .item').removeClass('active');
            $(this).addClass('active')
        }else{
            $('#homesection2 .item').addClass('active')
            $(this).removeClass('active')
        }    
    });
    $('.servicesPost').children()[post].getElementsByClassName('heightPost')[0].classList.add("bottom-overflow-fade")

    var postHeight = $('.servicesPost');
    for (let post = 0; post < postHeight.length; post++) {
        var element = postHeight[post].textContent.split("\n").length;
        if(element>12){
            $('.servicesPost').children()[post].getElementsByClassName('heightPost')[0].classList.add("bottom-overflow-fade")
        }
    }
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
        if(element>3){
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

        // var postHeight = $('.blog1').children();
        // for (let post = 0; post < postHeight.length; post++) {
        //     var element = postHeight[post].textContent.split("\n").length;
        //     if(element>12){
        //         $('.blog1').children()[post].getElementsByClassName('heightPost')[0].classList.add("bottom-overflow-fade")
        //     }
        // }       
})

    function Web(){
        var servicesPost = $('#homesection3').children()
        
        for (let i = 0; i < servicesPost.length; i++) {
            var element = servicesPost[i];
            // console.log(element);
            console.log(servicesPost.attr('id'));
            if(i = servicesPost.attr('id')){
                $(this).classList.add('show')
                alert(1)
                console.log($(this));
            }

        }


    }
    function srviceScrollOnMobile(){
        if($(window).width() < 991){
            var top = $('#nav-tabContent').offset().top - 50;
            $(window).scrollTop(top)
        }
    }
    function Web2(){
        
        // var servicesPost = $('#homesection3').children()
        // for (let i = 0; i < servicesPost.length; i++) {
        //     var element = servicesPost[i];
        //     // if(servicesPost[$('#servicesItem').attr('title')].classList.contains('active')){
        //     //     servicesPost[$('#servicesItem').attr('title')].classList.remove('active')
        //     // }else{
        //     //     servicesPost[$('#servicesItem').attr('title')].classList.add('active')
        //     // }
        //     // console.log(servicesPost[$('#servicesItem').children().attr('title') - 1]);
        //     servicesPost[$('#servicesItem').children().attr('title')].classList.remove('show')
        // }
        // servicesPost[$('#servicesItem').children().attr('title') -1].classList.add('show')


    }
    // function Web3(){
    //     var servicesPost = $('#homesection3').children()
    //     for (let i = 0; i < servicesPost.length; i++) {
    //         const element = servicesPost[i];
    //         servicesPost[$('#servicesItem').children().attr('title')].classList.remove('show')
    //         servicesPost[$('#servicesItem').children().attr('title')].classList.add('show')
    //         console.log(servicesPost[$('#servicesItem').children().attr('title')]);
    //     }

    // }
        // var oddIndex = document.getElementsByClassName('skilLogo')[0].childNodes;
        //     for (let i = 0 ; i < oddIndex.length; i++) {
        //         if(i % 2 != 0){
        //             const element = oddIndex[i]
        //             console.log(element.firstChild.title);
        //             document.getElementsByClassName('skilLogo')[0].childNodes[i].firstChild.src = `./../images/${element.firstChild.title}.svg`
        //         }
        //     }
    //     if($(window).width() < 991){
    //         var top = $('.InfoSkil').offset().top;
    //         $(window).scrollTop(top - 80)
    //         document.getElementById('IndexSkilInfo').innerHTML = 'Security, agility, and stability all together mean NindoWeb’s standards. By using the latest technologies, we guarantee your website will be the best in the field. We keep improving all aspects until the best. Technologies we use for web development:'
    //     }else{
    //         document.getElementById('IndexSkilInfo').innerHTML = 'Security, agility, and stability all together mean NindoWeb’s standards. By using the latest technologies, we guarantee your website will be the best in the field. We keep improving all aspects until the best. Technologies we use for web development:'
            
    //     }        
    // }

    // function MobileApp(){
    //     var oddIndex = document.getElementsByClassName('skilLogo')[0].childNodes;
    //         for (let i = 0 ; i < oddIndex.length; i++) {
    //             if(i % 2 != 0){
    //                 const element = oddIndex[i]
    //                 console.log(element.firstChild.title);
    //                 document.getElementsByClassName('skilLogo')[0].childNodes[i].firstChild.src = `./../images/${element.firstChild.title}.svg`
    //             }
    //         }
    //     if($(window).width() < 991){
    //         var top = $('.InfoSkil').offset().top;
    //         $(window).scrollTop(top - 80)
    //         document.getElementById('IndexSkilInfo').innerHTML = 'Using the best latest technologies, specified for IOS and Android, makes you able to rock the market through the smartphone platform. We guarantee your app will be the best in the field. Technologies we use for mobile app development:'
    //     }else{
    //         document.getElementById('IndexSkilInfo').innerHTML = 'Using the best latest technologies, specified for IOS and Android, makes you able to rock the market through the smartphone platform. We guarantee your app will be the best in the field. Technologies we use for mobile app development:'
    //     }
    // }
    // function Ui(){
    //     var oddIndex = document.getElementsByClassName('skilLogo')[0].childNodes;
    //         for (let i = 0 ; i < oddIndex.length; i++) {
    //             if(i % 2 != 0){
    //                 const element = oddIndex[i]
    //                 console.log(element.firstChild.title);
    //                 document.getElementsByClassName('skilLogo')[0].childNodes[i].firstChild.src = `./../images/${element.firstChild.title}.svg`
    //             }
    //         }
    //     if($(window).width() < 991){
    //         var top = $('.InfoSkil').offset().top;
    //         $(window).scrollTop(top - 80)
    //         document.getElementById('IndexSkilInfo').innerHTML = 'Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design: Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design:         '
    //     }else{
    //         document.getElementById('IndexSkilInfo').innerHTML = 'Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design: Perfect UX makes customers loyal, and precious UI makes you memorable. We’ve hard codes to evaluate the product before launching to assure everything is aligned with standards. We guarantee that Your product will be perfect. Technologies that we use for UX/UI Design:         '
    //     }
    // }
    
    

    