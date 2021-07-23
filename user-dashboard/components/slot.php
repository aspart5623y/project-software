<?php 

    function slot($date, $time, $id) {
        $slot = "
            <!-- slot -->
            <div class=\"col-6 col-md-4 col-lg-6 p-1\">
                <div class=\"card alert-danger\"> 
                    <div class=\"card-body\"> 
                        Date: $date <br> 
                        Time: $time 
                        <input type=\"radio\" class=\"radio-button\" name=\"appt_slip\" value=\"$id\">
                    </div> 
                </div> 
            </div> 
        ";

        echo $slot;

    }


?>