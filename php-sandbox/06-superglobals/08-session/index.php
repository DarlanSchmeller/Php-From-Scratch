<?php

    session_start();
    $_SESSION['name'] = 'john';

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    if (isset($_SESSION['name'])) {
        echo 'Name ' . $_SESSION['name'];
    } else {
        echo 'Name is not set';
    }