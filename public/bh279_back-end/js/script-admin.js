$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        rewindNav: false,
        pagination: false,
        // loop:true,
        margin:10,
        // nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:6
            },
            1000:{
                items:9
            }
        }
    });
});
 $(document).ready(function() {
    $('select').material_select();
  });
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
$( "#btnDeleteCategory" ).click(function() {
  $( "#fmtDeleteCategory" ).submit();
});
