
//
// ./resources/public/assets/ajaxCategory.js
// Menu Dynamique
//

$('.categories-filter a').click(function(e) {
    e.preventDefault();
    const id = this.dataset.id
    $.get(`http://localhost:8888/projet/platz-project/public/ajax/categories/${id}`)
    .done((data) => {
        $('#main-container-image').html(data)
        $('#more').remove()
    });
});