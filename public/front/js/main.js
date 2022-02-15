$(document).ready(function()
{
    // $('.hiringBtn').attr('disabled','disabled');

    // - Noel Delgado | @pixelia_me
    const nodes = [].slice.call(document.querySelectorAll("li"), 0);
    const directions = { 0: "top", 1: "right", 2: "bottom", 3: "left" };
    const classNames = ["in", "out"]
    .map((p) => Object.values(directions).map((d) => `${p}-${d}`))
    .reduce((a, b) => a.concat(b));

    const getDirectionKey = (ev, node) => {
    const { width, height, top, left } = node.getBoundingClientRect();
    const l = ev.pageX - (left + window.pageXOffset);
    const t = ev.pageY - (top + window.pageYOffset);
    const x = l - (width / 2) * (width > height ? height / width : 1);
    const y = t - (height / 2) * (height > width ? width / height : 1);
    return Math.round(Math.atan2(y, x) / 1.57079633 + 5) % 4;
    };

    class Item {
    constructor(element) {
        this.element = element;
        this.element.addEventListener("mouseover", (ev) => this.update(ev, "in"));
        this.element.addEventListener("mouseout", (ev) => this.update(ev, "out"));
    }

  update(ev, prefix) {
    this.element.classList.remove(...classNames);
    this.element.classList.add(
      `${prefix}-${directions[getDirectionKey(ev, this.element)]}`
    );
  }
}


nodes.forEach((node) => new Item(node));
        $('*').each(function(){
        var backImg;

        if ($(this).is('img')) {
            console.log($(this).css('object-fit','cover'));
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

function upload () {
    var name = $("input[name=name]").val();
    var job = $("input[name=job_title]").val();
    var email = $("input[name=email]").val();
    console.log(name + '/' + job + '/' + email);
    if(name.length > 0 && job.length > 0 && email.length > 0){
        $('.hiringBtn').removeAttr('disabled');
        $('.hiringBtn').css('background','#FF2D20')
    }else{
        $('.hiringBtn').attr('disabled','');
        $('.hiringBtn').css('background','#ffdfde')
    }
}

function hiringSubmit() {
    ChosedFile()
}


function ChosedFile(){
    $("input[name=file]").remove();
    $('#HiringSection1 .parentHiring .result1').addClass('active')
    setTimeout(() => {
        $('#HiringSection1 .parentHiring .result1').removeClass('active')
        $('#HiringSection1 .parentHiring .result2').addClass('active')
    }, 3000);

}

function ResumeFileChose (){
    $('.cover').remove()
    $("input[name=file]").click();

}
function sss (e){

    console.log(e.target);
}
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




