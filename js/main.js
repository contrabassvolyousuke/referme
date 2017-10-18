//css
$(function() {
	var coverh = $('#cover').height();
	var listh = $('.moviecont .movielist ul li').height();
	// console.log(listh);
	$('.moviecont .moviebg').css("height",coverh);
	// $('.moviecont ul').css("height",listh);
});

//mordal
$(function(){
	$('.mordal01').click(function(){
		$("body").append('<div class="mordal-bg"></div>');//追加

		mordalResize();

		$(".mordal01cont,.mordal-bg").fadeIn("slow");//表示

		$(".mordal-bg,.mordal-cl").click(function(){
						console.log("OK");
			$(".mordal01cont,.mordal-bg").fadeOut("slow",function(){
				$(".mordal-bg").remove();
			});	
		});


		$(window).resize(mordalResize);

		function mordalResize(){
	
			var w = $(window).width();
			var h = $(window).height();
			
			var cw = $(".mordal01cont").outerWidth();
			var ch = $(".mordal01cont").outerHeight();
      
	    //取得した値をcssに追加する
			$(".mordal01cont").css({
              "left": ((w - cw)/2) + "px",
              "top": ((h - ch)/2) + "px"
          	});
		}

	});

	$('.mordal02').click(function(){
		$("body").append('<div class="mordal-bg"></div>');//追加

		mordalResize();

		$(".mordal02cont,.mordal-bg").fadeIn("slow");//表示

		$(".mordal-bg,.mordal-cl").click(function(){
						console.log("OK");
			$(".mordal02cont,.mordal-bg").fadeOut("slow",function(){
				$(".mordal-bg").remove();
			});	
		});


		$(window).resize(mordalResize);

		function mordalResize(){
	
			var w = $(window).width();
			var h = $(window).height();
			
			var cw = $(".mordal02cont").outerWidth();
			var ch = $(".mordal02cont").outerHeight();
      
	    //取得した値をcssに追加する
			$(".mordal02cont").css({
              "left": ((w - cw)/2) + "px",
              "top": ((h - ch)/2) + "px"
          	});
		}

	});
});

