$('document').ready(function() {
    $('#button').click(function() {
        /**
        console.log('clicked');
        $('#employees').children().each(function(i, div) {
            $('#employees').prepend(div);
        });
        */
        var page = getParameterByName('page');

        $.ajax({
            type: 'GET',
            url: '/employees',
            dataType: 'json',
            data: {'page' : page},
            success: function(response) {
                console.log(Object.keys(response));
                console.log(response.data);

                for (var i = 0; i < response.data.length; i++) {
                    console.log(response.data[i]);
                }

            }
        });

    });


});


function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
