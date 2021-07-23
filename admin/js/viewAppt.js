function viewAppt() {

    // call ajax request
    $.ajax({
        url: './php/viewAppt.php',
        method: 'POST',
        beforeSend: function () {
            console.log('sending')
        },
        success: function (data) { 

            // data = $.parseJSON(data);

            // if (data.status == 'success') { 
                $('#incoming_appt_table').html(data);


                $('.btn-details').on('click', function () {
                    $id = $(this).attr('data-id');
                    viewApptDetails($id);
                    $('#apptModal').modal('show');
                    
                });
            // }

        } 
    });    

}



setInterval(() => {
    viewAppt();
}, 500);





function viewApptDetails(id) {
    
    $appt_id  = id;

    
    // call ajax request
    $.ajax({ 
        url: './php/viewApptDetails.php', 
        method: 'POST', 
        data: { 
            appt_id: $appt_id
        }, 
        beforeSend: function () {  
            console.log('sending') 
        },
        success: function (data) {  
            $('.appt-details').html(data); 
        } 
    });

}