<?php 
    function contactNo($data){
        return 'OK';
        return $data;
    }

    if (isset($_POST['contactNo'])) {
        echo contactNo($_POST['contactNo']);
    }
?>