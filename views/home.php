<?php

/** @var $params array
 */

?>

<div class="overflow-scroll pt-7" style="max-height: 100vh;">

    <?php

    if($params){
        foreach ($params as $parm) {


            echo "
            <div class='card mb-3 ms-3 me-3'>
                
                    <div class='row g-0'>
                        <div class='col-md-4'>
                            <img src='../assets/uploads/$parm[service_img]' class='img-fluid rounded-start' alt='...'>
                        </div>
                        <div class='col-md-8'>
                            <div class='card-body p-2'>
                                <p class='card-title p-0 m-0'>$parm[service_name] - $parm[price]$</p>
                                <p class='card-text p-0 m-0'>$parm[store_name] - $parm[location]</p>
                            </div>
                            <div class='card-footer p-2'>
                                <div class='row'>
                                    <div class='col-md-6 d-flex justify-content-center align-items-center'>
                                    <span>$parm[reservation_time]</span>
                                        
                                    </div>
                                    <div class='col-md-6  d-flex justify-content-center align-items-center'>
                                        <button class='btn btn-sm btn-success mb-0'>Reserve</button>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
            ";

        }
    } else{
        echo "<h1 style='color: white;'>NO RESERVED SERVICES</h1>>";
    }

    ?>


</div>