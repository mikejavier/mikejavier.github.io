jQuery(document).ready(function($) {

    // Inicia o waves effect
    Waves.init();
    Waves.attach('.md-effect');
    Waves.attach('.md-effect-light',['waves-light']);
    Waves.attach('.md-effect-color',['waves-color']);

    $.ajax({
        url: 'https://api.github.com/users/mikejavier/repos',
        type: 'GET'
    })
    .done(function(data) {
        for (var i = 0; i < data.length; i++) {
            $('[data-inject="true"]').append(
                '<article class="card-item">'+
                    '<h1 class="projeto-item-title">' + data[i].name + '</h1>'+
                    '<p class="projeto-item-excerpt">' + data[i].description + '</p>'+
                    '<div class="projeto-item-action">'+
                        '<a href="' + data[i].html_url + '" class="flat-button md-effect-color" target="_blank">Ver Projeto</a>'+
                    '</div>'+
                '</article>'
            );
        };

        Waves.init();
        Waves.attach('.md-effect-light',['waves-light']);
        Waves.attach('.md-effect-color',['waves-color']);
    })
    .fail(function() {
        console.log("error");
    });

});
