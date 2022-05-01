<?php

require_once 'Model/model.php';

// session_start();

if (isset($_POST["submit"])) {
    if (booking($_POST)) {
        // $msg = booking($data);
        echo 'Successfully Connect';
    } else {
        $msg = '<span class="red">Booking</span>';
        echo 'Sorry';
    }
}
