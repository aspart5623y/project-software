function viewUsers() {

    // call ajax request
    $.ajax({
        url: './php/viewUsers.php',
        method: 'POST',
        beforeSend: function () {
            console.log('sending')
        },
        success: function (data) { 


            $('#users_table').html(data);


            $('.btn-details').on('click', function () {
                $id = $(this).attr('data-id');
                viewUsersDetails($id);
                $('#UsersModal').modal('show');
                
            });

        } 
    });    

}



setInterval(() => {
    viewUsers();
}, 500);



function viewUsersDetails(id) {
    
    $Users_id  = id;

    
    // call ajax request
    $.ajax({ 
        url: './php/viewUsersDetails.php', 
        method: 'POST', 
        data: { 
            users_id: $Users_id 
        }, 
        beforeSend: function () {  
            console.log('sending') 
        },
        success: function (data) {  
            $('.users-details').html(data); 
        } 
    });

}