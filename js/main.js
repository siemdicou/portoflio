jQuery(document).ready(function($){
	var timelineBlocks = $('.cd-timeline-block'),
		offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}
});
// $(".work_item").addEventListener("hover", function() {
   
// }, false)
function work_animtaion_enter(id) {
	switch(id){
		case 1:
			TweenMax.to(work_item_text_1,  0,       {opacity:1});
			TweenMax.to(work_item_text_1,  .5,       {height:"45%", ease: Back.easeOut});
		break;
		case 2:
			TweenMax.to(work_item_text_2,  0,       {opacity:1});
			TweenMax.to(work_item_text_2,  .5,       {height:"45%", ease: Back.easeOut});
		break;
		case 3:
			TweenMax.to(work_item_text_3,  0,       {opacity:1});
			TweenMax.to(work_item_text_3,  .5,       {height:"45%", ease: Back.easeOut});
		break;
		case 4:
			TweenMax.to(work_item_text_4,  0,       {opacity:1});
			TweenMax.to(work_item_text_4,  .5,       {height:"45%", ease: Back.easeOut});
		break;
		case 5:
			TweenMax.to(work_item_text_5,  0,       {opacity:1});
			TweenMax.to(work_item_text_5,  .5,       {height:"45%", ease: Back.easeOut});
		break;
		case 6:
			TweenMax.to(work_item_text_6,  0,       {opacity:1});
			TweenMax.to(work_item_text_6,  .5,       {height:"45%", ease: Back.easeOut});
		break;
		case 7:
			TweenMax.to(work_item_text_7,  0,       {opacity:1});
			TweenMax.to(work_item_text_7,  .5,       {height:"45%", ease: Back.easeOut});
		break;
	}	
};
function work_animtaion_leave(id_leave) {
	switch(id_leave){
		case 1:
			TweenMax.to(work_item_text_1,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_1,  0,       {delay:.5});
		break;
		case 2:
			TweenMax.to(work_item_text_2,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_2,  0,       {delay:.5});
		break;
		case 3:
			TweenMax.to(work_item_text_3,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_3,  0,       {delay:.5});
		break;
		case 4:
			TweenMax.to(work_item_text_4,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_4,  0,       {delay:.5});
		break;
		case 5:
			TweenMax.to(work_item_text_5,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_5,  0,       {delay:.5});
		break;
		case 6:
			TweenMax.to(work_item_text_6,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_6,  0,       {delay:.5});
		break;
		case 7:
			TweenMax.to(work_item_text_7,  .5,       {height:"0%", opacity:0, ease: Expo.easeOut});
			TweenMax.to(work_item_text_7,  0,       {delay:.5});
		break;
	}	
};
