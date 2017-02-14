/*$(document).ready(function() {
    $('#user-password').click(function() {
        if($('#user-password').attr('type') == 'text') {
            $('#user-password').attr('type', 'password');
        } else {
            $('#user-password').attr('type', 'text');
        }
    });
});*/

$(document).ready(function() {
    $('#user-password').focusin(function() {
        $('#user-password').attr('type', 'text');
    });
});

$(document).ready(function() {
    $('#user-password').focusout(function() {
        $('#user-password').attr('type', 'password');
    });
});