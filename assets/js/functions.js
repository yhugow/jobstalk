var app = {
    init : function() {
        app.eventListener();
        auth.clearErrorMsg();
    },
    eventListener : function() {
        $(document).on('click', '.btn-signin', function(e) {
            var email_address = $('.signin-email-address').val(),
                password = $('.signin-password').val();

            if(email_address != '' && password != '') {
                app.signin(email_address, password);
            } 
            else {
                $('.signin-error-message').html('Some fields are empty');
            }
        });

        $('#signup-form').submit(function(e){
            e.preventDefault();
            var formData = new FormData($(this)[0]);       
            console.log(formData);
            $.ajax({
                type : 'POST',
                url : api_url+'/signup',
                data : formData,
                contentType : false,
                cache       : false,
                processData : false,
                success : function(res) {
                    console.log(res);
                    if(res.errorCode ==0) {
                        auth.setCookie('user_id', res.response.user_id, 7);
                        auth.setCookie('role', res.response.role, 7);
                        // location.href='account';
                        location.reload();
                    }
                    else {
                        $('.signup-error-message').html(res.errorMsg);
                    }
                }
            });
        });

        $(document).on('click', '.btn-bpc', function(e) {
            var username = $('.bpc-username').val(),
                password = $('.bpc-password').val();

            if(username != '' && password != '') {
                app.signinBPC(username, password);
            } 
            else {
                $('.bpc-error-message').html('Some fields are empty');
            }
        });

        $(document).on('click','.signout', function(e) {
            auth.eraseCookie('user_id');
            auth.eraseCookie('role');
            location.reload();
        });
    },
    signin : function(email_address, password) {
        $.ajax({
            type : 'POST',
            url : api_url+'/signin',
            data : {
                email_address : email_address,
                password : password
            },
            success: function(res) {
                console.log(res);
                if(res.errorCode ==0) {
                    auth.setCookie('user_id', res.response.user_id, 7);
                    auth.setCookie('role', res.response.role, 7);
                    location.reload();
                }
                else {
                    $('.signin-error-message').html(res.errorMsg);
                }
            }
        });
    },
    signinBPC : function(username, password) {
        $.ajax({
            type : 'POST',
            url : api_url+'/bpc-signin',
            data : {
                username : username,
                password : password
            },
            success: function(res) {
                console.log(res);
                if(res.errorCode ==0) {
                    auth.setCookie('user_id', res.response.user_id, 7);
                    auth.setCookie('role', res.response.role, 7);
                    // location.href='account';
                    location.reload();
                } 
                else {
                    $('.signin-error-message').html(res.errorMsg);
                }
            }
        });
    }
}


var auth = {
    clearErrorMsg : function() {
        $(document).on('keyup', '.signin-email-address, .signin-password', function(e) {
            $('.signin-error-message').text('');
            e.preventDefault();
        });
    },
    setCookie : function(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    },
    getCookie : function(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    },
    eraseCookie: function(name) {
        // document.cookie = name+'=; Max-Age=-99999999;';  
        // alert(name);
        document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        // document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
    
}

app.init(); 