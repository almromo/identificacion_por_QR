$( function() {

 // Single Select
 $( "#autocomplete" ).autocomplete({
  source: function( request, response ) {
   // Fetch data
   $.ajax({
    url: "/admin/alumno/busqueda",
    type: 'post',
    dataType: "json",
    data: {
     search: request.term,
     _token: $('meta[name="csrf-token"]').attr('content')
    },
    success: function( data ) {
     response( data );
    }
   });
  },
  select: function (event, ui) {
   $('#autocomplete').val(ui.item.label); // display the selected text
   return false;
  }
 });

});
function split( val ) {
   return val.split( /,\s*/ );
}
function extractLast( term ) {
   return split( term ).pop();
}
