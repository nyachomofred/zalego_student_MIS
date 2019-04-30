$(function(){
    //get click event of the click button
    $('#modalButton').click(function(){
      $('#modal').modal('show')
      .find('#modalContent')
      .load($(this).attr('value'));
    });
});