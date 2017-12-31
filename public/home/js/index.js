$(document).ready(function() {
  $('.modal').modal();
  $('select').material_select();
  $('input.autocomplete').autocomplete2({
    data: [
      {id:1,text:'Apple1',img:'http://placehold.it/250x250'},
      {id:1,text:'Apple2',img:'http://placehold.it/250x250'},
      {id:1,text:'Apple3',img:'http://placehold.it/250x250'},
      {id:1,text:'Apple4',img:'http://placehold.it/250x250'},
      {id:2,text:'Microsoft',img:'http://placehold.it/250x250'},
      {id:3,text:'Google',img:'http://placehold.it/250x250'},
    ]
  });
});