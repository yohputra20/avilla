$(document).ready(function() {
    $('#login').click(function(){
        event.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();

        if (password == "" || username == "") {            
            $('#error_login').text('Please insert your username or password');
            $('#error_login').css('display', 'block');
            // $('#error_login').text('Please insert your Password');
        } else {
            $.ajax({
                type: 'POST',
                url: base_url+'admin/login/login',
                data: {
                    username: username,
                    password: password,
                },
                datatype: 'JSON',
                beforeSend: function () {
                    $('#error_login').css('display', 'none');
                },
                success: function (data) {
                    var data = JSON.parse(data);
                    console.log(data);
                    console.log(data.status);

                    if (data.status == 1) {
                        location.href = base_url+'admin/home';
                    } else {
                        $('#error_login').text('Error. Please check your username or password');
                        $('#error_login').css('display', 'block');
                        // $('#error_login').text('Error. Please enter correct Password.');
                    }

                },
                error: function () {
                    $('#error_login').text('Error. Please check your username or password');
                    $('#error_login').css('display', 'block');
                    // $('#error_login').text('Error. Please enter correct Password.');
                }
            });
        }
    });
});