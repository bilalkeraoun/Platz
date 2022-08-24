//
// ./resources/public/assets/more.js
// More resources
//




    let offSet = 10;

    $('#more').click(function (e) {
        e.preventDefault();
        $.get("http://localhost:8888/projet/platz-project/public/ajax/more", {offSet})
        .done((data) => {
            $('#main-container-image').append(data)
            offSet+=10
        })
    })