$(document).ready(function () {

    //SIGNUP
    $('form#signup').submit(function (e1) {
        e1.preventDefault();
        let fName = $('#fname').val();
        let lName = $('#lname').val();
        let email = $('#email').val();
        let pwd1 = $('#pwd1').val();
        let pwd2 = $('#pwd2').val();
        let valid = true;

        if (fName.length < 1) {
            $('#fname').before('<span class=".error bg-danger p-1">Please enter your First Name</span>');
            valid = false;
        }
        if (lName.length < 1) {
            $('#lname').before('<span class=".error bg-danger p-1">Please enter your Last Name</span>');
            valid = false;
        }
        if (email.length < 1) {
            $('#email').before('<span class=".error bg-danger p-1">Please enter your Email</span>');
            valid = false;
        } else {
            let regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            let validEmail = regEx.test(email);
            if (!validEmail) {
                $('#email').before('<span class=".error bg-danger p-1">Please enter a valid Email</span>');
                valid = false;
            }
        }
        if (pwd1.length < 1) {
            $('#pwd1').before('<span class=".error bg-danger p-1">Please enter your Password</span>');
            valid = false;
        } else {
            if (pwd1 != pwd2) {
                $('#pwd1').before('<span class=".error bg-danger p-1">The two passwords do not match</span>');
                $('#pwd2').before('<span class=".error bg-danger p-1">The two passwords do not match</span>');
                valid = false;
            }
        }

        if (valid) {
            this.submit();
        }
    });


    //LOGIN
    /*
    $('form#login').submit(function (e2) {
        e2.preventDefault();
        let email = $('#email').val();
        let pwd1 = $('#pwd1').val();
        let valid = true;

        if (email.length < 1) {
            $('#email').before('<span class=".error bg-danger p-1">Please enter your Email</span>');
            let valid = false;
        } else {
            let regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            let validEmail = regEx.test(email);
            if (!validEmail) {
                $('#email').before('<span class=".error bg-danger p-1">Please enter a valid Email</span>');
                let valid = false;
            }
        }
        if (pwd1.length < 1) {
            $('#pwd1').before('<span class=".error bg-danger p-1">Please enter your Password</span>');
            let valid = false;
        }

        if (valid) {
            this.submit();
        }
    });
    */
});