$(function() {
	//鼠标滑过div，左右按钮进行显示和隐藏
//	  $(".lunbo").hover(function(){
//	
//	                   $(".lr").show();
//	
//	         },function(){
//	
//	                   $(".lr").hide();
//	
//	         });
	//点击下面的小按钮，图片进行左右切换效果
	$(".pot1 .pot").click(function() {

		$(this).addClass("pot2").siblings().removeClass("pot2");

		var num = $(this).index();
        $(".lunbotu div").eq(num).fadeIn(400).siblings().fadeOut(400);
//		$(".lunbotu").animate({
//			marginLeft: -1252 * num
//		}, "slow");

	});

	//图片自动轮播效果

	var a = 0;

	var automatic = setInterval(function() {

		a++;

		a = a % 2;

//		$(".lunbotu").animate({
//			marginLeft: -1252 * a
//		}, "slow");
        $(".lunbotu div").eq(a).fadeIn(400).siblings().fadeOut(400);
		$(".pot1 .pot").eq(a).addClass("pot2").siblings().removeClass("pot2");

	}, 5000);

	//点击左右按钮，图片进行切换效果

	$(".pre").click(function() {

		a--;

		a = (a + 2) % 2;

//		$(".lunbotu").animate({
//			marginLeft: -1252 * a
//		}, "slow");
        $(".lunbotu div").eq(a).fadeIn(400).siblings().fadeOut(400);
		$(".pot1 .pot").eq(a).addClass("pot2").siblings().removeClass("pot2");

	});

	$(".next").click(function() {

		a++;

		a = a % 2;

//		$(".lunbotu").animate({
//			marginLeft: -1252 * a
//		}, "slow");
        $(".lunbotu div").eq(a).fadeIn(400).siblings().fadeOut(400);
		$(".pot1 .pot").eq(a).addClass("pot2").siblings().removeClass("pot2");

	});

});