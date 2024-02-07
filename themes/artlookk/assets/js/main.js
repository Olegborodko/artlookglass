const { createApp } = Vue

$( document ).ready(function() {


    document.lastScrollTop = 0;

    var width = document.body.clientWidth;

    $("#menuOpen").click(function (e) {
        $(this).toggleClass("opened");
        // $('.menu__list').toggleClass("opened");
        $('body').toggleClass("show__catalog");
        $('body').toggleClass("_lock");
    });
    
    window.onload = function(){

        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 200);

/*        let megaMenu = document.querySelector(".disable-mobile");
        let openMega = document.querySelector(".mega-menu");
        megaMenu.addEventListener("click", function(e) {
            openMega.classList.toggle("mega-open");
            megaMenu.classList.toggle("mega-menu-active");
            let bodyElement = document.querySelector('body');
            if(bodyElement.classList.contains('_lock')){
                bodyElement.classList.remove('_lock');
            } else {
                bodyElement.classList.add('_lock');
            }
        });*/

        let menuArrows = document.querySelectorAll(".mega-menu__sub-item");
        if (menuArrows.length > 0) {
            for (let index = 0; index < menuArrows.length; index++) {
                const menuArrow = menuArrows[index];
                menuArrow.addEventListener("click", function (e) {
                    let inputs = document.querySelectorAll(".prod-active")
                    if (inputs.length > 0){
                        for(let i = 0; i < inputs.length;i++){
                            const inputcheck = inputs[i];
                            inputcheck.classList.remove('prod-active');
                        }
                    }
                    let input = document.querySelectorAll(".active-links")
                    if (input.length > 0){
                        for(let i = 0; i < input.length;i++){
                            const inputcheck = input[i];
                            inputcheck.classList.remove('active-links');
                        }
                    }
                    let elemtitle = menuArrow.querySelector(".mega-menu__sub-title");
                    let elem = menuArrow.querySelector(".mega-menu__sub-sub-list");
                    elemtitle.classList.add("active-links");
                    elem.classList.add("prod-active");
                });
            }
        }

        var infoBlock = document.querySelectorAll('.switch-finishes__right-textImgInfo');
        if (infoBlock.length > 0){
            for (let i = 0; i < infoBlock.length; i++){
                const infoBlockSelect = infoBlock[i];
                infoBlockSelect.onmouseover = function() {
                    var elt = infoBlockSelect.previousElementSibling;
                    elt.style.display = "flex";
                }
                infoBlockSelect.onmouseout = function() {
                    var elt = infoBlockSelect.previousElementSibling;
                    elt.style.display = "none";
                }
            }
        }
    }

    let inputRange = document.querySelector('input[type=range]');
    if (inputRange != null){
        inputRangeChangeInfo();
        inputRange.addEventListener("click", function (){
            inputRangeChangeInfo();
        });
    }

    function inputRangeChangeInfo(){
        let inputRangeValue = inputRange.value;
        let getChangeImage = document.querySelector('#inputRangeChange');
        if (inputRangeValue == 0){
            getChangeImage.src = "img/slg21.svg";
        } else {
            getChangeImage.src = "img/slg2.svg";
        }
    }



    $('.estimate-show, #estimate, #estimate2, #estimate3, #steel-estimate-popup1, #steel-estimate-popup2, #cgs200-popup-estimate, #framed-door-estimate1').on({
        "click":function( e ){
            e.preventDefault();
            document.lastScrollTop = $(window).scrollTop();
            $('#popup2').addClass("open-popup");
            $('body').addClass("_lock");
            //$('.wrapper').css({"filter":"blur(20px)"});
           // $('.wrapper').css({"position":"fixed"});
           // $(window).scrollTop(0);
        }
    });

/*    $('#close-popupe').on({
        "click":function(){
            $('#popup2').removeClass("open-estimate-popup");
            $('body').removeClass("_lock");
           // $('.wrapper').css({"filter":"blur(0px)"});
           // $('.wrapper').css({"position":""});
          //  $(window).scrollTop(document.lastScrollTop);
        }
    });*/
    $('#close-popup, #close-popupe').on({
        "click":function(){
            $('.b-popup').removeClass("open-popup");
            $('body').removeClass("_lock");
           // $('.wrapper').css({"filter":"blur(0px)"});
           // $('.wrapper').css({"position":""});
          //  $(window).scrollTop(document.lastScrollTop);
        }
    });

    $('#estimate_input_file_button').on({
        "click": function(){
            $('#estimate_input_file').click();
        }
    });

    $('.show__popup__contact, #show-popup, #aluminum-order1, #aluminum-order2, #aluminum-order3, #frameless-order1, #frameless-order2, #frameless-order3, #slg1116-open-popup1, #slg1116-open-popup2, #slg1116-open-popup3, #slg1116-open-popup4, #steel-contact-popup1, #cgs200-popup-order1, #cgs200-popup-order2, #cgs200-popup-order3, #cgs200-popup-order4, #cgs200-popup-order5, #framed-door-order1, #framed-door-order2, #framed-door-order3, #framed-door-order4, #framed-door-order5, #framed-door-order6, #framed-door-order7').on({
        "click":function( e ){
            e.preventDefault();
           // document.lastScrollTop = $(window).scrollTop();
            $('#popup1').addClass("open-popup");
            ///$('.wrapper').css({"filter":"blur(20px)"});
           // $('.wrapper').css({"position":"fixed"});
           // $(window).scrollTop(0);
           // $('#menuOpen').removeClass("opened");
           // $('body').removeClass("menu__open");
            $('body').addClass("_lock");
        }
    });

    $(window).scroll(function(){
        if($(window).scrollTop() > 700) {
            $('#tab_panel_fixed').slideDown(300);
        } else {
            $('#tab_panel_fixed').slideUp(300);
        }

    });

/*    $('.foomenu__button').on({
        "click":function(){
            $('#popup1').addClass("open-popup");
            $('.wrapper').css({"filter":"blur(20px)"});
            $('.wrapper').css({"position":"fixed"});
        }
    });*/

/*    $('#close-popup').on({
        "click":function(){
            $('#popup1').removeClass("open-contact-popup");
           // $('.wrapper').css({"filter":""});
            //$('.wrapper').css({"position":""});
           // $(window).scrollTop(document.lastScrollTop);
        }
    });*/

    $('[data-fancybox="system-configuration-items"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="type-of-handless-fancy"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="slg-track-configuration"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="slg-system-configuration"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="steel-sliding-gallery-config"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="cgs200-system-configuration-gallery"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="framed-door-conf-gallery"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });

    $('[data-fancybox="framed-youtube-video"]').fancybox({
        arrows: false,
        infobar: false,
        buttons:[
            "close"
        ],
        animationEffect: "zoom"
    });



    // Custom Steel - SWICH TABS
    let switchSwingEl = $('#handles-swich-swing');
    let switchSlidingsEl = $('#handles-swich-slidings');
    let switchBiFoldingEl = $('#handles-swich-bi-folding');
    let switchStationaryEl = $('#handles-swich-stationary');





    $('.slgNine-two').slick({
        dots:false,
        slidesToShow: 4,
        infinite: false,
        centerMode: false,
        draggable:true,
        prevArrow: $('.slg-prev-left'),
        nextArrow: $('.slg-next-right')
    });

    $('.slider-point, .mini-post, .shoe-track').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.balcony-point, .balcony-shoe, .balcony-mini').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.balustrade-post, .balustrade-shoe, .balustrade-mini').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.staircase-page__bottom-button').on({
        "click":function(){
            $('.slider-point, .mini-post, .shoe-track').slick('refresh');
            $('.balcony-point, .balcony-shoe, .balcony-mini').slick('refresh');
            $('.balustrade-post, .balustrade-shoe, .balustrade-mini').slick('refresh');
        }
    });

    var $selector = '#lightSlider li:not(".clone") a';
    $selector += ',#lightSliderVertical li:not(".clone") a';
    $().fancybox({
        selector : $selector,
        backFocus : false,
        buttons : [
            'slideShow',
            'share',
            'zoom',
            'fullScreen',
            'thumbs',
            'download',
            'close'
        ],
        afterLoad: function(){
            v_slider = $('#lightSliderVertical').lightSlider(
                {gallery: true,
                    item: 1,
                    loop:true,
                    slideMargin: 0,
                    thumbItem: 6,
                    galleryMargin: 10,
                    thumbMargin: 10,
                    vertical: true
                });
        }
    });

    $('.top-catalog__toggle, .main__catalog__bg').click( function () {
        $('body').toggleClass('show__catalog');
    } );

    $('.catalog__toggle').click( function ( e ) {
        e.preventDefault();
    });

    const customerRoleList = [
        {
          name: 'Homeowner',
          icon: '_icon-homeowner'
        },

        {
          name: 'Business Owner',
          icon: '_icon-businessowner'
        },

        {
          name: 'Designer',
          icon: '_icon-designer'
        },

        {
          name: 'Architect',
          icon: '_icon-architect'
        },
        {
          name: 'Contractor',
          icon: '_icon-contractor'
        },
        {
          name: 'Glass Company',
          icon: '_icon-glasscompany'
        },
        {
          name: 'Real Estate/Developer',
          icon: '_icon-realestate'
        },
        {
          name: 'Other',
          icon: '_icon-other'
        },
    ];




