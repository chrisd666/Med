$(document).ready(function () {

    //SIGNUP
    $('form#signup').submit(function (e1) {
        e1.preventDefault();
        let fName = $('#fname').val();
        let lName = $('#lname').val();
        let email = $('#email').val();
        let pwd1 = $('#pwd1').val();
        let pwd2 = $('#pwd2').val();
        let error = [];
        let valid = true;

        $('.errors').hide();

        if (fName.length < 1) {
            error.push('<span>Please enter your First Name</span><br>');
            valid = false;
        }
        if (lName.length < 1) {
            error.push('<span>Please enter your Last Name</span><br>');
            valid = false;
        }
        if (email.length < 1) {
            error.push('<span>Please enter your Email</span><br>');
            valid = false;
        } else {
            let regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            let validEmail = regEx.test(email);
            if (!validEmail) {
                error.push('<span>Please enter a valid Email</span><br>');
                valid = false;
            }
        }
        if (pwd1.length < 1) {
            error.push('<span>Please enter your Password</span><br>');
            valid = false;
        } else {
            if (pwd1 != pwd2) {
                error.push('<span>The two passwords do not match</span>');
                valid = false;
            }
        }

        if (valid) {
            this.submit();
        } else {
            $('.alert-danger').html(error);
            $('.errors').show();
            $('.alert-danger').css('padding', '20px');
        }
    });


    //LOGIN

    $('form#log').submit(function (e2) {
        e2.preventDefault();
        let email = $('#email').val();
        let pwd1 = $('#pwd1').val();
        let error = [];
        let valid = true;

        $('.errors').remove();

        if (email.length < 1) {
            error.push('<span>Please enter your Email</span><br>');
            let valid = false;
        } else {
            let regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            let validEmail = regEx.test(email);
            if (!validEmail) {
                error.push('<span>Please enter a valid Email</span><br>');
                let valid = false;
            }
        }
        if (pwd1.length < 1) {
            error.push('<span>Please enter your Password</span>');
            let valid = false;
        }

        if (valid) {
            this.submit();
        } else {
            $('.alert-danger').html(error);
            $('.errors').show();
            $('.alert-danger').css('padding', '20px');
        }
    });

});