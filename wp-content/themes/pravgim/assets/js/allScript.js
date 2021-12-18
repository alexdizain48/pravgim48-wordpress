 
//Календарь
$(document).ready(function() {
   $("#calendar").mCustomScrollbar({
		scrollbarPosition:"inside",
		contentTouchScroll:25,
		theme:"dark-thin",
		scrollInertia:5
	});  
});

//Карусель на главной странице
$(document).ready(function() {
    $("#owl-demo").owlCarousel({
       autoPlay: 5000,
       items : 4,
	   mouseDrag : true,
	   touchDrag : true,
	    pagination : true,
        paginationNumbers: false,
	   responsive : true,
       itemsDesktop : [1199,4],
       itemsDesktopSmall : [980,3],
       itemsTablet: [768,2],
       itemsTabletSmall: false,
       itemsMobile : [479,1],
       singleItem : false,
       itemsScaleUp : false,
     });  
});

//Слайдер в хедере
$(document).ready(function() {
  $(function () {
	 $("#slider1").responsiveSlides({
		maxwidth: 1000,
		speed: 800
	 });
  });
});

$('.fancybox-buttons').fancybox({
	openEffect  : 'none',
	closeEffect : 'none',

	prevEffect : 'none',
	nextEffect : 'none',

	closeBtn  : false,

	helpers : {
		title : {
			type : 'inside'
		},
		buttons	: {
			position: 'bottom'
			}
	}
				
});

/**
 * Common stuff used on all FooTable demos
 */
$(document).ready(function() {
$(function () {

    //setup tabs for the demo
    $('.nav-tabs a').click(function (e) {

        //show the tab!
        $(this).tab('show');

    }).on('shown', function (e) {

        //make sure that any footable in the visible tab is resized
        $('.tab-pane.active .footable').trigger('footable_resize');

    });

    //if there is a hash, then show the tab
    if (window.location.hash.length > 0) {
        $('.nav-tabs a[href="' + window.location.hash + '"]').tab('show');
    }

});
$(function () {
	$('table').footable();
});
});

  
  