/*
    if ( document.querySelector('#form__content__app') ) {

        createApp({
            data() {
                return {
                    customerRole: customerRoleList,
                    status: '',
                    result: '',
                    errorList: [],
                    form: {
                        form_name: 'Contact us',
                        name: '',
                        phone: '',
                        email: '',
                        message: '',
                        file: [],
                        customerRole: 'Other',
                        check: false,
                    }

                }
            },
            computed: { },
            methods: {
                async createBlobAndSet( file ) {
                    const fileToBlob = async (file_p) => new Blob([new Uint8Array(await file_p.arrayBuffer())], {type: file_p.type });
                    this.form.file = await fileToBlob(file);
                },
                submit(){
                    delete this.form.file;
                    this.errorList = [];
                    if (
                        !this.form.name &&
                        !this.form.phone &&
                        !this.form.email
                    ) {
                        this.errorList.push('Required fields are not filled!')
                        return false;
                    }

                    this.status = 'loading';
                    $.ajax({
                        url: '/wp-json/wp/v2/send_message_rest',
                        type: 'post',
                        data: this.form,
                        success: ( response ) => {
                            if (response['text']) {
                                this.result = response['text'];
                                this.status = 'success';
                                setTimeout( () =>{
                                    $( "#close-popup" ).trigger( "click" );
                                }, 3000 );
                            }
                        },
                        error: ( response, textStatus, errorThrown ) => {
                            console.log("error", response, textStatus, errorThrown );
                        },
                        complete: () => {

                        }
                    });
                },
            },

        }).mount('#form__content__app')

    }*/



    if ( document.querySelector('#partitions__quiz__app') ) {

        createApp({
            data() {
                return {
                    customerRole: customerRoleList,
                    step: 0,
                    status: '',
                    result: '',
                    errorList: [],
                    form: {
                        form_name: 'Partitions Quiz App',
                        name: '',
                        phone: '',
                        email: '',
                        message: '',
                        dimensions_inch_1: '',
                        dimensions_inch_2: '',
                        file: [],
                        customerRole: 'Other',
                        where_would_you_like_to_install_a_glass_partition: 'Kitchen or dinning room',
                        what_type_of_system_meets_your_aesthetics: 'Frameless Glass Partitions',
                        which_door_type_do_you_prefer: 'Sliding doors',
                        what_type_of_glass_do_you_prefer: 'Low-Iron (Starphire) Glass',
                        do_you_need_delivery_and_installation_services: 'I need delivery and installation',
                    }

                }
            },
            computed: { },
            methods: {
                async createBlobAndSet( file ) {
                    const fileToBlob = async (file_p) => new Blob([new Uint8Array(await file_p.arrayBuffer())], {type: file_p.type });
                    this.form.file = await fileToBlob(file);
                },
                submit(){
                    delete this.form.file;
                    this.errorList = [];
                    if (
                        !this.form.name &&
                        !this.form.phone &&
                        !this.form.email
                    ) {
                        this.errorList.push('Required fields are not filled!')
                        return false;
                    }

                    this.status = 'loading';
                    $.ajax({
                        url: '/wp-json/wp/v2/send_message_rest',
                        type: 'post',
                        data: this.form,
                        success: ( response ) => {
                            if (response['text']) {
                                this.result = response['text'];
                                this.status = 'success';
                            }
                        },
                        error: ( response, textStatus, errorThrown ) => {
                            console.log("error", response, textStatus, errorThrown );
                        },
                        complete: () => {

                        }
                    });

                },

                paginationF( num ){

                    this.step = this.step + num;

                }
            },

        }).mount('#partitions__quiz__app')

    }



/* mobile rezolution show sub menu */
$(".mob__menu__wrap p.menu__link-dropdown ._icon-menu_arrow").click(function() {
	let subMenuId = $(this).attr("data-submenuid");
	if (subMenuId){
		$("ul#submenu_" + subMenuId).toggleClass("opened");
	}
});

// contact form add name of files
document.addEventListener('change', function (e) {
  if (e.target && e.target.id === 'estimate_input_file') {
      var fileNameDisplay = document.getElementById('file-name-display');
      if (fileNameDisplay) {
          fileNameDisplay.textContent = 'file added: ' + e.target.files[0].name + '\n';
      }
  }
});


});