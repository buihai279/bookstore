
  // $( function() {
  //   $( ".wrapSortable" ).sortable({
  //     });
  //   } );

 $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  $( function() {
    $( ".sortablecolumn" ).sortable({
      connectWith: ".sortablecolumn",
      cancel: ".ui-state-disabled",
      handle: ".portlet-header",
      items: "li:not(.ui-state-disabled)"
    });
  });