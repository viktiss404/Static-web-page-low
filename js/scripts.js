$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});


function resizeScr()
    {
        if ($(window).width() >= 992)
        {
          $(".align-top").attr("src","img/Logo_write.png");
        } 
        else
        {
          $(".align-top").attr("src","img/Logo_write-1.png");
      	}	

        if($(window).width() >= 993)
        {
          $(".nsc").css("display","none");
          $(".sc").css("display","block");

          $(".b").css({"padding-top":"0px"});
          $(".t").css("padding-bottom","7.5px");
        }
        else
        {
          $(".nsc").css("display","block");
          $(".sc").css("display","none");

          $(".t").css({"padding-top":"0px"});
          $(".b").css("padding-top","7.5px");
        }
	}


	$(window).on("load", function(){
        if ($(window).width() >= 992)
        {
          $(".align-top").attr("src","img/Logo_write.png");
        } 
        else
        {
          $(".align-top").attr("src","img/Logo_write-1.png");
      	}	

        if($(window).width() >= 993)
        {
          $(".nsc").css("display","none");
          $(".sc").css("display","block");

          $(".b").css({"padding-top":"0px"});
          $(".t").css("padding-bottom","7.5px");
        }
        else
        {
          $(".nsc").css("display","block");
          $(".sc").css("display","none");

          $(".t").css({"padding-top":"0px"});
          $(".b").css("padding-top","7.5px");
        }
	});


$(document).ready(function() {
	$('#myContainer').multiscroll({
		verticalCentered : true,
		scrollingSpeed: 700,
		easing: 'easeInQuart',
		menu: true,
		sectionsColor: [],
		navigation: true,
		navigationPosition: 'right',
		navigationColor: '#000',
		navigationTooltips: [],
		loopBottom: true,
		loopTop: true,
		css3: true,
		paddingTop: 0,
		paddingBottom: 0,
		normalScrollElements: null,
		scrollOverflow: true,
		scrollOverflowOptions: null,
		keyboardScrolling: false,
		touchSensitivity: 2,

		//responsive
		responsiveWidth: 0,
		responsiveHeight: 0,
		responsiveExpand: true,

		// Custom selectors
		sectionSelector: '.ms-section',
		leftSelector: '.ms-left',
		rightSelector: '.ms-right',

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){},
		afterRender: function(){},
		afterResize: function(){},
	});
});

