<?php

    if($_POST['latitude'] && $_POST['longitude'])
    {

       
        $departLong=32.62648662651979;
        $departLatit=  0.3480632150305755;
            $longitude=$_POST['longitude'];
             $latitude=$_POST['latitude'];

             if(($departLong==$longitude) &&  ($departLatit==$latitude))
             {
               echo "within";
             }else{
            echo "outrange";
             }
    }
    ?>
