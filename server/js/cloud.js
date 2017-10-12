$(document).ready(function() {
	//NEXT
		$("#home > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-intro > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "block"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#introduction > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-cloud > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "block"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#computing > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-draw > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "block"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#drawbacks > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-req > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "block"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#requirements > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-comp > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "block"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#competitors > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-eval > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "block"});
			$("#resources").css({display: "none"});
		});
		$("#evaluations > h4 > span > #next").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-res > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "block"});
		});

	//PREVIOUS
		$("#introduction > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-home > a").addClass("open");
			$("#home").css({display: "block"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#computing > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-intro > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "block"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#drawbacks > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-cloud > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "block"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#requirements > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-draw > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "block"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#competitors > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-req > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "block"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#evaluations > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-comp > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "block"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#resources > h4 > span > #previous").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$("#quick-eval > a").addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "block"});
			$("#resources").css({display: "none"});
		});

	//QUICK SELECT
		$("#quick-home > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "block"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#quick-intro > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "block"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#quick-cloud > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "block"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#quick-draw > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "block"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#quick-req > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "block"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#quick-comp > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "block"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "none"});
		});
		$("#quick-eval > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "block"});
			$("#resources").css({display: "none"});
		});
		$("#quick-res > a").click(function(){
			$("#quick > ul > li > a").removeClass("open");
			$(this).addClass("open");
			$("#home").css({display: "none"});
			$("#introduction").css({display: "none"});
			$("#computing").css({display: "none"});
			$("#drawbacks").css({display: "none"});
			$("#requirements").css({display: "none"});
			$("#competitors").css({display: "none"});
			$("#evaluations").css({display: "none"});
			$("#resources").css({display: "block"});
		});
});