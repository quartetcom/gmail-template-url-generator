$(function () {
    $('#main-form').on('submit', function (e) {
        e.preventDefault();

        var to = $('#main-form [name="to"]').val();
        var cc = $('#main-form [name="cc"]').val();
        var bcc = $('#main-form [name="bcc"]').val();
        var subject = $('#main-form [name="subject"]').val();
        var body = $('#main-form [name="body"]').val();

        subject = encodeURIComponent(subject);
        body = encodeURIComponent(body);

        var result = 'https://mail.google.com/mail/?view=cm&to=' + to + '&cc=' + cc + '&bcc=' + bcc + '&su=' + subject + '&body=' + body;

        $('#result').val(result).focus().select();
        $('#link-to-result').attr('href', result).attr('disabled', false);
    });
});
