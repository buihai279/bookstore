$( document ).ready(function(){
			// menu
			 $(".button-collapse").sideNav();
			 //dropdown
			 $(".dropdown-button").dropdown();
		});
		$(document).ready(function () {
    //initialize swiper when document ready  
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'vertical',
    pagination: '.swiper-pagination',
        paginationClickable: true,
      loop: true
    });        
    // $('.swiper-pagination').html($('.swiper-wrapper').html());
    // $('.swiper-pagination .swiper-slide').height(50);
    // $('.swiper-pagination li').removeClass();
    // $('.swiper-pagination li').addclass("swiper-pagination-bullet");
    

    // $( ".swiper-wrapper li" ).each(function( index ) {
      // $( '.swiper-pagination span' ).eq(index).html( $('.swiper-wrapper li').eq(index).html() );
      // $( '.swiper-pagination span' ).eq( index).css( "background-color", "red" );
  // console.log( index + ": " + $( this ).text() );
// });

  });

