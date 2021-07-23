
/* ========================  P R E L O A D E R  ======================= */

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('preloader').classList.add('loaded');
        ready()
    });
} else {
    ready()
}


function ready() {
    /* ========================  S I D E B A R    T O G G L E R  ======================= */
    document.querySelector('#navbar-toggler').addEventListener('click', function() {
        document.querySelector('.admin-panel').classList.toggle('active');
    });
   


    /* ========================  F O O T E R    D A T E  ======================= */
    var d = new Date();
    document.getElementById("footerYear").textContent = d.getFullYear();  
    
    var errorMsg = document.querySelector('.error-msg');
    document.querySelector('.new1 button').addEventListener('click', () => {

        var title = document.getElementById('title').value,
            description = document.getElementById('description').value;
        
        if (title == '' || description == '') {
            errorMsg.style.display = 'block';
            errorMsg.textContent = 'Please enter a title and description for the appointment!';
        } else {
            document.querySelector('.new1').classList.remove('active')
            document.querySelector('.new2').classList.add('active')
            errorMsg.style.display = 'none';
        }

        
    });

    

    document.querySelector('.new2 a').addEventListener('click', () => {
        document.querySelector('.new2').classList.remove('active')
        document.querySelector('.new1').classList.add('active')
    });



   

    // setTime();
    
}





function sendAppt() {

    var errorMsg = document.querySelector('.error-msg'),
        title = document.getElementById('title').value,
        description = document.getElementById('description').value,
        slot_id = document.querySelectorAll('.radio-button');
    
    
    for (i = 0; i <= slot_id.length; i++) {
        slot_id[i].addEventListener('click', () => {
            console.log('oww')
        })
    }

    
    

    // call ajax request
    $.ajax({
        url: './php/sendAppt.php',
        method: 'POST',
        data: {
            title: title,
            description: description,
            slot_id: slot_id 
        }, 
        beforeSend: function () {
            document.querySelector('#send_appt').innerHTML = '<i class="loader fas fa-sync d-block text-muted" style="font-size: 25px"></i>';
        },
        success: function (data) { 
            document.querySelector('#send_appt').innerHTML = 'Book Appointment';


            if (data.substring(0, 4) == "http") { 
                location.href = data; 
            } else { 
                errorMsg.style.display = "block"; 
                errorMsg.textContent = data; 
            }

        }     
    }); 
    
}