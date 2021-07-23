

function showSlip() {

     $.ajax({ 
        url: './php/show-slip.php', 
        method: 'POST',
        beforeSend: function () { 
            console.log('sending'); 
        }, 
        success: function (data) {  
            $('.slider').html(data);
        } 
    });

}



showSlip();
