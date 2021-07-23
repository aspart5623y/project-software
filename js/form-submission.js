function register() {
    // get elements
    var fname = document.getElementById('f_name').value,
        lname = document.getElementById('l_name').value,
        email = document.getElementById('email').value,
        phone = document.getElementById('phone').value,
        password = document.getElementById('myPass').value;
        error_msg = document.getElementById('error-box');
    

    // validate field
    if (fname == '' || lname == '') {
        error_msg.style.display = "block";
        error_msg.textContent = "Please enter your first name and your last name!";
    } else if (email == '' || email.indexOf('@' && '.') == -1) {
        error_msg.style.display = "block";
        error_msg.textContent = "Please enter a valid email!";
    } else if (phone == '' || isNaN(phone)) {
        error_msg.style.display = "block";
        error_msg.textContent = "Please enter a valid phone number!";
    } else if (password == '' || password.length < 5) {
        error_msg.style.display = "block";
        error_msg.textContent = "Your password should be up to 5 characters!";
    } else {
        error_msg.style.display = "none";
        

        // call ajax request
        $.ajax({
            url: './php/register.php',
            method: 'POST',
            data: {
                fname: fname,
                lname: lname,
                email: email,
                phone: phone,
                password: password
            },
            // beforeSend: function () {
            //     $('#loading').modal('show');
            // },
            success: function (data) {                    
                
                if (data.substring(0, 4) == "http") {
                    location.href = data;
                } else {
                    error_msg.style.display = "block";
                    error_msg.textContent = data;
                }
            }
        })
    

    }


}


























function login() {

    // get elements
    var email = document.getElementById('email').value,
        password = document.getElementById('myPass').value,
        book = document.getElementById('book').value,
        error_msg = document.getElementById('error-box');
    
    

    if (email == '' || email.indexOf('@' && '.') == -1) {
        error_msg.style.display = "block";
        error_msg.textContent = "Please enter a valid email!";
    } else if (password == '') {
        error_msg.style.display = "block";
        error_msg.textContent = "Please enter your password";
    } else {
        error_msg.style.display = "none";


        // call ajax request
        $.ajax({
            url: './php/login.php',
            method: 'POST',
            data: {
                email: email,
                book: book,
                password: password
            },
            // beforeSend: function () {
            //     $('#loading').modal('show');
            // },
            success: function (data) {                    
                
                if (data.substring(0, 4) == "http") {
                    location.href = data;
                } else {
                    error_msg.style.display = "block";
                    error_msg.textContent = data;
                }
            }
        })
    }




}