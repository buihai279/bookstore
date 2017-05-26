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
      var url=$(this).attr('data-url');
      $("#fmtDeleteSave").attr('action',url);
      $("#fmtDeleteSave").submit();
    });

     $('#infoUserCheckbox').click(function(){
        $( "#order_address_hide" ).toggle();
     });


    $('.btn-item-delete').click(function(){
      var id=$(this).attr('data-product-id');
      $("[data-form-id='"+id+"']").submit();
    });

    $('.add-to-cart').click(function(){
      var url=$(this).attr('data-url');
      $("#data-input-add-to-cart").val(url);
      $("#data-form-add-to-cart").submit();
    });

    $('.btn-save-for-later').click(function(){
      var id=$(this).attr('data-product-id');
      $("#saveId").val(id);
      $("#form_save").submit();
      
    });


    $('.number-format').number( true);


    $('.tooltipped').tooltip({delay: 50});


			// menu
			 $(".button-collapse").sideNav();
			 //dropdown
			 $(".dropdown-button").dropdown();

    //initialize swiper when document ready  
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'vertical',
      pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplaying:true,
        autoplay:1000,
      loop: true
    });      


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
      });


    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();


    $('.png-loading').hide();
    $(".add-to-cart" ).click(function() {
        png_loading();
    });
});


$(window).on('load', function(){
        png_loading();
  });
function png_loading() {
  $('.png-loading').show();
  var arr=[
  "",
  "https://cdn.codemyui.com/wp-content/uploads/2015/09/Google-SVG-Logo-Using-GreenSock-Animation.gif",
  "http://www.acikmavi.org/img/formloading.gif",
  "http://img1.dowebok.com/162s.gif",
  "http://companykanoon.com/wp-content/themes/twentysixteen-child/images/loader-dark.gif",
  "http://phylo.cs.mcgill.ca/assets/img/loading.gif",
  "https://s-media-cache-ak0.pinimg.com/originals/0c/44/da/0c44dacf1b038014a6f941131c5e8aa2.gif"];
  var x = Math.floor((Math.random() * 6) + 1);
  $('.png-loading').css('background-image', 'url(' + arr[x] + ')');
      
  setTimeout(function(){ $('.png-loading').hide(); }, 2000);
sett
}
