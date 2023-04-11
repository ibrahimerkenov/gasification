
	$(window).on('load', function () {
	   /* var $preloader = $('#preloader-page'),
	        $svg_anm   = $preloader.find('.svg-animate');
	    		$svg_anm.delay(600).fadeOut('slow');
	   		 	$preloader.delay(1200).fadeOut('slow');
*/
	    $(".js-range-slider1").ionRangeSlider({
	    	min: 0,
	    	max: 800,
	    	from: 500,
	    	postfix: " л."
	    });
	    $(".js-range-slider2").ionRangeSlider({
	    	min: 0,
	    	max: 100,
	    	from: 85,
	    	postfix: "%"
	    });

	    var	inputR1 = $('#input-range1');
	    var	inputR2 = $('#input-range2');
	    var	inputT1 = $('#input-number1');
	    var	inputT2 = $('#input-number2');
	    var	valueCalculator = $('.calculator-circle__value');
	    var	upTo100 = $('#up-to-100km');
	    var	over100 = $('#over-100km');
	    var	priceLiter = $('.calculator-circle__price-liter');
	    var totalAmount = 18400;

	    function calculateTotal () {
	    	valueCalculator.text(Math.round(inputR1.val() * +priceLiter.text() * (inputR2.val()*0.01)));
	    }

	    calculateTotal();


	    inputR1.on('input', function () {

	    	inputT1.val($(this).val());

	    	calculateTotal();

	    	$('#calculator-circle').circleProgress({
	    	  value: 100 * +valueCalculator.text() / +totalAmount * 0.01,
	    	  size: 190,
	    	  thickness: 10,
	    	  animation: {
	    	  	duration: 1200
	    	  },
	    	  emptyFill: "#fff",
	    	  startAngle: "0",
	    	  fill: {
	    	    gradient: ["#FD1A1A", "#FE953E"],
	    	    gradientAngle: Math.PI * 2
	    	  }
	    	});

	    });

	    inputR2.on('input', function () {

	    	inputT2.val($(this).val());

	    	calculateTotal();

	    	$('#calculator-circle').circleProgress({
	    	  value: 100 * +valueCalculator.text() / +totalAmount * 0.01,
	    	  size: 190,
	    	  thickness: 10,
	    	  animation: {
	    	  	duration: 1200
	    	  },
	    	  emptyFill: "#fff",
	    	  startAngle: "0",
	    	  fill: {
	    	    gradient: ["#FD1A1A", "#FE953E"],
	    	    gradientAngle: Math.PI * 2
	    	  }
	    	});

	    });



	    $(".header-main-calculator__button").click(function() {

	    	$(".header-main-calculator__button").removeClass('header-main-calculator__button--checked');
	    	$(this).addClass('header-main-calculator__button--checked');

	    	if (upTo100.hasClass("header-main-calculator__button--checked")) {
	    		priceLiter.text(23);
	    		totalAmount = 18400;
	    	} else {
	    		priceLiter.text(24);
	    		totalAmount = 19200;
	    	}

	    	calculateTotal();

	    	$('#calculator-circle').circleProgress({
	    	  value: 100 * +valueCalculator.text() / +totalAmount * 0.01,
	    	  size: 190,
	    	  thickness: 10,
	    	  animation: {
	    	  	duration: 1200
	    	  },
	    	  emptyFill: "#fff",
	    	  startAngle: "0",
	    	  fill: {
	    	    gradient: ["#FD1A1A", "#FE953E"],
	    	    gradientAngle: Math.PI * 2
	    	  }
	    	});
	    })

	    $('#calculator-circle').circleProgress({
	      value: 100 * +valueCalculator.text() / +totalAmount * 0.01,
	      size: 190,
	      thickness: 10,
	      animation: {
	      	duration: 1200
	      },
	      emptyFill: "#fff",
	      startAngle: "0",
	      fill: {
	        gradient: ["#FD1A1A", "#FE953E"],
	        gradientAngle: Math.PI * 2
	      }
	    });






	});



	




