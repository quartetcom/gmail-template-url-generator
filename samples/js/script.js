$(function () {
    var items = {};
    $('.form-group').each(function () {
        var key = $(this).find('label').text().toLowerCase();
        if (key === 'subject') {
            key = 'su';
        }
        items[key] = encodeURIComponent($( this ).find( 'div,pre' ).text());
    });

    var result = 'https://mail.google.com/mail/?view=cm';
    for ( var key in items ) {
        if ( items.hasOwnProperty( key ) ) {
            if ( key === 'subject' ) {
                key = 'su';
            }
            result += '&' + key + '=' + items[key];
        }
    }
    $('#link').attr('href', result);
});
