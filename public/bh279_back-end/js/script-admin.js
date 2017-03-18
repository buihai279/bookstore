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
 function openPopup() {
 CKFinder.popup( {
     chooseFiles: true,
     onInit: function( finder ) {
         finder.on( 'files:choose', function( evt ) {
             var file = evt.data.files.first();
             var url= file.getUrl();
             $('#book_image').attr( "src",url );
             $('#url').val(url );

         } );
         finder.on( 'file:choose:resizedImage', function( evt ) {
             var url= evt.data.resizedUrl;
             $('#book_image').attr( "src",url );
             $('#url').val(url );
         } );
     }
 } );
}
 function openPopupImages() {
 CKFinder.popup( {
     chooseFiles: true,
     onInit: function( finder ) {
         finder.on( 'files:choose', function( evt ) {
             var files = evt.data.files;
             var arr=files.models;
             for (var i = arr.length - 1; i >= 0; i--) {
                $(".images-book").append(
                    "<div class='item-image' id='item-image-"+i+"'><img src='"+arr[i].attributes.url+"' height='150px'><input type='text' hidden='hidden' value='"+arr[i].attributes.url+"' name='txtImages[]'><a class='waves-effect waves-light btn red' onclick='deleteImg("+i+")'><i class='material-icons'>delete</i></a></div>"
                    );
             }

         } );
         finder.on( 'file:choose:resizedImage', function( evt ) {
             var url= evt.data.resizedUrl;
            var x = Math.floor((Math.random() * 999888999) + 1);
             $(".images-book").append(
                    "<div class='item-image' id='item-image-"+x+"'><img src='"+url+"' height='150px'><input type='text' hidden='hidden' value='' name='txtImages[]'><a class='waves-effect waves-light btn red' onclick='deleteImg("+x+")'><i class='material-icons'>delete</i></a></div>"
                    );
         } );
     }
 } );
}
