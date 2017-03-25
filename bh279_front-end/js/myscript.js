(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=868245903223472";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
$( document ).ready(function(){
    $('.save-book').click(function(){
      var id=$(this).attr('data-id');
      $(".saveId").val(id);
      $("#form-save").submit();
    });
    $('.btn-delete-save').click(function(){
      var id=$(this).attr('data-id');
      $("#fmtDeleteSave[data-form-id='"+id+"']").submit();
    });
     $('#infoUserCheckbox').click(function(){
        $( "#order_address_hide" ).toggle();
     })
    $('.btn-item-delete').click(function(){
      var id=$(this).attr('data-product-id');
      $("[data-form-id='"+id+"']").submit();
    });
    $('.btn-save-for-later').click(function(){
      alert($(this).attr('data-product-id'));
    });
    $('.number-format').number( true);
    $('.number-format').number( true);
    $('.tooltipped').tooltip({delay: 50});
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
$('.show-menu').hover(function() {
    $('#fixed-menu').show();
    $('#overlay-body').show();
  }, function() {
    $('#fixed-menu').hover(
        function(){

        },function(){
          $('#fixed-menu').hide();
          $('#overlay-body').hide();
    });
  })
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
       $('.show-menu').show();
   }
   if($(window).scrollTop() + $(window).height() < $(document).height() - 100) {
       $('.show-menu').hide();
   }
});
});
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

