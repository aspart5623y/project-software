<?php 

    function slot($date, $time, $id) {
        $slot = "
            <!-- slot -->
            <div class=\"col-sm-6 col-lg-4 col-xl-3 px-0 px-sm-2 my-2\"> 
                <div class=\"card alert-danger\"> 
                    <div class=\"card-body\"> 
                        <button type=\"button\" id=\"$id\" class=\"close btn-delete\">&times;</button> 
                        Date: $date <br> 
                        Time: $time 
                    </div> 
                </div> 
            </div> 
        ";

        echo $slot;

    }


?>