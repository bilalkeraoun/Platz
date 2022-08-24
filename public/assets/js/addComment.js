//
// ./resources/public/assets/addComment.js
// Ajout d'un commentaire
//


$('#contact').submit(function(e) {
  e.preventDefault();
  $.get("http://localhost:8888/projet/platz-project/public/ajax/comments", {
    pseudo: $('#pseudo').val(),
    content: $('#commentContent').val(),
    postID: $('#postID').val()
  })
   .done(function (rep) {
      $('#commentsShow').append(rep)
                        .find('li:last-of-type')
                        .hide()
                        .slideDown();
      $('#pseudo').val('');
      $('#commentContent').val('');
   });
  
   
});