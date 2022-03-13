$(document).ready(function(){

   
    $('.hiringBtn').attr('disabled','disabled');

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
    // $('.servicesPost').children()[post].getElementsByClassName('heightPost')[0].classList.add("bottom-overflow-fade")

    
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
    })

    function upload () {
        var name = $("input[name=name]").val();
        var job = $("input[name=job]").val();
        var email = $("input[name=email]").val();
        var files = $('#myPdf').prop('files')[0].name;
        if(name.length > 0 && job.length > 0 && email.length > 0 && files.length > 0){
            $('.hiringBtn').removeAttr('disabled');
            $('.hiringBtn').css('background','#FF2D20')
        }else{
            $('.hiringBtn').attr('disabled','disabled');
            $('.hiringBtn').css('background','#ffdfde');
            $('.hiringBtn').css('cursor','not-allowed');
        }
    }
    
    function ResumeFileChose (){
        $("input[name=file]").click();
        if($('.cover result3').hasClass('active')){
            $('.cover result3').removeClass('active');
            $('.cover result1').addClass('active');

        }

    }
    
    function ResumeFileChoseAgain (){
        $("input[name=file]").click();
        upload();
    }

    function Web(){
        var servicesPost = $('#homesection3').children()
        for (let i = 0; i < servicesPost.length; i++) {
            if(i = servicesPost.attr('id')){
                $(this).classList.add('show')
            }
        }
    }

    function srviceScrollOnMobile(){
        if($(window).width() < 991){
            var top = $('#nav-tabContent').offset().top - 50;
            $(window).scrollTop(top)
        }
    }
  
    $("#formSubmit").submit(function(e) { 
        e.preventDefault();
        
        $('.cover .result1').removeClass('active');
        $('.cover .result2').addClass('active');
        $('.cover .result3').removeClass('active');
        var form = $('#formSubmit')[0];
        var formData = new FormData(form);
        
        jQuery.each(jQuery('#myPdf')[0].files, function(i, file) {
            formData.append('file-'+i, file);
            console.log(formData);
            $('.hiringBtn').attr('disabled','');
            $('.hiringBtn').css('background','#ffdfde');

        });
        async function getResponseHiring() {
            const response = await $.ajax({
                url: "https://nindoweb.com/api/v1/hiring", 
                data: formData,
                type: "POST", 
                contentType: false,       
                cache: false,             
                processData: false,
            })
            if(response) {
                $('.cover .result1').removeClass('active');
                $('.cover .result2').removeClass('active');
                $('.cover .result3').addClass('active');
                $('.hiringBtn').attr('disabled','disabled');
                $('.hiringBtn').css('background','#ffdfde');
                $('#nameUser').val('');
                $('#jobUser').val('');
                $('#emailUser').val('');

            }else{
                $('.cover .result1').addClass('active');
                $('.cover .result2').removeClass('active');
                $('.cover .result3').removeClass('active');
                $('.hiringBtn').attr('disabled','disabled');
                $('.hiringBtn').css('background','#ffdfde');
            }
        }
        getResponseHiring();
    });
           
    $(document).ready(function () {
        $('.LunchPrice .item').click(function () {
            if($(this).hasClass('active')){
                $('.LunchPrice .item').removeClass('active');
                $(this).addClass('active');
    
            }else{
                $('.LunchPrice .item').removeClass('active');
                $(this).addClass('active');
    
            }
        })
            
         
    });
      
