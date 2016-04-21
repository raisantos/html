(function($){
	$(function(){
		$('.flexslider').flexslider();
	});
})(jQuery);

var container = document.querySelector('#masonry-loop');
//create empty var msnry
var msnry;
// initialize Masonry after all images have loaded
imagesLoaded( container, function() {
    msnry = new Masonry( container, {
        itemSelector: '.masonry-post'
    });
});