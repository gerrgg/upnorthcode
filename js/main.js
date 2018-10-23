jQuery(document).ready(function( $ ){
  $('#clearForm').click(function(){
    $('#s').val('');
  });

  console.log( ajax_object.ajax_url );

  $('#s').keyup(function(){
    var data = {
      'action': 'unc_ajax_search',
      'str':  this.value
    }
    $.post( ajax_object.ajax_url, data, function( response ){
      console.log( response );
    });
  });
});
