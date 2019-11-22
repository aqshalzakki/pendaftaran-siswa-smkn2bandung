$(function(){

	$(window).scroll(function() {
		
		let scroll = $(window).scrollTop();
	  	if(scroll >= 3235 && scroll <= 4036) {

			$('.nav-jurusan').addClass('active');
			$('.nav-home').removeClass('active');
		} else {
			$('.nav-jurusan').removeClass('active');
			$('.nav-home').addClass('active');
		}
	});

})