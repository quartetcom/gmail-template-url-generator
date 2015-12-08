$(function () {
    var items = [];
    $('.form-group').each(function () {
        items.push($(this).find('div,pre').text());
    });

    var result = 'https://mail.google.com/mail/?view=cm&bcc=' + items[0] + '&su=' + encodeURIComponent(items[1]) + '&body=' + encodeURIComponent(items[2]);
    $('#link').attr('href', result);
});
