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
                items:8
            }
        }
    });
});
 $(document).ready(function() {
    $('select').material_select();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

    $( ".btnDelete" ).click(function() {
        
      $( ".fmtDelete" ).submit();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd' 
    });
});
 function deleteImg(id){
        $('#item-image-'+id).remove();
    }
    // Upload nhieu anh

$('#btnUploadImages').click(function(){
  $('#inputUploadImages').click();
  $('#inputUploadImages').change(function(){
    $('#btnSubmitImages').click();
  });
}); 
$('#btnUploadAvatar').click(function(){
  $('#inputUploadAvatar').click();
  $('#inputUploadAvatar').change(function(){
    $('#btnSubmitAvatar').click();
  });
});
$('#btnUploadAvatarAuthor').click(function(){
  $('#inputUploadAvatar').click();
  $('#inputUploadAvatar').change(function(){
    $('#btnSubmitAvatar').click();
  });
});
$('#btnUploadLogoCompany').click(function(){
  $('#inputUploadAvatar').click();
  $('#inputUploadAvatar').change(function(){
    $('#btnSubmitAvatar').click();
  });
});
$('#btnUploadImageSlide').click(function(){
  // alert(1);
  $('#inputUploadAvatar').click();
  $('#inputUploadAvatar').change(function(){
    $('#btnSubmitAvatar').click();
  });
});