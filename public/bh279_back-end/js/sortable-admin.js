
  // $( function() {
  //   $( ".wrapSortable" ).sortable({
  //     });
  //   } );


  $( function() {
    $( ".sortablecolumn" ).sortable({
      connectWith: ".sortablecolumn",
      cancel: ".ui-state-disabled",
      handle: ".portlet-header",
      items: "li:not(.ui-state-disabled)"
    });
  });