jQuery(document).ready(function( $ ){
	$('#lc-nav-icon').click(function(){
		$(this).toggleClass('open');
        $('#lc-nav-menu-container').toggleClass('lc-nav-menu-container-open');
	});
});