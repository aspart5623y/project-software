function addSlip() {
    var date = document.querySelector('#apptDate').value,
        time = document.querySelector('#appt_time').value,
        error = document.querySelector('#ErrorMsg');
    
    
    if (date == '' || time == '') {
        error.textContent = 'Please enter a time and date!';
    } else {

        $.ajax({ 
            url: './php/save-configuration.php', 
            method: 'POST', 
            data: { 
                date: date,
                time: time
            }, 
            beforeSend: function () { 
                console.log('sending'); 
            }, 
            success: function (data) {  
                error.textContent = data;
                if (data == 'done') {
                    $('#slip').modal('hide');
                    error.textContent = '';
                    document.querySelector('#apptDate').value = '';
                    document.querySelector('#appt_time').value = '';
                }
            } 
        });

    }
    
}







function showSlip() {

     $.ajax({ 
        url: './php/show-slip.php', 
        method: 'POST',
        beforeSend: function () { 
            console.log('sending'); 
        }, 
        success: function (data) {  
            $('.showSlips').html(data);
            $('.btn-delete').on('click', function(){
                $id = $(this).attr('id');
                deleteSlot($id)
            });
        } 
    });

}



setInterval(() => {
    showSlip();
}, 500);


function deleteSlot(id) {
    $.ajax({ 
        url: './php/delete-slip.php', 
        method: 'POST', 
        data: { 
           id: id
        }, 
        beforeSend: function () { 
            console.log('deleting'); 
        }, 
        success: function (data ) {  
            if(data == 'done') {
                showSlip();
            }
        } 
    });
}