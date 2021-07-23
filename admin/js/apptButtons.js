document.querySelector('.showMsgBtn').addEventListener('click', () => {
    showMsgBox();
});


$('#confirmAppt').on('click', function () {
    $id = $(this).attr('data-id');
    confirmAppt($id);    
});

function showMsgBox() {
    document.querySelector('.rejected-form').style.display = 'block';
};



var msg = document.querySelector('#reject_msg').value; 
document.querySelector('#rejectApptBtn').addEventListener('click', () => { 
    rejectAppt($id, msg); 
}) 



 
function confirmAppt(id) { 
    var apptID = id;
    // call ajax request 
    $.ajax({ 
        url: './php/confirmAppt.php', 
        method: 'POST', 
        data: { 
            appt_id: apptID
        }, 
        beforeSend: function () { 
            console.log('sending'); 
        }, 
        success: function () {  
            $('#apptModal').modal('hide');
        } 
    });

}



function rejectAppt(id) {
    var apptID = id, 
        appt_msg = msg;

    // call ajax request 
    $.ajax({ 
        url: './php/rejectAppt.php', 
        method: 'POST', 
        data: { 
            appt_msg: appt_msg,
            appt_id: apptID 
        }, 
        beforeSend: function () { 
            console.log('sending'); 
        }, 
        success: function () {  
            $('#apptModal').modal('hide');
        } 
    });
}